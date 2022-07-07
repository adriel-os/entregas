<?php
$auth = Auth::getInstance();

if($auth->isLogged())
{
   include_once 'usuario.php';
}
else
{
    $view = new view_default_index();
    $view->render();
    unset($view);
}
