<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 30.12.2018 г.
 * Time: 15:56 ч.
 */

require_once 'FrontLayer/common.php';

$productRepo = new \app\repository\ProductRepository($pdo);
$productService = new \app\services\ProductService($productRepo);
$productHttp = new \app\http\ProductHttp($productService, $getArr, $postArr, $fileArr, $session);
$productHttp->pageProducts();