<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 19.12.2018 г.
 * Time: 18:16 ч.
 */

namespace app\services;


use app\data\UserDTO;

interface UserServiceInterface
{
    public function insertUser(array $postArr, string $cookie): UserDTO;

    public function getUserByEmail(array $postArr): ?UserDTO;

    public function insertGuest(): string ;
}