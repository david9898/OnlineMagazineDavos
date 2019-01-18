<?php

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
            require_once 'FrontLayer/pageView.php';
        }else if (isset($this->arr['product'])) {
            switch ($this->arr['product']) {
                case 'product':
                    require_once 'FrontLayer/productDetails.php';
                    break;
                    
                case 'buyProduct':
                    require_once 'FrontLayer/buyProduct.php';
                    break;
                

            }
        }else {
            switch ($this->arr['action']) {
                case 'register':
                    require_once 'FrontLayer/register.php';
                    break;

                case 'login':
                    require_once 'FrontLayer/login.php';
                    break;

                case 'profile':
                    require_once 'FrontLayer/profile.php';
                    break;

                case 'logout':
                    require_once 'FrontLayer/logout.php';
                    break;

                case  'add':
                    require_once 'FrontLayer/addProduct.php';
                    break;

                case 'addSecurityImage':
                    require_once 'FrontLayer/insertSecurityImage.php';
            }
        }
    }
}