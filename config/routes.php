<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12
 * Time: 21:20
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('test', function(){
    echo "成功！";
});

Macaw::$error_callback = function(){
    throw new Exception("路由无匹配项 404 NOT FOUND");
};

Macaw::get('',"App\Controllers\HomeController@home");

Macaw::haltOnMatch();
Macaw::dispatch();