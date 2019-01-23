<?php

session_start();
spl_autoload_register();

$route = new \router\Router($_GET);
$route->route();

if ( isset($_POST['ajax']) ) {
    $ajax = new ajax\Ajax();
    $ajax->ajaxRoute();
}

//print_r($_POST);
//print_r($_SESSION);
