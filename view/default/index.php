<?php

class view_default_index
{
  // public $msg;
  function __construct()
  {
    $this->title    = 'Área Login';
    $this->charset  = 'utf-8';
    $this->locale   = 'pt-br';
  }

  // function set_variaveis($chave, $valor)
  // {
  //   $this->var[$chave] = $valor;
  // }

  function render($vars = [])
  {
  ?>
    <!doctype html>
    <html lang=“<?=$this->locale?>”>    
      <?php require 'html.header.inc.php' ?>
      <?php require 'main.inc.php' ?>
    </html>
    <?php
  }

  function set_msgCadastro($msg)
  {
    $this->msg_cadastro[] = $msg;
  }

  function __destruct()
  {
   
  }
}
