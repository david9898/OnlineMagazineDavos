<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 26.12.2018 г.
 * Time: 14:50 ч.
 */

namespace app\data;


class AddressDTO
{
    private $userId;
    private $addressName;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getAddressName()
    {
        return $this->addressName;
    }

    /**
     * @param mixed $addressName
     */
    public function setAddressName($addressName): void
    {
        $this->addressName = $addressName;
    }

}