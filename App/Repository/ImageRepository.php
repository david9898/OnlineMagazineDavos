<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.1.2019 г.
 * Time: 15:42 ч.
 */

namespace app\repository;


use app\data\ImageDTO;
use database\PrepareStatementInterface;

class ImageRepository implements ImageRepositoryInterface
{
    private $db;

    public function __construct(PrepareStatementInterface $db)
    {
        $this->db = $db;
    }

    public function getImageForProduct(int $id): array
    {
        $sql = 'SELECT * FROM images WHERE id = ?';

        $images = $this->db->prepare($sql)
            ->execute([$id])
            ->fetchObject(ImageDTO::class);

        $data = [];

        foreach ($images as $image) {
            $data[] = $image;
        }

        return $data;
    }

}