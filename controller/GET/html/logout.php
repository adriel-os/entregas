<?php
$auth = Auth::getInstance();
if($auth->isLogged())
{
    $auth->logout();
    new view_default_index(['msg'=>'Você fez logoff!']);
}
else
{  
   new view_default_index(array('msg'=>'Você precisa estar logado para sair!'));
}

echo 'okok';