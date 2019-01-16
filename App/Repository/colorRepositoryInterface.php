<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.12.2018 г.
 * Time: 22:33 ч.
 */

namespace app\repository;


interface ColorRepositoryInterface
{
    public function getAllColors(): \Generator;
}