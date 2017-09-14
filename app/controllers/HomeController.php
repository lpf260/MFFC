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
use App\Models\Article;

class HomeController {
    public function __construct()
    {
    }

    public function home()
    {
        $article = Article::first();
        require dirname(__FILE__).'/../views/home.php';
    }
}