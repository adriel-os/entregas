<?php
require_once 'autenticacao.php';

$view = new view_usuario_index();
$view->set_msg('home', 'Você está na home');

$authUser = Auth::getInstance();
$usuario = new Model_Usuario();

$usuario->id=$authUser->dados()['id'];
$view->render(['usuario'=>$usuario->dados]);

// $usuario->senha = '123';
// $usuario->update();
// $usuario->populate(array('nome', 'login', 'senha'));
// echo '<pre>';
// //var_dump($usuario);
// echo '</pre>';
// var_dump($usuario->update());

// echo '<pre>';
// $usuario->delete();
// echo '</pre>';