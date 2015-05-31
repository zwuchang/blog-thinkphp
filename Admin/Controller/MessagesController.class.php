<?php
namespace Admin\Controller;


class MessagesController extends CommonController{
	// 留言列表
	public function MessageList(){
		$perNum = 20;
		if(!empty($_POST)){
			$k = $_POST['searchKey'];
			$where = 'is_delete=1 and ' . ' name LIKE "%' . $k . '%" or cont LIKE "%' . $k . '%"';
			$info = $this->ListAll('message',$perNum,$where);//ListAll继承自父类Common
		}else{
			$info = $this->ListAll('message',$perNum,'is_delete=1');
		}
	}

	//发表留言
	public function MessagePublish(){
		$this->display();
	}

	//删除留言，将is_delete置于0
	public function del($id){
		if($this->upd('message',$id,0)){
			$this->redirect('Messages/MessageList');
		}
	}

	
}
?>