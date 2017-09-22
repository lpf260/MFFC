<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12
 * Time: 21:18
 */

//定义public_path
define("PUBLIC_PATH",__DIR__);


//Autoload自动载入
require '../vendor/autoload.php';

//启动器
require PUBLIC_PATH."/../bootstrap.php";

//路由配置
require '../config/routes.php';

