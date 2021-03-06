<?php

//  autoloder pattern para classes 
//  nome da classe deve conter o mesmo
//  mapeamento da pasta e nome do aquivo
//  A classe "Model_Usuario" é igual a "model/usuario.php"

function classLoader($class_name) 
{
    if(strpos($class_name, '_') !== false)
        $class_name = str_replace("_", "/", $class_name).".php";
    else
        $class_name = $class_name.'.php';
	
    try
    {
       if(!require_once $class_name)
       throw new Exception (' Não foi possível incluir o arquivo:'. $class_name);
    }
    catch (Exception $e) {
        echo 'Exceção: ',  $e->getMessage(), "\n";
    }

}

spl_autoload_register('classLoader');

?>