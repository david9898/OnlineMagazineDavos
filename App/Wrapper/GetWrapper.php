<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 22.12.2018 г.
 * Time: 00:33 ч.
 */

namespace app\wrapper;


class GetWrapper
{
    private $getArr;

    public function __construct()
    {
        $this->getArr = $_GET;
    }

    public function getElement(string $name)
    {
        return $this->getArr[$name];
    }

    public function getArr()
    {
        return $this->getArr;
    }

    public function checkIfExists(string $name)
    {
        if ( isset($this->getArr[$name]) ) {
            return true;
        }else {
            return false;
        }
    }
}