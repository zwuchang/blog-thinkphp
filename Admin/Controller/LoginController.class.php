<?php 
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){

		$this->display('Login/login');
	}

	//生成验证码
	public function verifyImg($code=''){

		

		$config = array(
			'imageH' => 30, //高度
			'imageW' => 130, //宽度 
			'fontSize' => 13, //字体大小
			'fontttf' => '1.ttf',//字体
			'length' => 4 ,//几位验证码
		);
		//不加这句验证码出不来
		ob_end_clean();
		$verify = new \Think\Verify($config);
		if($code != ''){
			return $verify->check($code);
		} 
		$verify->entry();

	}

	//登录
	public function login(){
		if(!empty($_POST)){
			$code = $_POST['j_captcha']; //验证码
			$user = $_POST['use'];
			$password = $_POST['password'];
			
			if($this->verifyImg($code)){
				$u = new \Model\UserModel();
				$res = $u->checkUser($user,$password);
				if($res === false){
					echo '用户名或密码错误！';
				}else{
					if($res['password'] == md5($password)){
						session('username',$user);
					}else{
						echo '用户名或密码错误！';
					}
					
				}
			}else{
				echo '验证码错误';
			}
		}
	}

	
}



?>