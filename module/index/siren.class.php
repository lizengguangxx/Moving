<?php
class siren extends indexMain{
	function __construct(){
		parent::__construct();//继承主类
        $this->db=new db("shicategory","kechengbiao");
		
	}
	function init(){
		if($this->session->get("indexLogin")=="yes"){//确定登录状态为yes,分配用户名，后期根据用户名获取内容			
			$this->smarty->assign("uname",$this->session->get("uname"));
        }
        $this->smarty->assign("yemian","sirenfoot");
        $uid=$this->session->get("uid");
		$result=$this->db->select("select * from shicategory,kechengbiao where shicategory.scid=kechengbiao.scid and uid=$uid");
		$this->smarty->assign("result",$result[0]);
		$this->smarty->assign("result1",$result[1]);
		$this->smarty->assign("result2",$result[2]);
		$this->smarty->assign("result3",$result[3]);
		$this->smarty->display("index/siren/siIndex.html");//显示私人订制的主页
	}
//	训练
	function xunlian(){
		$this->smarty->display("index/siren/hyxlianxi.html");
	}
	//教练
	function jiaolian(){
		$this->smarty->display("index/kecheng/teaching.html");
	}

}
?>