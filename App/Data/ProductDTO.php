<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 13.12.2018 г.
 * Time: 15:36 ч.
 */

namespace app\data;


class ProductDTO
{
    private $id;
    private $price;
    private $frontImage1;
    private $frontImage2;
    private $reviews;
    private $color;
    private $sells;
    private $type;
    private $sex;
    private $promotion;
    private $smallDimention;
    private $mediumDimention;
    private $largeDimention;
    private $extraLargeDimention;
    private $promotionPercent;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getFrontImage1()
    {
        return $this->frontImage1;
    }

    /**
     * @param mixed $frontImage1
     */
    public function setFrontImage1($frontImage1): void
    {
        $this->frontImage1 = $frontImage1;
    }

    /**
     * @return mixed
     */
    public function getFrontImage2()
    {
        return $this->frontImage2;
    }

    /**
     * @param mixed $frontImage2
     */
    public function setFrontImage2($frontImage2): void
    {
        $this->frontImage2 = $frontImage2;
    }

    /**
     * @return mixed
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param mixed $reviews
     */
    public function setReviews($reviews): void
    {
        $this->reviews = $reviews;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getSells()
    {
        return $this->sells;
    }

    /**
     * @param mixed $sells
     */
    public function setSells($sells): void
    {
        $this->sells = $sells;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param mixed $promotion
     */
    public function setPromotion($promotion): void
    {
        $this->promotion = $promotion;
    }

    /**
     * @return mixed
     */
    public function getSmallDimention()
    {
        return $this->smallDimention;
    }

    /**
     * @param mixed $smallDimention
     */
    public function setSmallDimention($smallDimention): void
    {
        $this->smallDimention = $smallDimention;
    }

    /**
     * @return mixed
     */
    public function getMediumDimention()
    {
        return $this->mediumDimention;
    }

    /**
     * @param mixed $mediumDimention
     */
    public function setMediumDimention($mediumDimention): void
    {
        $this->mediumDimention = $mediumDimention;
    }

    /**
     * @return mixed
     */
    public function getLargeDimention()
    {
        return $this->largeDimention;
    }

    /**
     * @param mixed $largeDimention
     */
    public function setLargeDimention($largeDimention): void
    {
        $this->largeDimention = $largeDimention;
    }

    /**
     * @return mixed
     */
    public function getExtraLargeDimention()
    {
        return $this->extraLargeDimention;
    }

    /**
     * @param mixed $extraLargeDimention
     */
    public function setExtraLargeDimention($extraLargeDimention): void
    {
        $this->extraLargeDimention = $extraLargeDimention;
    }

    /**
     * @return mixed
     */
    public function getPromotionPercent()
    {
        return $this->promotionPercent;
    }

    /**
     * @param mixed $promotionPercent
     */
    public function setPromotionPercent($promotionPercent): void
    {
        $this->promotionPercent = $promotionPercent;
    }

}