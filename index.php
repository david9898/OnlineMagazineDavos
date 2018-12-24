<?php
spl_autoload_register();

$route = new \router\Router($_GET);
$route->route();
