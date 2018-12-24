<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.12.2018 г.
 * Time: 16:04 ч.
 */

namespace app\repository;


interface TownRepositoryInterface
{
    public function getAllTowns(): \Generator ;
}