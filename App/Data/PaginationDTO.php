<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 13.12.2018 г.
 * Time: 15:35 ч.
 */

namespace app\data;


class PaginationDTO
{

    private $allPages;
    private $currentPage;
    /**
     * @var ProductDTO[] $productArr
     */
    private $productArr;

    /**
     * @return mixed
     */
    public function getAllPages()
    {
        return $this->allPages;
    }

    /**
     * @param mixed $allPages
     */
    public function setAllPages($allPages): void
    {
        $this->allPages = $allPages;
    }

    /**
     * @return mixed
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param mixed $currentPage
     */
    public function setCurrentPage($currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    /**
     * @return ProductDTO[]
     */
    public function getProductArr()
    {
        return $this->productArr;
    }

    /**
     * @param ProductDTO[] $productArr
     */
    public function setProductArr($productArr): void
    {
        $this->productArr = $productArr;
    }


}