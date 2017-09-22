<?php
/**
 * Created by PhpStorm.
 * User: lpf
 * Date: 2017/9/15
 * Time: 17:04
 */
use Illuminate\Database\Capsule\Manager as Capsule;

define("BASE_PATH",__DIR__);

//autoload自动载入
require BASE_PATH."/vendor/autoload.php";

// Eloquent ORM

$capsule = new Capsule;

$capsule->addConnection(require BASE_PATH.'/config/database.php');

$capsule->bootEloquent();

//whoops错误提示
$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();