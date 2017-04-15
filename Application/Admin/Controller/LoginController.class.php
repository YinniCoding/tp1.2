<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
    //登陆主页
    public function index(){
       $this->display();
    }
    //登陆验证
    public function login(){
        if(!IS_POST)$this->error("非法请求");
        $member = M('member');
        $username =I('username','','addslashes');
        $password =I('password','','md5');
        $code = I('verify','','strtolower');
        //验证账号密码是否正确
        $user = $member->where("username = '%s' and password= '%s'",array($username,$password))->find();

        if(!$user) {
            $this->error('账号或密码错误 :(') ;
        }
        //验证账户是否被禁用
        if($user['status'] == 0){
            $this->error('账号被禁用，请联系超级管理员 :(') ;
        }
        if($user['type'] == 1){
            $this->error('您没权限登陆后台 :(') ;
        }
        //验证是否为管理员
        //更新登陆信息
        $data =array(
            'id' => $user['id'],
            'update_at' => time(),
            'login_ip' => get_client_ip(),
        );
        
        //如果数据更新成功  跳转到后台主页
        if($member->save($data)){
            session('adminId',$user['id']);
            session('username',$user['username']);
            $this->success("登陆成功",U('Index/index'));
        }
        //定向之后台主页
        

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
        ob_clean();
        $verify = new \Think\Verify();
        return $verify->check($code);
    }

    public function logout(){
        session('adminId',null);
        session('username',null);
        $this->success("正在退出登录……",U('Login/index'));
        //redirect(U('Login/index'));
    }
}
