<?php
// 本类由系统自动生成，仅供测试用途
class ContactAction extends CommonAction {
    public function Contact(){
	$m=M('Contact');
	$arr=$m->select();
	$this->assign(data,$arr);
	$this->display();
    }
public function modify(){
		$id=$_GET['id'];
		$m=new Model('Contact');
		$arr=$m->find($id);
		$this->assign(data,$arr);
		$this->display();
		}
public function update(){
		$m=new Model('Contact');
		$data['id']=$_POST['id'];
		$data['content']=$_POST['content'];
		$data['email']=$_POST['email'];
		$data['address']=$_POST['address'];
		$data['blog_title']=$_POST['blog_title'];
		$data['link']=$_POST['link'];
		$count=$m->save($data);
		if($count>0){
				$this->success("修改成功！！","contact");
			}else{
				$this->error("修改失败！！");
			
			}
		}		
		public function del($id){
		
		$m=new Model('Contact');
		$count=$m->delete($id);
		
			if($count>0){
				$this->success("删除成功！！");
			}else{
				$this->error("删除失败！！");
			
			}
			
		}
	}