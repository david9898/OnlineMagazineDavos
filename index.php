<?php

session_start();
spl_autoload_register();

$route = new \router\Router($_GET);
$route->route();

$ajax = new ajax\Ajax();
$ajax->ajaxRoute();

//print_r($_SESSION);
//print_r($_SESSION);
