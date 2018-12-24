<?php

spl_autoload_register();

$session = new \app\wrapper\SessionWrapper();
$cookie = new \app\wrapper\CookieWrapper();
$postArr = new \app\wrapper\PostWrapper();
$getArr = new \app\wrapper\GetWrapper();
$dbConfig = parse_ini_file('Configuration/db.ini');
$db = new \PDO($dbConfig['dsn'], $dbConfig['user'], $dbConfig['password'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
$pdo = new \database\PrepareStatement($db);

$userRepo = new \app\repository\UserRepository($pdo);
$userServ = new \app\services\UserService($userRepo);
$userHttp = new \app\http\UserHttp(
    $userServ,
    $postArr,
    $getArr,
    $cookie,
    $session
);
$userHttp->insertGuest();

