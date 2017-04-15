<?php

namespace Home\Controller;

use Think\Controller;
use Extend\Oauth\ThinkOauth;
/**
 * 用户本地登陆和第三方登陆
 */
class LoginController extends Controller{

    /**
     * 微信消息接口入口
     * 所有发送到微信的消息都会推送到该操作
     * 所以，微信公众平台后台填写的api地址则为该操作的访问地址
     */
    protected $token;
    protected $appid;
    protected $appsecret;
    protected $encodingaeskey;
    protected $options;


    public function __construct(){
        parent::__construct();
        $this->token = C("WX_TOKEN"); 
        $this->appid = C("WX_APPID"); 
        $this->appsecret = C("WX_APPSECRET"); 
        $this->encodingaeskey = C("WX_ENCODINGAESKEY"); 
        //配置
        $this->options = array(
        'token'=>$this->token, //填写你设定的key
        'encodingaeskey'=>$this->encodingaeskey,//填写加密用的EncodingAESKey，如接口为明文模式可忽略
        'appid'=>$this->appid, //填写高级调用功能的app id
        'appsecret'=>$this->appsecret //填写高级调用功能的密钥
        );
    }




    public function index()
    {


    }

    public function login($type=null)
    {   
        //方式1：本地账号登陆
        if(empty($type)){
            if(!IS_POST){
              $this->display();  
            }
            if(IS_POST){ 
                $data['username'] = I('post.username');
                $data['password'] = I('post.password','','md5');
                $code = I('verify','','strtolower');
                //验证验证码是否正确
                if(!($this->check_verify($code))){
                $this->error('验证码错误');
                }
                $member = M('member')->where($data)->find();
                //验证账户是否被禁用
                if($member['type'] == 2){
                    $this->error('您没权限登录前台:(') ;
                }
                if($member){
                    session('userid',$member['id']);
                    session('username',$member['username']);
                    // 更新session
                    $where['userid'] = session('uid');
                    $this->success("登陆成功", U('Index/index'));
                }else{
                    $this->error("账号或密码错误");
                }
            }
            return;
        }
        //方式2：如果是微信登录（微信内部浏览器登录，非扫码登录）
        if(strtolower($type) == "weixin"){
            $appid = C('WX_APPID');
            $redriect = C('WX_DOMAIN').U('Login/wechatCallback');
            $scope = "snsapi_userinfo";
            $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect&response_type=code&scope=$scope&state=STATE#wechat_redirect";
           redirect($url);
           // $this->displays(); 
        }

        //方式3：QQ  weibo  github第三方登陆 
        //验证允许实用的登陆方式，可在后台用代码实现
    
        $can_use = in_array(strtolower($type), array('qq','sina','github'));
        if(!$can_use){
            $this->error("不允许使用此方式登陆");
        }
        //验证通过  使用第三方登陆
        if($type != null){
            $sns = ThinkOauth::getInstance($type);
            redirect($sns->getRequestCodeURL());  
        }
        
    }
    //QQ weibo  github登录回调地址
    public function callback($type = null, $code = null) 
    {
        session('userid',disanfang);
        if(empty($type) || empty($code)){
            $this->error('参数错误');  
        } 
     
        $sns = ThinkOauth::getInstance($type);

        //腾讯微博需传递的额外参数
        $extend = null;
        if ($type == 'tencent') {
            $extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
        }
        $tokenArray = $sns->getAccessToken($code, $extend);
        $openid = $tokenArray['openid'];
        //$token = $tokenArray['access_token'];  //根据需求储存  主要用来刷新并延长授权时间
        //dd($tokenArray);
        //
        //执行后续操作,代码自己实现。
        //请记住每个用户的openid都是唯一的,所以把openid存到数据库即可
        $member = D('MemberView');
        //根据openid判断用户是否存在，如果存在 ，判断用户是否被禁用。如果不存在,把openid存到数据库,相当于注册用户

        #
        #
        #  代码自己实现
        #
        #
        #
    
        
    }
    
    /**
     * 微信登陆回调地址
     * 如果需要手机微信注册 请用这个方法 
     * 参考文档：http://mp.weixin.qq.com/wiki/9/01f711493b5a02f24b04365ac5d8fd95.html
     * @return [type] [description]
     */
    public function wechatCallback()
    {
        $data=array();
        $wechat = new \Extend\Wechat($this->options);
        $wxdata = $wechat->getOauthAccessToken();
        /**
          $wxdata 字段
         {
           "access_token":"ACCESS_TOKEN",
           "expires_in":7200,
           "refresh_token":"REFRESH_TOKEN",
           "openid":"OPENID",
           "scope":"SCOPE",
           "unionid": "o6_bmasdasdsad6_2sgVt7hMZOPfL"
         }
        **/
        $openid = $wxdata['openid'];
        $access_token = $wxdata['access_token'];
        session('openid',$openid);
        session('access_token',$access_token);
        //获取AUTH用户资料
        $oauthUserinfo = $wechat->getOauthUserinfo($access_token,$openid);
        /**
        {
           "openid":" OPENID",
           "nickname": NICKNAME,
           "sex":"1",
           "province":"PROVINCE"
           "city":"CITY",
           "country":"COUNTRY",
            "headimgurl":    "http://wx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/46", 
            "privilege":[
            "PRIVILEGE1"
            "PRIVILEGE2"
            ],
            "unionid": "o6_bmasdasdsad6_2sgVt7hMZOPfL"
        }
        **/
        //是否关注微信号 1：关注  0：未关注  根据实际情况确定是不是要用
        //session('subscribe',$userInfo['subscribe']);
        //组合数据库中的用户字段
        $data['openid'] = $oauthUserinfo['openid'];
        $data['avatar'] =$oauthUserinfo['headimgurl'];
        $data['status'] = 1;
        $data['create_at'] = time();
        $data['update_at'] = time();

        #
        #
        #  判断用户是否存在和和注册用户的代码自己实现。
        #
        #
        #
        
    }
    /**
     * 添加用户
     */
    public function register()
    {
        //默认显示添加表单
        if (!IS_POST) {
            $this->display();
        }
        if (IS_POST) {
            //如果用户提交数据
            $model = D("member");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                if ($model->add()) {
                    $this->success("用户添加成功,即将自动登录…", U('Index/index'));
                } else {
                    $this->error("用户添加失败");
                }
            }
        }
    }
    // 退出当前用户
    public function logout()
    {
        session(null);
        $this->success("正在退出登录…",U('Login/login'));
        // redirect(U('Login/login'), 2, '正在退出登录...');
    }
    //验证码
    public function verify(){
        ob_clean();
        $Verify = new \Think\Verify();
        $Verify->codeSet = '0123456789';
        $Verify->fontSize = 15;
        $Verify->length = 4;
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = true;  // 关闭验证码干扰杂点
        $Verify->entry();
    }
    protected function check_verify($code){
        ob_end_clean();
        $verify = new \Think\Verify();
        return $verify->check($code);
    }
}
