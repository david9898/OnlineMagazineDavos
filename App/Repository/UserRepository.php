<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 14.12.2018 г.
 * Time: 01:11 ч.
 */

namespace app\repository;

use app\data\UserDTO;
use database\PrepareStatementInterface;
use mysql_xdevapi\Exception;

class UserRepository implements UserRepositoryInterface
{

    private $db;

    public function __construct(PrepareStatementInterface $db)
    {
        $this->db = $db;
    }

    public function insertUser(UserDTO $user, string $address1, string $address2 = null): bool
    {
        try {

            $sql = 'CALL procedure_register_user(?,?,?,?,?,?,?,?,?,?,?)';

            $this->db->prepare($sql)
                    ->execute([$user->getEmail(), $user->getFirstName(), $user->getLastName(),
                                $user->getPassword(), $user->getUsername(), $user->getBornOn(),
                                $user->getTown(), $user->getCookie(), $address1, $address2,
                                $user->getStatus()]);

            return true;
        }catch (\PDOException $pdo) {
            throw new Exception($pdo->getMessage());
        }
    }

    public function getUserByEmail(string $email): ?UserDTO
    {
        try {
            $sql = 'SELECT id, email, password, first_name AS firstName, last_name AS lastName, born_on AS bornOn,
                first_login AS firstLogin, cookie, status FROM users WHERE email = ?';

            return $this->db->prepare($sql)
                            ->execute([$email])
                            ->fetchObject(UserDTO::class)
                            ->current();
        }
        catch (\PDOException $pdo) {
            throw new Exception($pdo->getMessage());
        }
    }

    public function getLastUserId(): ?UserDTO
    {
        try {
            $sql = 'SELECT id FROM users ORDER BY id DESC';

            return $this->db->prepare($sql)
                            ->execute()
                            ->fetchObject(UserDTO::class)
                            ->current();
        }catch (\PDOException $pdo) {
            throw new Exception($pdo->getMessage());
        }
    }

    public function getUserAddresses(int $id): \Generator
    {
        try {
            $sql = 'SELECT address_name FROM addresses WHERE user_id = ?';

            return $this->db->prepare($sql)
                ->execute([$id])
                ->fetchAssoc();
        }catch (\PDOException $pdo) {
            throw new Exception($pdo->getMessage());
        }
    }

    public function inserUserAddress(string $name, int $id): bool
    {
        try {
            $sql = 'INSERT INTO addresses(user_id, address_name) VALUES (?, ?)';

            $this->db->prepare($sql)
                    ->execute([$id, $name]);

            return true;
        }catch (\PDOException $pdo) {
            throw new Exception($pdo->getMessage());
        }
    }

    public function insertGuest(string $cookie): string
    {
        try {
            $sql = 'INSERT INTO users (cookie) VALUES (?)';

            $this->db->prepare($sql)
                    ->execute([$cookie]);

            return $cookie;
        }catch (\PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }


}