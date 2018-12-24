<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.12.2018 г.
 * Time: 11:35 ч.
 */

namespace app\data;


class TownDTO
{

    private $id;
    private $townName;

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
    public function getTownName()
    {
        return $this->townName;
    }

    /**
     * @param mixed $townName
     */
    public function setTownName($townName): void
    {
        $this->townName = $townName;
    }

}