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
    public function insertProduct(ProductDTO $product): bool;

    public function deleteProduct(int $id): bool;

    public function updateProduct(ProductDTO $product): bool;

    public function getProductsForPagination(string $conditions): \Generator;

    public function getProductById(int $id): ProductDTO;

    public function getCount(string $condition): int;
}