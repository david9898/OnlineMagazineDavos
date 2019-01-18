<?php

namespace app\wrapper;


class SessionWrapper
{
    private $session;

    public function __construct()
    {
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