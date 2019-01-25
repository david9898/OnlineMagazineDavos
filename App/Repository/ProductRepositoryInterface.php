<?php

namespace app\repository;


use app\data\PaginationDTO;
use app\data\ProductDTO;

interface ProductRepositoryInterface
{
    public function insertProduct(ProductDTO $product, string $image3, string $image4): bool;

    public function deleteProduct(int $id): bool;

    public function updateProduct(ProductDTO $product): bool;

    public function getProductsForPagination(int $page, string $sex, int $type, $priceMin = null,
                                             $priceMax = null, $colors = null, $dimentions = null, $sexTypes = null): \Generator;

    public function getProductById(int $id): ProductDTO;

    public function addProductView(int $id): bool;

    public function addProductSale(int $id, string $cookie): bool;

    public function getCount(int $page, string $sex, int $type, $priceMin = null,
                             $priceMax = null, $colors = null, $dimentions = null, $sexTypes = null): int;

    public function getDimentions(int $id): ProductDTO;
    
    public function getProductForBasket(array $basket): \Generator;
}