<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 22.12.2018 г.
 * Time: 00:03 ч.
 */

namespace app\wrapper;

class CookieWrapper
{

    private $cookie;

    public function __construct()
    {
        $this->cookie = $_COOKIE;
    }

    public function getCookieElement(string $name)
    {
        return $this->cookie[$name];
    }

    public function setCookieElement(string $key, $value, int $days = 0)
    {
        setcookie($key, $value, time() + (86400 * $days));
    }

    public function checkCookieExist(string $name): bool
    {
        if ( isset($this->cookie[$name]) ) {
            return true;
        }else {
            return false;
        }
    }
}