<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 26.12.2018 г.
 * Time: 15:16 ч.
 */

namespace app\repository;


use app\data\AddressDTO;
use database\PrepareStatementInterface;

class AddressRepository implements AddressRepositoryInterface
{
    private $db;

    public function __construct(PrepareStatementInterface $db)
    {
        $this->db = $db;
    }

    public function getUserAddresses(int $id): \Generator
    {
        try {
            $sql = 'SELECT user_id AS userId, address_name AS addressName FROM addresses WHERE user_id = ?';

            return $this->db->prepare($sql)
                    ->execute([$id])
                    ->fetchObject(AddressDTO::class);
        }catch (\PDOException $e) {
            $e->getMessage();
        }
    }

    public function insertUserAddress(string $addressName, int $id): string
    {
        try {
            $sql = 'INSERT INTO addresses(user_id, address_name) VALUES (?, ?)';

            $this->db->prepare($sql)
                    ->execute([$id, $addressName]);

            return $addressName;
        }catch (\PDOException $e) {
            $e->getMessage();
        }
    }

}