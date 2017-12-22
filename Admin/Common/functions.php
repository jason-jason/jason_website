<?php
/**
**把时间转换成几分钟前
**/
function format_data($time){
	$t=time()-$time;
	$f=array(
	'31536000'=>'年前',
	'2592000'=>'个月前',
	'604800'=>'星期前',
	'86400'=>'天前',
	'3600'=>'小时前',
	'60'=>'分钟',
	'1'=>'刚刚',
	);
	foreach($f as $k=>$v){
		if(0!=$c=floor($t/(int)$k)){
			return $v;
		}
	}
}

?>