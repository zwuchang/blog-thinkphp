<?php
namespace Admin\Controller;

class ManagerController extends CommonController{
	public function index(){
		$this->display();
	}
	
	public function center(){
		$this->display();
	}
	public function top(){
		
		$this->display();
	}
	public function left(){
		$this->display();
	}
	public function down(){
		$this->display();
	}
	public function middel(){
		$this -> display();
	}
	
	public function login(){
		$this->display();
	}
	


	//退出登录
	public function logOut(){
		session(null);
		echo "<script>parent.location.href='http://{$_SERVER['HTTP_HOST']}/thinkphp/index.php/Admin/Login/index';</script>";
		
	}
}

?>