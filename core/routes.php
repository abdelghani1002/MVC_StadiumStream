<?php

use app\Controllers\AdminController;
use app\Controllers\HomeController;
use app\Controllers\TeamController;
use core\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/admin/dashboard', AdminController::class, 'dashboard');
$router->addRoute('/teams', TeamController::class, 'index');
