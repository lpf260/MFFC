<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12
 * Time: 21:59
 */
/**
 * \HomeController
 */
namespace App\Controllers;

class HomeController {
    public function __construct()
    {
    }

    public function home()
    {
        echo "<h1>控制器成功</h1>";
    }
}