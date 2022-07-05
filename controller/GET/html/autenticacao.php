<?php
$auth = Auth::getInstance();

if($auth->isLogged())
{
    header("location: /usuario");
}
else
{  
    $view = new view_default_index();
    $view->render();
    unset($view);
}
