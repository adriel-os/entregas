<?php
// Leia-me: 
// para usar este roteador é necessário 
// aplicar o .htaccess redirecionando as requisições para /index.php 
// 
class Router
{

    public $uri;    	
    public $method;  	
    public $query;   	
    public $variables; 
    public $controller;
    public $accept;
    public $contextContent;

    function __construct($request)//usar variavel $_SERVER
    {
        $this->uri      = $request['REQUEST_URI'];
        $this->method   = $request['REQUEST_METHOD'];
        $this->query    = $request['QUERY_STRING'];
        $this->self     = $request['PHP_SELF'];
        $this->root     = $request['DOCUMENT_ROOT'];
        $this->localAbsoluto = '';

        if(!isset($request['CONTENT_TYPE']))
        $this->contentType = 'text/html';
        else
        $this->contentType = $request['CONTENT_TYPE'];
        
        $this->set_contextContent();
        $this->set_variables();

        if($this->set_controller())
        {
            $this->require_controller();
        }
    }

    function set_contextContent()
    {//dependendo do tipo de retorno, buscar na pasta especifica JSON ou HTML
        //echo $this->contentType;
        if( strpos(strtolower($this->contentType), 'json') > 0 
            or $this->contentType == 'json' 
            or strpos(strtolower($this->contentType), 'form'))
        {
        
            $this->contextContent = 'json';
        }
        else
        {
            $this->contextContent = 'html';
        }
    }

    function set_controller()
    {
        $result = strtolower(strstr($this->uri, '/'));

        if(strpos($result, '/css') > 0 or strpos($result, '/js') > 0 ) // se for arquivo css estático
        {
           // se for css, js ou imagem deve assumir comportamento abaixo
           // no momento está public, mas pode ser adicionado uma nova camada impedindo
           // users nao logados.

           
            $this->localAbsoluto = __DIR__ . '/..'. $result ;

            if(strpos($result, '/css') > 0)
                header("Content-type: text/css", true);
            if(strpos($result, '/js') > 0)
                header("Content-type: application/x-javascript", true);  

            include_once $this->localAbsoluto;
            return true;
        }

        // se for imagem/ todo? aplicar comportamento header
        if(strpos($result, '/img') > 0)
        {
            $this->localAbsoluto = __DIR__ . '/..'. $result ;
            $img = imagecreatefromjpeg( $this->localAbsoluto);
            header('Content-type: image/jpg');  
            imagejpeg($img, null, 10);
            imagedestroy($img);
            return true;
        }  

        if(strpos($result, '?') > 0)
        {
            $result = strstr($result, '?', true);
        }
        
        if(strpos($result, '.php') > 0)
        {
            $result = strstr($result, '.php', true);
        }

        if($result == '/')
        {
            $result = '/index';
        }
    
        $result = 'controller/'. $this->method. '/' . $this->contextContent . $result;
       // echo $result;

        $result = $result .'.php';
        // echo __DIR__;
        $this->localAbsoluto = __DIR__ . '/../'. $result ;

        // var_dump( file_exists($this->localAbsoluto ));
        // echo $this->localAbsoluto ;


        if(!file_exists($this->localAbsoluto))
        {
            echo '<span style="font-size:18px; margin:15px; padding:6px;">Controller não encontrado:'.$result.'</span>';
            return false;
        }

        $this->controller = $result;       
        return true;
    }

    
    function set_variables()
    {
    // Pegar as variaveis da queryString
    // transforma em array de valores

        if($this->method == 'GET' and (is_null($this->query) or $this->query == ''))
        {
            return false;
        }
        if($this->method == 'GET')
        {
            if(strrpos($this->query, "&") > 0)
            $URI_vars = explode('&', $this->query);
            else 
            $URI_vars[] = $this->query;

            $result = array();
            foreach($URI_vars as $pos => $var)
            {
                $varTemp = explode( '=', $var);
                $result[$varTemp[0]] = $varTemp[1];
            }
            $URI_vars = $result;
            $this->variables = $URI_vars;
            return true;
        }
        else
        $this->variables = $_REQUEST;
    }

    function require_controller()
    {
        ${$this->method} = $this->variables;
        //echo $this->controller;
        $rotas = $this;
        require_once($this->localAbsoluto );
    }

function __destruct() {}

}



