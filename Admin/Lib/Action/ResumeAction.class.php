<?php
// 本类由系统自动生成，仅供测试用途
class ResumeAction extends CommonAction {
    public function Resume(){	
	$m=M('Resume');
	$arr=$m->select();
	$this->assign(data,$arr);
	$this->display();
    }
public function modify(){
		$id=$_GET['id'];
		$m=new Model('Resume');
		$arr=$m->find($id);
		$this->assign(data,$arr);
		$this->display();
		}
public function update(){
		$m=new Model('Resume');
		$data['id']=$_POST['id'];
		$data['LogoTitle']=$_POST['LogoTitle'];
		$data['Introduce']=$_POST['Introduce'];
		$data['Small_title1']=$_POST['Small_title1'];
		$data['Small_title2_red']=$_POST['Small_title2_red'];
		$data['Small_title3']=$_POST['Small_title3'];
		$data['Skill']=$_POST['Skill'];
		$count=$m->save($data);
		if($count>0){
				$this->success("修改成功！！","resume");
			}else{
				$this->error("修改失败！！");
			
			}
		}		
		public function del($id){
		
		$m=new Model('Resume');
		$count=$m->delete($id);
		
			if($count>0){
				$this->success("删除成功！！");
			}else{
				$this->error("删除失败！！");
			
			}
			
		}
	}