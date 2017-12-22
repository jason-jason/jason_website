<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
     public function login(){
	$this->display();
    }
	public function do_login(){
		//if($_SESSION['verify'] != md5($_POST['code'])){
		//	$this->error('验证码错误！');
		//}
		$username=$_POST['username'];
		$password=$_POST['password'];
		$where['username']=$username;
		$where['password']=$password;
		//$_SESSION['id']=$_POST['id'];
		$m=M('user');
		//$count=$m->where($where)->count();
		//if($count>0){
		$arr=$m->field('id')->where($where)->find();
			if($arr){
			$_SESSION['username']=$username;
			$_SESSION['id']=$arr['id'];
			$_SESSION['session_start_time']=time();
			$this->success('用户登录成功',U('Index/index'));
		}else{
			$this->error('该用户不存在！');
		}
		$r=D('Record');
		$r->create();
		$count=$r->add(); // 写入用户数据到数据库
	
	}
	public function do_logout(){
		$_SESSION=array();
				if(isset($_COOKIE[session_name()])){
					setcookie(session_name(),'',time()-1,'/');
				}
			session_destroy();
			$this->redirect('Login/login');
	}
}