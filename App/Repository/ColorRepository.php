<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.12.2018 г.
 * Time: 22:34 ч.
 */

namespace app\repository;


use app\data\ColorDTO;
use database\PrepareStatementInterface;

class ColorRepository implements ColorRepositoryInterface
{
    private $db;

    public function __construct(PrepareStatementInterface $db)
    {
        $this->db = $db;
    }

    public function getAllColors(): \Generator
    {
        try {
            $sql = 'SELECT color_id AS colorId, color_name AS colorName FROM colors';

            return $this->db->prepare($sql)
                ->execute()
                ->fetchObject(ColorDTO::class);
        }catch (\PDOException $e) {
            $e->getMessage();
        }
    }

}