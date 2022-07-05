<?php

class view_default_index
{
  public $msg;
  function __construct()
  {
  }

  function render()
  {
    $title = 'Área Login';
    $charset = 'utf-8';
  ?>

  <!doctype html>
  <html lang=“pt-br”>    
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
