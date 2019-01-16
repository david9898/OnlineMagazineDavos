<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.12.2018 г.
 * Time: 23:14 ч.
 */

require_once 'FrontLayer/common.php';

$typeRepo = new \app\repository\TypeRepository($pdo);
$colorRepo = new \app\repository\ColorRepository($pdo);
$productRepo = new \app\repository\ProductRepository($pdo);
$productService = new \app\services\ProductService($productRepo);
$productHttp = new \app\http\ProductHttp($productService, $getArr, $postArr, $fileArr, $session);
$productHttp->insertProduct($colorRepo, $typeRepo);