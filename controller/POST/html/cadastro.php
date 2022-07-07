<?php
$usuario = new Model_Usuario();
$usuario->populate($rotas->variables);

if(!is_null($rotas->variables) and $usuario->insert())
{
    echo json_encode($usuario->dados);
    //Após o insert Realizar login Aqui
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
}
else
{
      echo json_encode(array('acao'=>false, 'msg_class'=> $usuario->msg, 'msg'=>'Usuário não cadastrado, revise os dados.', 'dados'=>$rotas->variables));
}

