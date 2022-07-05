<?php
require_once 'autenticacao.php';

$msg = array('msg'=>'Está logado!');
new view_usuario_panel($msg);


$usuario = new Model_Usuario();
$usuario->id=1;
$usuario->senha = '123';
$usuario->update();


var_dump($usuario);
// $usuario->populate(array('nome', 'login', 'senha'));
// echo '<pre>';
// //var_dump($usuario);
// echo '</pre>';
// var_dump($usuario->update());

// echo '<pre>';
// $usuario->delete();
// echo '</pre>';