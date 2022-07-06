<?php

class view_default_index
{
  public $msg;
  function __construct()
  {
    $this->title = 'Área Login';
    $this->charset = 'utf-8';
    $this->locale = 'pt-br';
  }

  function render()
  {
  ?>

  <!doctype html>
  <html lang=“<?=$this->locale?>”>    
    <?php require 'header.inc.php' ?>
    <?php require 'body.inc.php' ?>
  </html>

    <?php
  }

  function set_msg($msg)
  {
    $this->msg = $msg;
  }

  function __destruct()
  {
   
  }
}
