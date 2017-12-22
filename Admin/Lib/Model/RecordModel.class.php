<?php
	class RecordModel extends RelationModel{
	protected $_auto = array ( 
    array('time','time',1,'function'), 
    array('uid','getid',1,'callback') , 
   );
	protected $_link =array(
		'User'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'User',
			'foreign_key'=>'uid',
			'mapping_name'=>'User',
			'mapping_fields'=>'first,last,filename',
			'as_fields'=>'first,last,filename',//'as_fields'=>'username:uname',当字段名username冲突时，可以将其改为uname
		),
	);
	protected function getid(){
		return $_SESSION['id'];
	}
}
	



?>