<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.12.2018 г.
 * Time: 15:42 ч.
 */

namespace app\http;


abstract class HttpAbstract
{
    protected function render(string $templateName, $data = null) {
        require_once 'App/Templates/Basic/header.php';
        require_once 'App/Templates/Basic/error.php';
        require_once 'App/Templates/' . $templateName . '.php';
        require_once 'App/Templates/Basic/footer.php';
    }

    protected function redirect(string $url)
    {
        $baseUrl = 'http://localhost:82/OnlineMagazine';
        header('Location: ' . $baseUrl . $url);
        exit();
    }
}