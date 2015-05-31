<?php
return array(
   
    //url模式设置
    'URL_MODEL'             =>  1,  
    //让页面显示追踪日志信息
    'SHOW_PAGE_TRACE'   => true,  
    
    //url地址大小写不敏感设置
    'URL_CASE_INSENSITIVE'  =>  false,
    
    //数据库连接配置
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'boke',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'mysql',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    //以下字段缓存没有其作用
    //① 如果是调试模式就不起作用
    //② false  也是不起作用
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    //修改模板引擎为smarty
    'TMPL_ENGINE_TYPE'		=>  'Smarty', 
);
