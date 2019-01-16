<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 26.12.2018 г.
 * Time: 15:11 ч.
 */

namespace app\repository;


interface AddressRepositoryInterface
{
    public function getUserAddresses(int $id): \Generator ;

    public function insertUserAddress(string $addressName, int $id): string;
}