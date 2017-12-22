<?php
// 本类由系统自动生成，仅供测试用途
class ProjectAction extends CommonAction {
    public function Project(){
	$m=M('Project');
	$arr=$m->order('rank DESC')->select();
	$this->assign(data,$arr);
	$this->display();
    }
	public function do_project(){
	$m= M('Project');
	$m->create();
	import('ORG.Net.UploadFile');
	    $upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 100000000 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath ='./Public/Uploads/';// 设置附件上传目录
    	if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
    	}else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
    	}
        $m->filename= $info[0]['savename']; // 保存上传的照片根据需要自行组装
    	//$m->time=time();
    	//$m->uid=$_SESSION['id'];
	$count=$m->add(); // 写入用户数据到数据库
    	if($count){
		$this->success('上传成功！');
    	}else{
		$this->error('上传失败！');
    	}
   }
	/***	$user=M('Project');
		$user->name=$_POST['name'];
		$user->content=$_POST['content'];
		$user->filename=$_POST['filename'];
		$user->time=time();
			$lastId=$user->add();
			if($lastId){
				$this->redirect('Project/project');
			}else{
				$this->error('添加项目失败！！！');
			}
	}
	*****/
	public function modify(){
		$id=$_GET['id'];
		$m=new Model('Project');
		$arr=$m->find($id);
		$this->assign(data,$arr);
		$this->display();
		}
public function update(){
		$m=new Model('Project');
		$data['id']=$_POST['id'];
		$data['name']=$_POST['name'];
		$data['links']=$_POST['links'];
		$data['rank']=$_POST['rank'];
		$data['content']=$_POST['content'];
		$count=$m->save($data);
		if($count>0){
				$this->success("修改成功！！","project");
			}else{
				$this->error("修改失败！！");
			
			}
		}		
		public function del($id){
		
		$m=new Model('Project');
		$count=$m->delete($id);
		
			if($count>0){
				$this->success("删除成功！！");
			}else{
				$this->error("删除失败！！");
			
			}
			
		}
	}