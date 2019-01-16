<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 19.12.2018 г.
 * Time: 18:16 ч.
 */

namespace app\services;


use app\data\UserDTO;
use app\repository\AddressRepositoryInterface;
use app\repository\TownRepositoryInterface;

interface UserServiceInterface
{
    public function insertUser(array $postArr, string $cookie): UserDTO ;

    public function getUserByEmail(array $postArr): ?UserDTO ;

    public function insertGuest(): string ;

    public function getUserData(int $id, TownRepositoryInterface $townRepo, AddressRepositoryInterface $addressRepo): array ;
}