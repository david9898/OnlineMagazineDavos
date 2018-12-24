<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 23.12.2018 г.
 * Time: 11:51 ч.
 */

namespace router;


class Router
{
    private $arr;

    public function __construct($getArr)
    {
        $this->arr = $getArr;
    }

    public function route()
    {
        if ( isset($this->arr['sex']) ) {

        }else {
            switch ($this->arr['action']) {
                case 'register':
                    require_once 'FrontLayer/register.php';
                    break;

                case 'login':
                    require_once 'FrontLayer/login.php';
                    break;
            }
        }
    }
}