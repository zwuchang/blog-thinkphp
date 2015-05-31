<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
header('Content-type:text/html;charset=utf-8');
// 应用入口文件
//定义几个常量测试
define('HOST',$_SERVER['HTTP_HOST']);
define('ADMIN_SITE_SOURCE_URL','http://'.HOST.'/thinkphp/Public/Admin/');
//上传图片目录
define('UPLOAD_URL','http://' .HOST. '/thinkphp/Public/');
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);
//定义公共common目录
define('COMMON_PATH','./Common/');
//定义当前应用目录
//define("APP_PATH","./thinkphp/");
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

