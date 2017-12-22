<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_L_DELIM'=>'<{',
	'TMPL_R_DELIM'=>'}>',
	'DB_PREFIX'=>'re_',
	'DB_DSN'=>'mysql://root:zsl1992429@localhost:3306/resume',
	//'SHOW_PAGE_TRACE'=>true,//开启页面Trace
	'SESSION_OPTIONS' => array(
    //和其他运行在同一个服务器的sessio进行隔离，避免相互干扰
		'name'=>'session_id',
		'expire' => 3600,
		)
);
?>
