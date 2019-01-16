<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.12.2018 г.
 * Time: 22:39 ч.
 */

namespace app\repository;


use app\data\TypeDTO;
use database\PrepareStatementInterface;

class TypeRepository implements TypeRepositoryInterface
{
    private $db;

    public function __construct(PrepareStatementInterface $db)
    {
        $this->db = $db;
    }

    public function getAllTypes(): \Generator
    {
        try {
            $sql = 'SELECT type_id AS typeId, type_name AS typeName FROM types';

            return $this->db->prepare($sql)
                ->execute()
                ->fetchObject(TypeDTO::class);
        }catch (\PDOException $e) {
            $e->getMessage();
        }
    }

}