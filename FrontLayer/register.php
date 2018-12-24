<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 23.12.2018 г.
 * Time: 00:15 ч.
 */

require_once 'FrontLayer/common.php';

$townRepo = new \app\repository\TownRepository($pdo);

$userHttp->registerUser($townRepo);