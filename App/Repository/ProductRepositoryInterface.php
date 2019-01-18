<?php
/**
 *
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 15.12.2018 г.
 * Time: 17:42 ч.
 */

namespace app\repository;


use app\data\PaginationDTO;
use app\data\ProductDTO;

interface ProductRepositoryInterface
{
    public function insertProduct(ProductDTO $product, string $image3, string $image4): bool;

    public function deleteProduct(int $id): bool;

    public function updateProduct(ProductDTO $product): bool;

    public function getProductsForPagination(int $page, string $sex, int $type, $priceMin = null,
                                             $priceMax = null, $colors = null, $dimentions = null): \Generator;

    public function getProductById(int $id): ProductDTO;

    public function addProductView(int $id): bool;

    public function addProductSale(int $id): bool;

    public function getCount(int $page, string $sex, int $type, $priceMin = null,
                             $priceMax = null, $colors = null, $dimentions = null): int;

    public function getDimentions(int $id): ProductDTO;
}