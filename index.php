<?php

require("./vendor/autoload.php");
require('./core/config.php');
require 'core/routes.php';



$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace('/' . $_ENV['APP_NAME'], '', $uri);
// echo $uri; exit; 
$router->dispatch($uri);