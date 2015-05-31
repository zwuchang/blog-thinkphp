<?php
namespace Admin\Controller;

class TrashController extends CommonController{

	//展示已删文章
	public function RemoveArticle(){
		$perNum = 10;
		$info = $this->ListAll('news',$perNum,'is_delete=0');
	}
	//展示已删留言
	public function RemoveMessage(){
		$perNum = 10;
		$info = $this->ListAll('message',$perNum,'is_delete=0');
	}

	//展示已删评论
	public function RemoveComment(){
		$this->display();
	}

	
	//将内容从回收站恢复过来
	public function Rollback(){
		if(!empty($_GET)){
			$id = $_GET['id'];
			$table = $_GET['table'];
			$rurl = $_GET['rurl'];

			$re = $this->upd($table,$id,1);
			if($re){
				$this->redirect("Trash/{$rurl}"); //恢复成功后，跳转到已删留言列表
			}else{
				echo "<script>alert('操作失败，请稍候再试。')</script>";
			}
		}
	}
}

?>