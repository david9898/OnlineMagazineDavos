<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 7.1.2019 г.
 * Time: 00:14 ч.
 */

namespace app\repository;


use app\data\SecurityPictureDTO;
use database\PrepareStatementInterface;

class SecurityRepository implements SecurityRepositoryInterface
{

    private $db;

    public function __construct(PrepareStatementInterface $db)
    {
        $this->db = $db;
    }

    public function insertSecurityPicture(SecurityPictureDTO $picture): bool
    {
        try {
            $sql = 'INSERT INTO security_image (`question`, `image_name`, `code`) VALUES (?, ?, ?)';

            $this->db->prepare($sql)
                ->execute([$picture->getQuestion(), $picture->getImageName(), $picture->getCode()]);

            return true;
        }catch (\PDOException $e) {
            print_r($e->getMessage());
        }
    }

    public function getSecurityPicture(int $id): SecurityPictureDTO
    {
        $sql = 'SELECT id, image_name AS imageName, `code`, question FROM security_image WHERE id = ?';

        return $this->db->prepare($sql)
                ->execute([$id])
                ->fetchObject(SecurityPictureDTO::class)
                ->current();
    }

    public function getFirstId(): SecurityPictureDTO
    {
        $sql = 'SELECT id FROM security_image LIMIT 1';

        return $this->db->prepare($sql)
                        ->execute()
                        ->fetchObject(SecurityPictureDTO::class)
                        ->current();
    }

    public function getLastId(): SecurityPictureDTO
    {
        $sql = 'SELECT id FROM security_image ORDER BY id DESC LIMIT 1';

        return $this->db->prepare($sql)
                        ->execute()
                        ->fetchObject(SecurityPictureDTO::class)
                        ->current();
    }

}