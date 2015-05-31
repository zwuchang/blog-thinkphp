<?php
namespace Admin\Controller;

class IndexController extends CommonController{
    public function index(){
       $this->display('Manager/index');  
    }
    //生成验证码
    public function verifyImg(){
    	$config = array(
    		'imageW' => 100 ,   //图片宽度
    		'imageH' => 100 ,   //图片高度
    	);
    	$verify = new \Think\Verify($config);
    	$verify->entry();
    }
    
}
