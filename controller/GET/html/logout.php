<?php
$auth = Auth::getInstance();
$view = new view_default_index();
if($auth->isLogged())
{
    $auth->logout();
    $view->render(['logout'=>true,  'msg'=>'Você saiu!']);
 
}
else
{  
    $view->render(['logout'=>true, 'msg'=>'Você não está logado!']);
}

unset($view);