<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 14.12.2018 г.
 * Time: 01:07 ч.
 */

namespace app\repository;


use app\data\UserDTO;

interface UserRepositoryInterface
{
    public function insertUser(UserDTO $user, string $address1, string $address2): bool;

    public function getUserByEmail(string $email): ?UserDTO;

    public function getLastUserId(): ?UserDTO;

    public function getUserAddresses(int $id): \Generator;

    public function inserUserAddress(string $name, int $id): bool;

    public function insertGuest(string $cookie): string;
}