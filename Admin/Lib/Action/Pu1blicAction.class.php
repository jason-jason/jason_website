<?php
// 本类由系统自动生成，仅供测试用途
class PublicAction extends Action {
    public function commen(){
		$id=$_SESSION['id'];
		$m= M('User');
		$arr=$m->where("id=$id")->select();
		$this->assign('data',$arr);
		$this->display();
    }
}