<?php
namespace Admin\Controller;


class ArticleController extends CommonController{

	//显示所有文章
	public function ArticleList(){
		$perNum = 20;
		
		if(!empty($_POST)){
			$k = $_POST['searchKey'];
			$where = 'is_delete=1 and ' . ' title LIKE "%' . $k . '%" or content LIKE "%' . $k . '%"';
			$info = $this->ListAll('news',$perNum,$where);//ListAll继承自父类Common
		}else{
			$info = $this->ListAll('news',$perNum,'is_delete=1');
		}
		
	}
	public function ArticleListOne(){
		if(!empty($_GET)){
			$id = $_GET['id'];
			$info = $this->ListOne('news',$id);
			$this->assign('info',$info); //将查到记录传递到模板
			$this->display('Manager/Content');

		}
	}
	//发表文章
	public function ArticlePublish(){
		if (!empty($_POST['publish']) && isset($_POST['publish'])) {
			$news = new \Model\NewsModel();
			$r = $news->create();
			
			if(!$r){ //验证未通过时执行
				$errorInfo = implode(' ', $news->getError());
				$this->error('出错了...' . $errorInfo);
			}else{
				$re = $news->add();
				if($re){
					//发表成功后，显示此篇文章链接
					$info = $_SERVER['HTTP_ORIGIN'] . '/8/div_css/index.php?p=' . $re;
					$info = '<a href=' . $info . '>发表成功，查看此文' . '</a>';
					$this->assign('info',$info);
					$this->success($info);
				}else{
					echo "<script>alert('出错啦')</script>";
				}

			}
			
			
		}else{

			$this->display();
		}
		
	}
	//根据ID删除文章，不是真删除，将is_delete=0即可
	public function del(){
		if(!empty($_GET)){
			$id = $_GET['id'];
		}
		
		$re = $this->upd('news',$id,0);
		if($re){
			//echo "<script>alert('删除成功！')</script>";
			$this->redirect('Article/ArticleList');
		}
	}
	
}

?>