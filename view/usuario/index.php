<?php

class view_usuario_index
{
  public $msg;
  public $var;
  function __construct()
  {
    $this->title = 'Área Admin';
    $this->charset = 'utf-8';
    $this->locale = 'pt-br';
  }

  function set_variaveis($chave, $valor)
  {
    $this->var[$chave] = $valor;
  }

  function render($vars=null)
  {
    ?>
      <!doctype html>
      <html lang=“<?=$this->locale?>”>    
        <?php require 'html.header.inc.php' ?>
        <?php require 'main.inc.php' ?>
      </html>
    <?php
  }

  function set_msg($chave, $msg)
  {
    $this->msg[$chave] = $msg;
  }

  function __destruct()
  {
   
  }
}
