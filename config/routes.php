<?php
/**
 * 路由
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('success', function() {
    echo "成功！";
});

Macaw::get('home', 'HomeController@home');

Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};
//
//Macaw::get('(:all)', function($fu) {
//    echo '未匹配到路由<br>'.$fu;
//});

Macaw::dispatch();