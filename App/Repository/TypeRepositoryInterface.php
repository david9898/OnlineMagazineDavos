<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.12.2018 г.
 * Time: 22:39 ч.
 */

namespace app\repository;


interface TypeRepositoryInterface
{
    public function getAllTypes(): \Generator;
}