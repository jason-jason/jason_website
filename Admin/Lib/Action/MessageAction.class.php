<?php
// 本类由系统自动生成，仅供测试用途
class MessageAction extends CommonAction {
    public function Message(){
	$m=M('Message');
	$arr=$m->order('id DESC')->select();
	$this->assign(data,$arr);
	$this->display();
    }
	public function del($id){	
	$m=new Model('Message');
	$count=$m->delete($id);
		
		if($count>0){
			$this->success("删除成功！！");
		}else{
			$this->error("删除失败！！");
			
		}
			
	}
	public function add($id){	
	$m=new Model('Message');
	$data['id']=$id;
	$data['sign']=1;
	$count=$m->save($data);
	if($count>0){
			$this->success("修改成功！！");
		}else{
			$this->error("修改失败！！");
		}
	}
		
}