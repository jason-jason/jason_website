<?php
// 本类由系统自动生成，仅供测试用途
class AboutAction extends CommonAction {
    public function About(){
	$m=M('About');
	$arr=$m->select();
	$this->assign(data,$arr);
	$this->display();
    }
public function modify(){
		$id=$_GET['id'];
		$m=new Model('About');
		$arr=$m->find($id);
		$this->assign(data,$arr);
		$this->display();
		}
public function update(){
		$m=new Model('About');
		$data['id']=$_POST['id'];
		$data['title']=$_POST['title'];
		$data['content']=$_POST['content'];
		$count=$m->save($data);
		if($count>0){
				$this->success("修改成功！！","about");
			}else{
				$this->error("修改失败！！");
			
			}
		}		
		public function del($id){
		
		$m=new Model('About');
		$count=$m->delete($id);
		
			if($count>0){
				$this->success("删除成功！！");
			}else{
				$this->error("删除失败！！");
			
			}
			
		}
	}