<?php
return array(
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE'  =>  true,  //解决大小写问题
	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'study', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'sd_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集

	// 显示页面Trace信息
	'SHOW_PAGE_TRACE' =>true, 

	'TMPL_CACHE_ON' => false,
	'HTML_CACHE_ON' => false,
);