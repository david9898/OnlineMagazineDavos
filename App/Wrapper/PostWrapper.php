<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 22.12.2018 г.
 * Time: 00:31 ч.
 */

namespace app\wrapper;


class PostWrapper
{
    private $postArr;

    public function __construct()
    {
        $this->postArr = $_POST;
    }

    public function getElement(string $name)
    {
        return $this->postArr[$name];
    }

    public function getArray()
    {
        return $this->postArr;
    }

    public function checkIfExists(string $name)
    {
        if ( isset($this->postArr[$name]) ) {
            return true;
        }else {
            return false;
        }
    }
}