<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 13.12.2018 г.
 * Time: 14:06 ч.
 */

namespace database;


interface FetchStatementInterface
{
    public function fetchObject($className): \Generator;

    public function fetchAssoc(): \Generator;
}