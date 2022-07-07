<?php
class Model_Usuario extends Model_Abstract{

    public $tabela = 'usuarios';

    //atributos esperados para um Usuário
    protected   $id;
    protected   $nome;
    protected   $status;
    protected   $email;
    protected   $funcao;
    protected   $login;
    protected   $senha;


    function __construct() 
    {
        parent::__construct();
    }

    
    function set_nome($valor)
    {
        $this->nome = $valor;
    }
    
    function set_senha($valor)
    {
        $this->senha = sha1($valor);
    }
    

}