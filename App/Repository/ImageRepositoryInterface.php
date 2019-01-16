<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.1.2019 г.
 * Time: 15:41 ч.
 */

namespace app\repository;


interface ImageRepositoryInterface
{
    public function getImageForProduct(int $id): array ;
}