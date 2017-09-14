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

Macaw::get('(:any)', function($fu){
    echo "未匹配到路由<br />".$fu;
});

Macaw::get('',"App\Controllers\HomeController@home");

//Macaw::haltOnMatch();
Macaw::dispatch();