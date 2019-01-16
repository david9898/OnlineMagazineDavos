<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 7.1.2019 г.
 * Time: 13:19 ч.
 */

namespace app\services;


use app\data\SecurityPictureDTO;

interface SecurityServiceInterface
{
    public function insertPicture(array $postArr, array $fileArr): bool ;

    public function getImage(int $id): SecurityPictureDTO;
}