<?php
namespace Model;
use \Think\Model;

class AgeModel extends Model{
	 protected $patchValidate  =   true;
	//定义验证规则
	protected $_validate      =   array(
		array('name','require','姓名没填写。',1),
		array('birthday','require','出生日期没填写。',1), //第四个参数1表示必须验证
	); 
}

?>