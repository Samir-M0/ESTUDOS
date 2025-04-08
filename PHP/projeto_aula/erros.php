<?php

// ini_set("Error_reporting", E_ALL);

error_reporting(E_ALL);
ini_set("display_errors", 1);
// ini_set("log_errors", 1);
// ini_set("error_log", '/var/log/minha-aplicacao');
set_error_handler(function($errno, $errstr, $errfile, $errline){
  // var_dump($errno, $errstr, $errfile, $errline);
  // return true;

  switch($errno){
    case E_WARNING:
      echo "Aviso, isso é perigoso";
      break;
    case E_NOTICE:
      echo "Melhor não fazer isso";
  }
});

echo $ahdgdf;