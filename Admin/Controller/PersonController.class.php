<?php
namespace Admin\Controller;

class PersonController extends CommonController{
	//显示所有成员信息
	public function PersonList($id=''){
		$info = D('age');
		if(!empty($_GET)){
			$id = $_GET['id'];
			$info = $info->find($id);
			echo (json_encode($info));
			exit;
			
		}
		if(!empty($_POST)){
			$key = $_POST['searchKey'];
			$where = "name LIKE '%" . $key . "%' or comment LIKE '%" . $key . "%'";
			$info = $info->where($where)->order('birthday')->select();
		}else{
			$info = $info->order('birthday')->select();
		}
		
		foreach ($info as $key => $value) {
			$info[$key]['age'] = $this->PersonAge($value['birthday']);
		}
		$this->assign('info',$info);
		$this->display('PersonList');
	}
	//根据生日计算年龄
	private function PersonAge($birthday){

		$age = array();//计算出来的年龄
		$btime = array();//传递来的时间
		$ctime = array();//当前时间

		$currentDate =  date('Y-m-d',time());
		if($time == '' || $time == 0){
				$time = '0-0-0';
		}
		list($ctime['cy'],$ctime['cm'],$ctime['cd']) = explode('-',$currentDate);
		list($btime['y'],$btime['m'],$btime['d']) = explode('-',$birthday);

		if($btime['y'] == 0 ){
			return 0;
		}
		$age['year'] = ($ctime['cy'] - $btime['y']);
		$age['month'] = $ctime['cm'] - $btime['m'];
		$age['day'] = $ctime['cd'] - $btime['d'];
				
		if($age['day'] < 0){
			$age['month'] --;
			$age['day'] = 30 - abs($age['day']);
		}
		if($age['month'] < 0){
			$age['year'] --;
			$age['month'] = 12 - abs($age['month']); 
		}
		
		return ($age['year']) . '岁' . $age['month'] . '个月' . $age['day'] . '天';
		

	}
	//上传图片
	public function Upd(){
		if(!empty($_FILES) && $_FILES['img_url']['name'] != ''){
			
			$config = array(
				'rootPath' => './Public/', 	//保存图片的根路径
				'savePath' => 'upload/',	//保存路径
			);
			$upload = new \Think\Upload($config); //实例化上传类
			$re = $upload->uploadOne($_FILES['img_url']);//上传单个文件
			if(!$re){ //没上传成功
				$this->error($upload->getError(),U('Person/PersonList'));
			}
			$_POST['img_url'] = $re['savepath'] . $re['savename'];	
		}
	}
	//添加成员信息
	public function PersonAdd(){
		$age = new \Model\AgeModel();
		if(!empty($_POST)){
			$t = $age->create();
			if(!$t)
			{
				$errorInfo = implode(' ',$age->getError());
				$this->error('添加失败，请检查：' . $errorInfo,U('Person/PersonList'));
			}else{
			    $this->Upd();
				$_POST['add_time'] = time();
				$age->create();
				if($age->add()){
					$this->success('添加成功',U('Person/PersonList'));
				}
			}
		}
	

	}
	//修改成员信息
	public function PersonSave(){
		if(!empty($_POST)){
			$age = D('age');
			$this->Upd();
			$age->create();
			if($age->save()){
				$this->success('修改成功',U('Person/PersonList'));
			}else{
				$this->error('所有数据没变化，无须更新。',U('Person/PersonList'));
			}
		}
	}


	
}



?>