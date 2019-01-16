<?php

require_once 'FrontLayer/common.php';

$secRepo = new \app\repository\SecurityRepository($pdo);
$productRepo = new app\repository\ProductRepository($pdo);
$productService = new \app\services\ProductService($productRepo);
$productHttp = new \app\http\ProductHttp($productService, $getArr, $postArr, $fileArr, $session);
$productHttp->buyProduct($secRepo);

