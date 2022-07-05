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
            $view->set_msg('Usuário ou senha invalidos!');
            $view->render();
            unset($view);
        }
    }
    else
    {
            $view = new view_default_index();
            $view->set_msg('Informe os dados de login');
            $view->render();
            unset($view);
    }