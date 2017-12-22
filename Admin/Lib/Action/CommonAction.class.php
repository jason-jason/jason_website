<?php
// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
	Public function _initialize(){
		if(!isset($_SESSION['username'])||$_SESSION['username']==" "){
			$this->redirect('Login/login.html');
		}
		if (time() - $_SESSION['session_start_time'] > C('SESSION_OPTIONS.expire')){
        session_destroy();//真正的销毁在这里！
        $this->redirect('Login/login.html');
		}
	//头部管理员数据
	$id=$_SESSION['id'];
	$m= M('User');
	$arr=$m->where("id=$id")->select();
	$this->assign('data9',$arr);
	//头部邮箱提醒数据
	$m=M('Message');
	$count = $m->where("sign=0")->count();
	$arr1=$m->where("sign=0")->select();
	$this->assign(data10,$arr1);
	$this->assign(count,$count);
	//头部聊天提醒数据
	$id=$_SESSION['id'];
	$m=D('Record');
	$arr2=$m->relation(true)->order('time DESC')->where("uid=$id")->limit(2)->select();
	$time=$arr2[1][time];
	$map['uid']  = array('NEQ',$id);
	$map['time']  = array('GT',$time);
	$D=D('Chat');
	$arr3=$D->relation(true)->where($map)->select();
	$count1=$D->relation(true)->where($map)->count();
	$arr4=$m->relation(true)->where($map)->select();
	$count2=$m->where($map)->count();
	$this->assign(data11,$arr3);
	$this->assign(count1,$count1);
	$this->assign(data12,$arr4);
	$this->assign(count2,$count2);
	}
}