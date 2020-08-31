<?php

switch ($_SERVER['REQUEST_URI']) {

    case '/':
        require 'home.php';
    break;

    case '':
        require 'home.php';
    break;

    case '/thank-you':
        require 'thank-you.php';
    break;
    default:
        require '404.php';
  }
  
?>