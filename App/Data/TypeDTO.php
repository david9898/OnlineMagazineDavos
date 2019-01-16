<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 17.12.2018 г.
 * Time: 12:36 ч.
 */

namespace app\data;


class TypeDTO
{
    private $typeId;
    private $typeName;

    /**
     * @return mixed
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param mixed $typeId
     */
    public function setTypeId($typeId): void
    {
        $this->typeId = $typeId;
    }

    /**
     * @return mixed
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * @param mixed $typeName
     */
    public function setTypeName($typeName): void
    {
        $this->typeName = $typeName;
    }

}