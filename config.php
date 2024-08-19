<?php

  session_start();

  $autoload = function($class) {
    include('class/'.$class.'.php');
  };
  spl_autoload_register($autoload);

  define('INCLUDE_PATH', 'http://localhost/cakemii/');
  define('BASE_DIR', __DIR__);
  define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'cakemii');

?>