<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.12.2018 г.
 * Time: 23:49 ч.
 */

namespace app\wrapper;


class SessionWrapper
{
    private $session;

    public function __construct()
    {
        session_start();
        $this->session = $_SESSION;
    }

    public function getSessionElement(string $name)
    {
        return $this->session[$name];
    }

    public function setSessionName(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function checkSessionExists(string $name): bool
    {
        if ( isset($this->session[$name]) ) {
            return true;
        }else {
            return false;
        }
    }
}