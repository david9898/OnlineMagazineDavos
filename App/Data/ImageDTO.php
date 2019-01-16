<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.1.2019 г.
 * Time: 15:40 ч.
 */

namespace app\data;


class ImageDTO
{
    private $id;
    private $image;

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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

}