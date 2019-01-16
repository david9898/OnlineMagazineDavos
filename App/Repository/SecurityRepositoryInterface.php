<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 7.1.2019 г.
 * Time: 00:06 ч.
 */

namespace app\repository;


use app\data\SecurityPictureDTO;

interface SecurityRepositoryInterface
{
    public function insertSecurityPicture(SecurityPictureDTO $picture): bool;

    public function getSecurityPicture(int $id): SecurityPictureDTO;

    public function getFirstId(): SecurityPictureDTO;

    public function getLastId(): SecurityPictureDTO;
}