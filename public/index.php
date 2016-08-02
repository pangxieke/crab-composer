<?php
/**
 * 入口文件
 */

//错误调试
ini_set('display_errors', '1');
error_reporting(E_ALL);

define('PUBLIC_PATH', __DIR__);

//设置字符编码
header("content-type:text/html;charset=utf-8");

//启动器
require PUBLIC_PATH . '/../bootstrap.php';

// 路由配置
require '../config/routes.php';

