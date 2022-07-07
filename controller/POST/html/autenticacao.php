<?php
$auth = Auth::getInstance();


//var_dump($_SERVER);
    if(isset($_POST['login']) and isset($_POST['password']))
    {

        // Realizar login Aqui
        $authAdapter = new Auth_Adapter_Db();
        $authAdapter->setUser($_POST['login']);
        $authAdapter->setPassword($_POST['password']);

        if($authAdapter->autenticate())
        {
            //se der certo então grava em $_SESSION
            
            $auth->write($authAdapter);
            header("location: /usuario");
      
            die();
        }
        else
        {
        
            $view = new view_default_index();
            $view->render(['post'=>$_POST, 'login'=>false, 'msg'=>array('Usuário ou senha invalidos!')]);
            unset($view);
        }
    }
    else
    {
            $view = new view_default_index();
            $view->render(['vars'=>$_POST, 'login'=>false, 'msg'=>array('Usuário ou senha invalidos!')]);
            unset($view);
    }