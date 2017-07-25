<?php
session_start();
require_once('./src/settings.php');
require_once(__DIR__.'/vendor/autoload.php');

use src\router;

$router = new Router();
$router->routeRequest();
