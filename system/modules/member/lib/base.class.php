<?php 

defined('G_IN_SYSTEM')or exit('No permission resources.');
define("MEMBER",true);
System::load_sys_fun("user");
class base extends SystemAction {
	protected $userinfo=NULL;	
	public function __construct(){
		$this->db = System::load_sys_class("model");
		$uid=intval(_encrypt(_getcookie("uid"),'DECODE'));		
		$ushell=_encrypt(_getcookie("ushell"),'DECODE');
		if(!$uid)$this->userinfo=false;
		$this->userinfo=$this->db->GetOne("SELECT * from `@#_member` where `uid` = '$uid'");
		if(!$this->userinfo)$this->userinfo=false;	
		
		$shell=md5($this->userinfo['uid'].$this->userinfo['password'].$this->userinfo['mobile'].$this->userinfo['email']);		
		if($ushell!=$shell)$this->userinfo=false;
		global $_cfg;		
		$_cfg['userinfo']=$this->userinfo;
	}
	
	protected function checkuser($uid,$ushell){
		$uid=intval(_encrypt($uid,'DECODE'));
		$ushell=_encrypt($ushell,'DECODE');	
		if(!$uid)return false;
		if($ushell===NULL)return false;
		$this->userinfo=$this->db->GetOne("SELECT * from `@#_member` where `uid` = '$uid'");
		if(!$this->userinfo){
			$this->userinfo=false;
			return false;
		}
		$shell=md5($this->userinfo['uid'].$this->userinfo['password'].$this->userinfo['mobile'].$this->userinfo['email']);
		if($ushell!=$shell){
			$this->userinfo=false;
			return false;
		}else{
			return true;
		}
		
	}
	public function get_user_info(){
		if($this->userinfo){
			return $this->userinfo;
		}else{
			return false;
		}
	}
	protected function HeaderLogin(){
		_message("你还未登录，无权限访问该页！",WEB_PATH."/member/user/login");
	}
	
}


/**
 * openssl 实现的 DES 加密类，支持各种 PHP 版本
 */
class DES
{
    /**
     * @var string $method 加解密方法，可通过 openssl_get_cipher_methods() 获得
     */
    protected $method;

    /**
     * @var string $key 加解密的密钥
     */
    protected $key;

    /**
     * @var string $output 输出格式 无、base64、hex
     */
    protected $output;

    /**
     * @var string $iv 加解密的向量
     */
    protected $iv;

    /**
     * @var string $options
     */
    protected $options;

    // output 的类型
    const OUTPUT_NULL = '';
    const OUTPUT_BASE64 = 'base64';
    const OUTPUT_HEX = 'hex';


    /**
     * DES constructor.
     * @param string $key
     * @param string $method
     *      ECB DES-ECB、DES-EDE3 （为 ECB 模式时，$iv 为空即可）
     *      CBC DES-CBC、DES-EDE3-CBC、DESX-CBC
     *      CFB DES-CFB8、DES-EDE3-CFB8
     *      CTR
     *      OFB
     *
     * @param string $output
     *      base64、hex
     *
     * @param string $iv
     * @param int $options
     */
    public function __construct($key, $method = 'PAD_PKCS5', $output = '', $iv = '', $options = OPENSSL_RAW_DATA | OPENSSL_NO_PADDING)
    {
        $this->key = $key;
        $this->method = $method;
        $this->output = $output;
        $this->iv = $iv;
        $this->options = $options;
    }

    /**
     * 加密
     *
     * @param $str
     * @return string
     */
    public function encrypt($str)
    {
        $str = $this->pkcsPadding($str, 8);
        $sign = openssl_encrypt($str, $this->method, $this->key, $this->options, $this->iv);

        if ($this->output == self::OUTPUT_BASE64) {
            $sign = base64_encode($sign);
        } else if ($this->output == self::OUTPUT_HEX) {
            $sign = bin2hex($sign);
        }

        return $sign;
    }

    /**
     * 解密
     *
     * @param $encrypted
     * @return string
     */
    public function decrypt($encrypted)
    {
        if ($this->output == self::OUTPUT_BASE64) {
            $encrypted = base64_decode($encrypted);
        } else if ($this->output == self::OUTPUT_HEX) {
            $encrypted = hex2bin($encrypted);
        }

        $sign = @openssl_decrypt($encrypted, $this->method, $this->key, $this->options, $this->iv);
        $sign = $this->unPkcsPadding($sign);
        $sign = rtrim($sign);
        return $sign;
    }

    /**
     * 填充
     *
     * @param $str
     * @param $blocksize
     * @return string
     */
    private function pkcsPadding($str, $blocksize)
    {
        $pad = $blocksize - (strlen($str) % $blocksize);
        return $str . str_repeat(chr($pad), $pad);
    }

    /**
     * 去填充
     * 
     * @param $str
     * @return string
     */
    private function unPkcsPadding($str)
    {
        $pad = ord($str{strlen($str) - 1});
        if ($pad > strlen($str)) {
            return false;
        }
        return substr($str, 0, -1 * $pad);
    }

}


class HEC
{
	public function __construct() {
		$this->db=System::load_sys_class('model');
	}


	public function login($username, $token){
		$ch = curl_init(HEC_URL . LOGIN);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
        //Attach our encoded JSON string to the POST fields.
        //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER,  
        	array(
        		"Content-Type: application/json", 
        		"Content-Length: 0", 
        		"UserName: $username", 
        		"X-Hec-Authentication: $token"
        		)); 
         
        //Execute the request
        $result = curl_exec($ch);
        // echo $result ."<br>";
        curl_close($ch);
        $obj = json_decode($result, true);
        $availableScores = $obj['data']['AvailableScores'];
        $login_user=$this->db->GetOne("select * from `@#_member` where `username` = '$username' ORDER BY `uid` DESC LIMIT 1");
        if ($login_user['username'] == null){
        	$time=time();
        	$decode = 0;
        	$sql="INSERT INTO `@#_member`(username,money,img,emailcode,mobilecode,yaoqing,time) VALUES('$username','$availableScores','photo/member.jpg','1','1','$decode','$time')";
        	$this->db->Query($sql);
        	$login_user=$this->db->GetOne("select * from `@#_member` where `username` = '$username' ORDER BY `uid` DESC LIMIT 1");
        	// echo $login_user['uid'] . '<br>'; 
        	// echo "insert";
        }
        else{
        	
        	$time=time();
        	$sql="UPDATE `@#_member` SET money='$availableScores', time='$time' WHERE username='$username'";
        	$this->db->Query($sql);
        	// echo $login_user['uid'] . '<br>';
        	// echo "update";
        }
        // echo $login_user['uid'] . '<br>';
        _setcookie("uid",_encrypt($login_user['uid']), 60*60*24*7);
	}

	public function transfer($param_list, $username, $token){
		$param_str = implode('&', array_map(
		    function ($v, $k) { return sprintf("%s=%s", $k, $v); },
		    $param_list,
		    array_keys($param_list)
		));
		$key_str = implode("&", $param_list) . MD5_KEY;
		// DES CBC 加解密
		$des = new DES(DES_KEY, 'DES-CBC', DES::OUTPUT_HEX, DES_IV);
		$data = array(
		    'param' => $des->encrypt($param_str),
		    'key' => md5($key_str)
		);

		$payload = json_encode($data);
		$ch = curl_init(HEC_URL . CREATE_ORDER);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        //Attach our encoded JSON string to the POST fields.
        //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER,  
        	array(
        		"Content-Type: application/json", 
        		"Content-Length: ". strlen($payload), 
        		"UserName: $username", 
        		"X-Hec-Authentication: $token"
        		));
        //Execute the request
        $result = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($result, true);
        echo '<br>' . $obj['code'];
	}

	public function notify($param_list, $username, $token){
		$param_str = implode('&', array_map(
		    function ($v, $k) { return sprintf("%s=%s", $k, $v); },
		    $param_list,
		    array_keys($param_list)
		));
		$key_str = implode("&", $param_list) . MD5_KEY;
		// DES CBC 加解密
		$des = new DES(DES_KEY, 'DES-CBC', DES::OUTPUT_HEX, DES_IV);
		$data = array(
		    'param' => $des->encrypt($param_str),
		    'key' => md5($key_str)
		);

		$payload = json_encode($data);
		$ch = curl_init(HEC_URL . DRAW_ORDER);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        //Attach our encoded JSON string to the POST fields.
        //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER,  
        	array(
        		"Content-Type: application/json", 
        		"Content-Length: ". strlen($payload), 
        		"UserName: $username", 
        		"X-Hec-Authentication: $token"
        		));
        //Execute the request
        $result = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($result, true);
        echo '<br>' . $obj['code'] . '<br>';
        // var_dump($obj);
	}
}
?>