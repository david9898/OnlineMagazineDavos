<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 17.12.2018 г.
 * Time: 12:39 ч.
 */

namespace app\data;


class ColorDTO
{
    private $colorId;
    private $colorName;

    /**
     * @return mixed
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * @param mixed $colorId
     */
    public function setColorId($colorId): void
    {
        $this->colorId = $colorId;
    }

    /**
     * @return mixed
     */
    public function getColorName()
    {
        return $this->colorName;
    }

    /**
     * @param mixed $colorName
     */
    public function setColorName($colorName): void
    {
        $this->colorName = $colorName;
    }


}