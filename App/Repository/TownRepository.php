<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.12.2018 г.
 * Time: 16:05 ч.
 */

namespace app\repository;


use app\data\TownDTO;
use database\PrepareStatementInterface;

class TownRepository implements TownRepositoryInterface
{

    private $db;

    public function __construct(PrepareStatementInterface $db)
    {
        $this->db = $db;
    }

    public function getAllTowns(): \Generator
    {
        $sql = 'SELECT id, town_name AS townName FROM towns';

        return $this->db->prepare($sql)
                    ->execute()
                    ->fetchObject(TownDTO::class);

    }

}