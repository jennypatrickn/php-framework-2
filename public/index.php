<?php

session_start();

require '../library/function/Autoload.php';

$router = new library\core\Router();
$router->route();

