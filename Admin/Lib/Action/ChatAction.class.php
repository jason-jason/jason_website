<?php
// 本类由系统自动生成，仅供测试用途
class ChatAction extends CommonAction {
    public function chat(){
		//留言信息
		$m=M('Message');
		$arr=$m->order('id DESC')->select();
		$this->assign(data,$arr);
		//管理员聊天信息
		$c=D('Chat');
		$arr1=$c->relation(true)->select();
		//echo "<pre>";
		//print_r($arr1); // or var_dump()
		//echo "</pre><br>";
		$this->assign(data1,$arr1);
		//管理员登录记录
		$c=D('Record');
		$arr2=$c->relation(true)->order('id DESC')->limit(9)->select();
		//echo "<pre>";
		//print_r($arr1); // or var_dump()
		//echo "</pre><br>";
		$this->assign(data2,$arr2);
		$this->display();
    }
	public function do_Message(){
	$m= D('Chat');
	$m->create();
	$count=$m->add(); // 写入用户数据到数据库
	if($count){
		$this->success('留言成功！');
	}else{
		$this->error('留言失败！');
	}
	
	
   
   }
}