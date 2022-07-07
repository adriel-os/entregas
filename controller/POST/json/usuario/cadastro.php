<?php
$usuario = new Model_Usuario();
$usuario->populate($rotas->variables);

if(!is_null($rotas->variables) and $usuario->insert())
{
    echo json_encode($usuario->dados);
}
else
{
      echo json_encode(array('acao'=>false, 'msg_class'=> $usuario->msg, 'msg'=>'Usuário não cadastrado, revise os dados.', 'dados'=>$rotas->variables));
}

