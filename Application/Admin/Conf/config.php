<?php
return array(
	//'配置项'=>'配置值'
    //主题静态文件路径
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__.'/Application/'.MODULE_NAME.'/View/' . '/Public/static',),
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'tpadmin',  // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
	'SHOW_PAGE_TRACE'  => true,

    // 多说站点配置
    'DUOSHUO_SECRET'=>'1426fcfc0003e15413c42bf726898abb',
    'DUOSHUO_SHORT_NAME'=>'YinniCoding',
);
