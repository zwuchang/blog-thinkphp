<?php
namespace Model;
use \Think\Model;

//父类Model  ThinkPHP/Library/Think/Model.class.php

class NewsModel extends Model{
     //一次性获得全部验证错误
    protected $patchValidate  =   true;
	//定义验证规则
	protected $_validate      =   array(
		array('title','require','标题不能为空！'),
		array('content','require','内容必须得填写！',1), //第四个参数1表示必须验证
	); 
}
