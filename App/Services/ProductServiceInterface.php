<?php

namespace app\services;


use app\data\PaginationDTO;
use app\data\ProductDTO;

interface ProductServiceInterface
{
    public function insertProduct(array $postArr, array $fileArr): bool ;

    public function getProductForPagination(array $getArr, array $postArr): PaginationDTO;

    public function getProductById(int $id): ProductDTO;

    public function addProductSale(int $id, string $cookie): bool ;
    
    public function buyProduct(int $id, array $postArr): bool ;
    
    public function getProductDimentions(int $id): ProductDTO;
    
    public function getProductsForBasket(array $basketArr): ?array;
    
    public function buyProductsFromBasket(array $postArr): bool ;
}