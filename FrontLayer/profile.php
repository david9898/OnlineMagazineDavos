<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 26.12.2018 г.
 * Time: 19:09 ч.
 */

require_once 'FrontLayer/common.php';

$townRepo = new \app\repository\TownRepository($pdo);
$addressRepo = new \app\repository\AddressRepository($pdo);

$userHttp->profile($townRepo, $addressRepo);