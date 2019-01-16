<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.12.2018 г.
 * Time: 23:00 ч.
 */

namespace app\wrapper;


class FileWrapper
{
    private $fileArr;

    public function __construct()
    {
        $this->fileArr = $_FILES;
    }

    public function getAllFiles(): array
    {
        return $this->fileArr;
    }
}