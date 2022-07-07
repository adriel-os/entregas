<?php

$auth = Auth::getInstance();
$usuario = new Model_Usuario();
$usuario->populate(array_merge($rotas->variables, array('status'=>1, 'funcao'=>'1')));
// $usuario->populate($rotas->variables);
$insert = $usuario->insert();


if($insert)
{

    //Após o insert Realizar login Aqui
    $authAdapter = new Auth_Adapter_Db();
    $authAdapter->setUser($usuario->login);
    $authAdapter->setPassword($usuario->senha);
 
    if($authAdapter->autenticate())
    {
        //se der certo então grava em $_SESSION
        $auth->write($authAdapter);
        header("location: /usuario");
        die();
    }
}
else
{
    $view = new view_default_index();
      
    if(count($usuario->msg) > 0)
    {
        foreach($usuario->msg as $key => $value)
        {
            $view->set_msgCadastro($value);
        }
    }

    $view->set_msgCadastro('Não foi possível cadastrar você. Revise os fatos.');
    $view->render($rotas->variables);
    unset($view);
}

