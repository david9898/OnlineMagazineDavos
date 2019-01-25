<?php

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

    public function insertProduct(ProductDTO $product, $image3, $image4): bool
    {
        try {
            $sql = 'CALL procedure_insert_product(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

            $this->db->prepare($sql)
                    ->execute([$product->getPrice(), $product->getFrontImage1(), $product->getFrontImage2(),
                        $product->getColor(), $product->getSex(),
                        $product->getPromotionPercent(), $product->getPromotion(), $product->getType(),
                        $image3, $image4, $product->getSmallDimention(), $product->getMediumDimention(),
                        $product->getLargeDimention(), $product->getExtraLargeDimention(), $product->getDimention34(),
                        $product->getDimention35(), $product->getDimention36(), $product->getDimention37(),
                        $product->getDimention38(), $product->getDimention39(), $product->getDimention40(),
                        $product->getDimention41(), $product->getDimention42(), $product->getDimention43(),
                        $product->getDimention44(), $product->getDimention45(), $product->getDimention46(),
                        $product->getDescription()]);

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

    public function getProductsForPagination(int $page, string $sex, int $type, $priceMin = null,
                                             $priceMax = null, $colors = null, $dimentions = null, $sexTypes = null): \Generator
    {
        try {

            if ( $page !== 1 ) {
                $page = ($page * 9) - 9;
            }
            if ( $page === 1 ) {
                $page = 0;
            }
            
            if ( $sex === 'Male' || $sex === 'Female' ) {
                $string = " sex = '" . $sex . "' AND `type` = " . $type;
            }else if ( $sex === 'promotion' ) {
                $string = ' promotion = true AND `type` = ' . $type;
            }

            if ( $sexTypes !== null ) {
                if ( $sex !== 'Male' || $sex !== 'Female' ) {
                    if ( count($sexTypes) === 1 ) {
                        if ( $sexTypes[0] === 'Male' ) {
                            $string = $string . ' AND sex = "Male" ';
                        }
                        if ( $sexTypes[0] === 'Female' ) {
                            $string = $string . ' AND sex = "Female" ';
                        }
                    }
                }
            }
            
            if ( $colors !== null ) {
                if ( count($colors) > 1 ) {
                    $count = count($colors);
                    for ( $i = 0; $i < $count; $i++ ) {
                        if ( $i === 0 ) {
                            $string = $string . ' AND (color = ' . $colors[$i];
                        }else if ($i === $count - 1) {
                            $string = $string . ' OR color = ' . $colors[$i] . ' ) ';
                        }else {
                            $string = $string . ' OR color = ' . $colors[$i];
                        }
                    }
                } else {
                    $string = $string . ' AND color = ' . $colors[0];
                }
            }else {
                $string = $string . ' AND color ';
            }
            if ( $dimentions !== null ) {
                if ( count($dimentions) > 1 ) {
                    $count = count($dimentions);
                    for ( $i = 0; $i < $count; $i++ ) {
                        $string = $string . ' AND ' . $dimentions[$i] . ' > 0 ';
                    }
                } else {
                    $string = $string . ' AND ' . $dimentions[0] . ' > 0 ';
                }
            }
            if ( $priceMin !== null) {
                $string = $string . ' AND price >= ' . $priceMin;
            }else {
                $string = $string . ' AND price ';
            }
            if ( $priceMax !== null ) {
                $string = $string . ' AND price <= ' . $priceMax;
            }

            $string = $string . ' ORDER BY id DESC LIMIT :page, 9';

            $sql = 'SELECT id, price, frontImage1, frontImage2, description
                    FROM `product_view` WHERE ' . $string;
            
            return $this->db->prepare($sql)
                    ->bindParam(':page', $page, \PDO::PARAM_INT)
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
                            ->fetchObject(ProductDTO::class)
                            ->current();
        }catch (\PDOException $e) {
            $e->getMessage();
        }
    }

    public function getCount(int $page, string $sex, int $type, $priceMin = null,
                             $priceMax = null, $colors = null, $dimentions = null, $sexTypes = null): int
    {
        if ( $sex === 'Male' || $sex === 'Female' ) {
            $string = " sex = '" . $sex . "' AND `type` = " . $type;
        }else if ( $sex === 'promotion' ) {
            $string = ' promotion = true AND `type` = ' . $type;
        }


        if ( $colors !== null ) {
            if ( count($colors) > 1 ) {
                $count = count($colors);
                for ( $i = 0; $i < $count; $i++ ) {
                    if ( $i === 0 ) {
                        $string = $string . ' AND (color = ' . $colors[$i];
                    }else if ($i === $count - 1) {
                        $string = $string . ' OR color = ' . $colors[$i] . ' ) ';
                    }else {
                        $string = $string . ' OR color = ' . $colors[$i];
                    }
                }
            } else {
                $string = $string . ' AND color = ' . $colors[0];
            }
        }else {
            $string = $string . ' AND color ';
        }
        if ( $dimentions !== null ) {
            if ( count($dimentions) > 1 ) {
                $count = count($dimentions);
                for ( $i = 0; $i < $count; $i++ ) {
                    $string = $string . ' AND ' . $dimentions[$i] . ' > 0 ';
                }
            } else {
                $string = $string . ' AND ' . $dimentions[0] . ' > 0 ';
            }
        }
        if ( $priceMin !== null) {
            $string = $string . ' AND price >= ' . $priceMin;
        }else {
            $string = $string . ' AND price ';
        }
        if ( $priceMax !== null ) {
            $string = $string . ' AND price <= ' . $priceMax;
        }

        $sql = 'SELECT COUNT(*) AS count
                FROM product_view WHERE ' . $string;

        $count = $this->db->prepare($sql)
                        ->execute()
                        ->fetchAssoc()
                        ->current();

        return $count['count'];
    }

    public function addProductView(int $id): bool
    {
        try {
            $sql = 'CALL procedure_add_view(?)';

            $this->db->prepare($sql)
                ->execute([$id]);

            return true;
        }catch (\PDOException $e) {
            print_r($e->getMessage());
        }
    }

    public function addProductSale(int $id, string $cookie): bool
    {
        try {
            $sql = 'CALL procedure_add_sale(?, ?)';

            $this->db->prepare($sql)
                    ->execute([$id, $cookie]);

            return true;
        }catch (\PDOException $e) {
            print_r($e->getMessage());
        }
    }

    public function getDimentions(int $id): ProductDTO {
        try {
            $sql = 'SELECT * FROM product_view WHERE id = ?';

            return $this->db->prepare($sql)
                    ->execute([$id])
                    ->fetchObject(ProductDTO::class)
                    ->current();
        } catch (\PDOException $e) {
            print_r($e->getMessage());
        }
    }
    
    public function getProductForBasket(array $basket): \Generator {
        
        $sql = 'SELECT * FROM product_view WHERE id = ' . $basket[0];
        
        if ( count($basket) > 1 ) {
            for ($i = 1; $i < count($basket); $i++) {
                $sql = $sql . ' OR id = ' . $basket[$i];
            }
        }
        
        return $this->db->prepare($sql)
                ->execute()
                ->fetchObject(ProductDTO::class);
    }
    
    
}