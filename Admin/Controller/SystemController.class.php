<?php
namespace Admin\Controller;


class SystemController extends CommonController{
	public function Info(){

	}
	//备份数据库
	public function BackUp(){
		exec("mysqldump -u root -pmysql boke > d:/wamp/www/0509/boke20120522.sql",$output,$return_var);
		//exec("ping baidu.com",$output,$return_var);
	
		if($return_var === 0){
			echo '备份成功';
		}else{
			echo '备份失败';
		}
		
	}
}

?>