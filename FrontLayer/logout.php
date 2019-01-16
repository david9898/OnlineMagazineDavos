<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 27.12.2018 г.
 * Time: 00:06 ч.
 */
session_start();
session_destroy();
header('Location: http://localhost:82/OnlineMagazine/login');