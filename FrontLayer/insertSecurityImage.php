<?php

require_once 'FrontLayer/common.php';

$secRepo = new \app\repository\SecurityRepository($pdo);
$servise = new \app\services\SecurityService($secRepo);
$userHttp->insertSecurityPicture($servise);