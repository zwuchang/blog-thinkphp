<?php
namespace Admin\Controller;

class UserController extends CommonController{
	//修改用户信息
	public function changeUserInfo(){
		$user = new \Model\UserModel();
		$name = session('username');
		$re = $user->checkUser($name,session($name . 'password'));
		$this->assign('info',$re);
		$this->display('UserList');
	}
}

?>