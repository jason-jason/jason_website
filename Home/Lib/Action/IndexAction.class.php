<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$m=M('Resume');
	$arr=$m->select();
	$this->assign(data,$arr);
	
	$m=M('About');
	$arr=$m->select();
	$this->assign(data1,$arr);
	
	$m=M('Project');
	$arr=$m->order('rank DESC')->select();
	$this->assign(data2,$arr);
	
	$m=M('Contact');
	$arr=$m->select();
	$this->assign(data3,$arr);
	
	$m=M('Message');
	$arr=$m->select();
	$this->assign(data4,$arr);
	$this->display();
    }
	public function do_Message(){
	$m= M('Message');
	$m->name=$_POST['name'];
	$m->email=$_POST['email'];
	$m->message=$_POST['message'];
	$m->time=time();
		$lastId=$m->add();
		if($lastId){
			$this->success("发送成功！！","index");
		}else{
			$this->error('未发送成功！！！');
		}
	}
}