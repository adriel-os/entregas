<?php
header('charset=UTF-8');
header('Cache-Control: no-cache, no-store, must-revalidate');

error_reporting(E_ALL);
set_include_path(   '../entregas'   . PATH_SEPARATOR . '../entregas/lib/'   . PATH_SEPARATOR . '../entregas/config' . PATH_SEPARATOR . '../entregas/lib/Auth'   . PATH_SEPARATOR . "../entregas/lib/Db/"    . PATH_SEPARATOR . 
                    '../'           . PATH_SEPARATOR . 'lib/'               . PATH_SEPARATOR . 'config/'            . PATH_SEPARATOR . 'lib/Auth/'              . PATH_SEPARATOR . "../lib/Db/"             . PATH_SEPARATOR .
                    get_include_path());
session_start();

require_once 'Loader.php';
require_once 'Router.php';

// instanciando as rotas
$rotas = new Router($_SERVER);

//var_dump($db);