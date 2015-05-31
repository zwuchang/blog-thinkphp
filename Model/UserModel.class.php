<?php
namespace Model;
use \Think\Model;

Class UserModel extends Model{
	//验证用户输入密码是否正确
	public function checkUser($name,$pass){
		$info = $this->getByUsername($name);
		if($info === null){
			return false;
		}else{
			
			if($info['password'] == md5($pass)){
				return $info;
			}
		}

	} 


}

?>