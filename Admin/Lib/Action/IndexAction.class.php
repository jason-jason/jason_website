<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
	public function index(){	
	$m=M('Message');
	$arr=$m->order('id DESC')->select();
	$this->assign(data,$arr);
	
	$m=M('Profile');
	$arr=$m->select();
	$this->assign(data1,$arr);
	$a=C('SESSION_OPTIONS.expire');
	$b=$_SESSION['session_start_time'];
	$this->display();
	/*
	$id=$_SESSION['id'];
	$m=M('Record');
	$arr2=$m->order('time DESC')->where("uid=$id")->limit(2)->select();
	$time1=$arr2[1][time];
	$time2=$arr2[0][time];
	$map['time']  = array('GT',$time1);
	$map['uid']  = array('NEQ',$id);
	$arr4=$m->where($map)->select();
	
	$map['uid']  = array('NEQ',$id);
	$map['time']  = array('GT',$time);
	$D=D('Chat');
	$arr3=$D->relation(true)->where($map)->select();
	$count1=$D->relation(true)->where($map)->count();
	//$this->assign(data11,$arr3);
	//$this->assign(count1,$count1);
		
	echo $a;
	echo '</br>';
	echo $b;		
	echo $time1.'</br>';
	echo $time2;
	echo "<pre>";
	print_r($arr4); // or var_dump()
	echo "</pre><br>";
*/
    }
	
}