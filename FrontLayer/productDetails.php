<?php

require_once 'FrontLayer/common.php';

$imageRepo = new \app\repository\ImageRepository($pdo);
$productRepo = new \app\repository\ProductRepository($pdo);
$productServ = new \app\services\ProductService($productRepo);
$productHttp = new \app\http\ProductHttp($productServ, $getArr, $postArr, $fileArr, $session);
$productHttp->productDetails($imageRepo);