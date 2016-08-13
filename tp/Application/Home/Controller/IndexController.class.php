<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
//首页
public function index(){
	//echo "111";
	$main = M("main");
	$data = $main->select();
	$this->assign("data",$data);
	$this->display("create");
}

//增加数据
public function doCreateData(){
	//dump($_POST);EXIT;
	$name = $_POST["name"];
	$qq = $_POST["qq"];

	$main = M("main");

	$data['name'] = $name;
	$data['qq'] = $qq;

	if($main->add($data)){
		$this->success("新建数据成功。");
	}else{
		$this->error("新建数据失败。");
	}
}

//删除数据
public function deleteData(){
	$id = $_GET['id'];
	$main = M("main");
	if ($main->delete($id)) {
		$this->success("删除成功。");
	}else{
		$this->error("删除失败。");
	}
}

//更新数据 - 展示
public function updateData(){
	$id = $_GET['id'];
	$main = M("main");
	$data["id"] = $id;
	$dataa = $main->where($data)->find();
	//dump($dataa);
	$this->assign("data",$dataa);
	$this->display("updata");
}

//更新数据 - 操作
public function doUpdateData(){
	$main = M("main");
	$id['id'] = $_POST['id'];
	$data['name'] = $_POST['name'];
	$data['qq'] = $_POST['qq'];
	if($main->where($id)->save($data)){
		$this->success("修改数据成功。");
	}else{
		$this->error("修改数据失败。");
	}
}

//查询数据
public function selectData(){
	$main = M("main");
	$key['name'] = $_POST['ci'];
	$this->ci = $_POST['ci'];
	$data = $main->where($key)->select();
	$this->assign("data",$data);
	$this->display("data");
}
}