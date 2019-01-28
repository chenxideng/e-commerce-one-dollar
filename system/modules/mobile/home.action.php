<?php 
defined('G_IN_SYSTEM')or exit('No permission resources.');
System::load_app_class('base','member','no');
System::load_app_fun('my','go');
System::load_app_fun('user','go');
System::load_sys_fun('send');
System::load_sys_fun('user');
class home extends base {
	public function __construct(){ 
		parent::__construct();
		if(ROUTE_A!='userphotoup' and ROUTE_A!='singphotoup'){
			if(!$this->userinfo)_message("请登录",WEB_PATH."/mobile/user/login",3);
		}		
		$this->db = System::load_sys_class('model');
		
	}
	public function init(){
	    $webname=$this->_cfg['web_name'];
		$member=$this->userinfo;
		$title="我的会员中心";	
		//$quanzi=$this->db->GetList("select * from `@#_quanzi_tiezi` order by id DESC LIMIT 5");		
		
	 //获取云购等级  云购新手  云购小将==
	  $memberdj=$this->db->GetList("select * from `@#_member_group`");
	   
	  $jingyan=$member['jingyan'];
	  if(!empty($memberdj)){
	     foreach($memberdj as $key=>$val){
		    if($jingyan>=$val['jingyan_start'] && $jingyan<=$val['jingyan_end']){
			   $member['yungoudj']=$val['name'];
			}
		 }
	  }
	  
		include templates("mobile/user","index");
	}
  
	 function invite(){
        $webname=$this->_cfg['web_name'];
        $member=$this->userinfo;
        $title="我的会员中心";
        //$quanzi=$this->db->GetList("select * from `@#_quanzi_tiezi` order by id DESC LIMIT 5");

        //获取云购等级  云购新手  云购小将==
        $memberdj=$this->db->GetList("select * from `@#_member_group`");

        $jingyan=$member['jingyan'];
        if(!empty($memberdj)){
            foreach($memberdj as $key=>$val){
                if($jingyan>=$val['jingyan_start'] && $jingyan<=$val['jingyan_end']){
                    $member['yungoudj']=$val['name'];
                }
            }
        }
        include templates("mobile/user","invite");
    }
	
	//云购记录
	public function userbuylist(){
	   $webname=$this->_cfg['web_name'];
		$mysql_model=System::load_sys_class('model');
		$member=$this->userinfo;
		$uid = $member['uid'];
		$title="购买记录";					
		//$record=$mysql_model->GetList("select * from `@#_member_go_record` where `uid`='$uid' ORDER BY `time` DESC");				
		include templates("mobile/user","userbuylist");
	}
	//购买记录详细
	public function userbuydetail(){
	    $webname=$this->_cfg['web_name'];
		$mysql_model=System::load_sys_class('model');
		$member=$this->userinfo;
		$title="购买详情";
		$crodid=intval($this->segment(4));
		$record=$mysql_model->GetOne("select * from `@#_member_go_record` where `id`='$crodid' and `uid`='$member[uid]' LIMIT 1");		
		if($crodid>0){
			include templates("member","userbuydetail");
		}else{
			echo _message("页面错误",WEB_PATH."/member/home/userbuylist",3);
		}
	}
	//获得的商品
	public function orderlist(){
	    $webname=$this->_cfg['web_name'];
		$member=$this->userinfo;
		$title="获得的商品";
		//$record=$this->db->GetList("select * from `@#_member_go_record` where `uid`='".$member['uid']."' and `huode`>'10000000' ORDER BY id DESC");				
		include templates("mobile/user","orderlist");
	}

	public function useraddress(){
		$mysql_model=System::load_sys_class('model');
		$member=$this->userinfo;
		$uid=$member['uid'];
		if(isset($_POST['submit'])){
			foreach($_POST as $k=>$v){
				$_POST[$k] = _htmtocode($v);
			}
			$sheng=isset($_POST['sheng']) ? $_POST['sheng'] : "";
			$shi=isset($_POST['shi']) ? $_POST['shi'] : "";
			$xian=isset($_POST['xian']) ? $_POST['xian'] : "";
			$jiedao=isset($_POST['jiedao']) ? $_POST['jiedao'] : "";
			$youbian=isset($_POST['youbian']) ? $_POST['youbian'] : "";
			$shouhuoren=isset($_POST['shouhuoren']) ? $_POST['shouhuoren'] : "";
			$tell=isset($_POST['tell']) ? $_POST['tell'] : "";
			$mobile=isset($_POST['mobile']) ? $_POST['mobile'] : "";
			$time=time();
			if($sheng==null or $jiedao==null or $shouhuoren==null or $mobile==null){
				_message("带星号不能为空;");
				exit;
			}			
			if(!_checkmobile($mobile)){
				_message("手机号错误;");
				exit;
			}
			$addr=$sheng.','.$shi.','.$xian.','.$jiedao;
			$shouhuoren = passport_encrypt($shouhuoren,KEY1);
			$mobile = passport_encrypt($mobile,KEY2);
			$addr = passport_encrypt($addr,KEY3);
			$mysql_model->Query("UPDATE `@#_member` SET `real_name`='$shouhuoren', `real_phone`='$mobile',`ship_addr`='$addr' where uid='".$uid."'");
			_messagemobile("收货地址添加成功",WEB_PATH."/mobile/home/address",3);
		}
	}

	public function updateddress(){
		$mysql_model=System::load_sys_class('model');
		$member=$this->userinfo;
		$uid=$member['uid'];
		$id = $this->segment(4);
		$id = abs(intval($id));
		if(isset($_POST['submit'])){
			$sheng=isset($_POST['sheng']) ? $_POST['sheng'] : "";
			$shi=isset($_POST['shi']) ? $_POST['shi'] : "";
			$xian=isset($_POST['xian']) ? $_POST['xian'] : "";
			$jiedao=isset($_POST['jiedao']) ? $_POST['jiedao'] : "";
			$youbian=isset($_POST['youbian']) ? $_POST['youbian'] : "";
			$shouhuoren=isset($_POST['shouhuoren']) ? $_POST['shouhuoren'] : "";
			$tell=isset($_POST['tell']) ? $_POST['tell'] : "";
			$mobile=isset($_POST['mobile']) ? $_POST['mobile'] : "";
			$time=time();
			if($sheng==null or $jiedao==null or $shouhuoren==null or $mobile==null){
				_message("带星号不能为空;");
				exit;
			}			
			if(!_checkmobile($mobile)){
				_message("手机号错误;");
				exit;
			}
		$addr=$sheng.','.$shi.','.$xian.','.$jiedao;
			$shouhuoren = passport_encrypt($shouhuoren,KEY1);
			$mobile = passport_encrypt($mobile,KEY2);
			$addr = passport_encrypt($addr,KEY3);
		$mysql_model->Query("UPDATE `@#_member` SET `real_name`='$shouhuoren', `real_phone`='$mobile',`ship_addr`='$addr' where uid='".$uid."'");				
		_messagemobile("修改成功",WEB_PATH."/mobile/home/address",3);
		}
	}

	public function deladdress(){
		$mysql_model=System::load_sys_class('model');
		$member=$this->userinfo;
		$uid=$member['uid'];
		$id=$this->segment(4);
		$id = abs(intval($id));
		$mysql_model->Query("UPDATE `@#_member` SET `real_name`=null, `real_phone`=null,`ship_addr`=null where uid='".$uid."'");
			header("location:".WEB_PATH."/mobile/home");
		_messagemobile("删除成功",WEB_PATH."/mobile/home",3);
	}

	//账户管理
	public function userbalance(){
	    $webname=$this->_cfg['web_name'];
		$member=$this->userinfo;
		$title="账户记录";
		$account=$this->db->GetList("select * from `@#_member_account` where `uid`='$member[uid]' and `pay` = '账户' ORDER BY time DESC");
         $czsum=0;
         $xfsum=0;
		if(!empty($account)){ 
			foreach($account as $key=>$val){
			  if($val['type']==1){
				$czsum+=$val['money'];		  
			  }else{
				$xfsum+=$val['money'];		  
			  }		
			} 		
		}
		include templates("mobile/user","userbalance");
	}
	
	 
	public function userrecharge(){
	    $webname=$this->_cfg['web_name'];
		$member=$this->userinfo;
		$title="账户充值";
		//$paylist = $this->db->GetList("SELECT * FROM `@#_pay` where `pay_start` = '1'");
 	
		include templates("mobile/user","recharge");
	}	

	public function address(){
		$member=$this->userinfo;
		$uid = $member['uid'];
		$title="收货地址";
		$address = $this->db->GetOne("SELECT * FROM `@#_member` where `uid`='$uid'");
		if($address['ship_addr'] == null || $address['real_name'] == null || $address['real_phone'] == null){
			$is_address = false;
		} else {
			$is_address = true;
		}
		include templates("mobile/user","address");
	}	
	//晒单
	public function singlelist(){
		 $webname=$this->_cfg['web_name'];
		include templates("mobile/user","singlelist");
	}
}

?>