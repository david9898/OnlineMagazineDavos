<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 15.12.2018 г.
 * Time: 17:49 ч.
 */

namespace app\repository;

use app\data\ProductDTO;
use database\PrepareStatementInterface;
use mysql_xdevapi\Exception;

class ProductRepository implements ProductRepositoryInterface
{

    private $db;

    public function __construct(PrepareStatementInterface $db)
    {
        $this->db = $db;
    }

    public function insertProduct(ProductDTO $product): bool
    {
        try {
            $sql = 'INSERT INTO products(price, front_image_1, front_image_2, 
                         color, small_dimention, medium_dimention, 
                         large_dimention, extra_large_dimention, sex, promotion_percent, promotion, type) 
                         VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';

            $this->db->prepare($sql)
                    ->execute([$product->getPrice(), $product->getFrontImage1(), $product->getFrontImage2(),
                        $product->getColor(), $product->getSmallDimention(), $product->getMediumDimention(),
                        $product->getLargeDimention(), $product->getExtraLargeDimention(), $product->getSex(),
                        $product->getPromotionPercent(), $product->getPromotion(), $product->getType()]);

            return true;
        }catch (\PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function deleteProduct(int $id): bool
    {
        try {
            $sql = 'DELETE FROM products WHERE id = ?';

            $this->db->prepare($sql)
                    ->execute([$id]);

            return true;
        }catch (\PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function updateProduct(ProductDTO $product): bool
    {
        try {
            $sql = 'UPDATE products
                    SET price = ?,front_image_1 = ?, front_image_2 = ?,
                        color = ?, type = ?, small_dimention = ?, medium_dimention = ?,
                        large_dimention = ?, extra_large_dimention = ?, sex = ?,
                        promotion_percent = ?, promotion = ?
                        WHERE id = ?';

            $this->db->prepare($sql)
                    ->execute([$product->getPrice(), $product->getFrontImage1(), $product->getFrontImage2(),
                                $product->getColor(), $product->getType(), $product->getSmallDimention(),
                                $product->getMediumDimention(), $product->getLargeDimention(), $product->getExtraLargeDimention(),
                                $product->getSex(), $product->getPromotion(), $product->getPromotionPercent(),
                                $product->getId()]);
            return true;
        }catch (\PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getProductsForPagination(string $conditions): \Generator
    {
        try {
            $sql = 'SELECT id, price, front_image_1 AS frontImage1, front_image_2 AS frontImage2
                    FROM products WHERE ' . $conditions;

            return $this->db->prepare($sql)
                    ->execute()
                    ->fetchObject(ProductDTO::class);
        }catch (\PDOException $e) {
            $e->getMessage();
        }

    }

    public function getProductById(int $id): ProductDTO
    {
        try {
            $sql = 'SELECT * FROM product_view WHERE id = ?';

            return $this->db->prepare($sql)
                            ->execute([$id])
                            ->fetchObject(ProductDTO::class);
        }catch (\PDOException $e) {
            $e->getMessage();
        }
    }

    public function getCount(string $condition): int
    {
        $sql = '';
    }

}