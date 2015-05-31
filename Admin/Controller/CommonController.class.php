<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
	//公共控制器，其它控制器都来继承它
	public function __construct(){
		//先执行父类构造方法
		parent::__construct();
		//判断是否登录
		if(session('username') == ''){
			$this->redirect('Login/index');
		}
		
	}

	
	//根据条件显示数据
	public function ListAll($table,$perNum = 10,$where=1){
		$db = M($table);
		$total = $db->where($where)->count();
		//实例化page类
		$page = new \Component\Page($total,$perNum);
		$sql = 'select * from ' . $table . ' where ' . $where . ' order by id desc ' . $page->limit ;
		$info = $db->query($sql);
		$pageInfo = $page->fpage();
		$this->assign('num',$total); //总条数传递到模板
		$this->assign('info',$info); //所有记录传递到模板
		$this->assign('pageInfo',$pageInfo);//分页信息传递到模板
		$this->display();

	}

	//根据ID显示某表一条数据
	public function ListOne($table,$id,$temp){
		$db = M($table);
		$resu = $db->find($id);
		return $resu;
		

	}

	//根据ID删除或恢复内容，将is_delete=0为删除，1为恢复即可
	public function upd($table,$id,$stat){

		$result = M($table);
		$result->is_delete = $stat;
		$re = $result->where("id={$id}")->save();
		return $re;
	}
	

}

?>