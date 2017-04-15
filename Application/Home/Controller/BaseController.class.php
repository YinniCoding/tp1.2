<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 如果某个控制器必须用户登录才可以访问  
 * 请继承该控制器
 */
class BaseController extends Controller {
    /* 定义用户id */
    public static $userid = '';

    /**
     * 自动执行
     */
    public function _initialize()
    {

        $sid = session('userid');
        //如果没有的登录 重定向至登录页面
        //这里以微信登录为例 
        if(!isset($sid ) ) {
            $this->error('对不起，您尚未登录，正跳转至登录页面……',U('Login/login'));
            // redirect(U('Login/login',array('type'=>'weixin')));
        }
    }

    
    // public function _initialize(){
    // 	  session('userid',null) ;  //上线时注释这一行
    //     $sid = session('userid');
        
    //     //如果没有的登录 重定向至登录页面
    //     //这里以微信登录为例 
    //     if(!isset($sid ) ) {
    //         $this->error('对不起，您尚未登录，正跳转至登录页面……',U('Login/login'));
    //         // redirect(U('Login/login',array('type'=>'weixin')));
    //     }
    //     /**
    //     微信JSSDK  
    //     详细用法参考：http://mp.weixin.qq.com/wiki/7/1c97470084b73f8e224fe6d9bab1625b.html
    //     */
    //    	$jssdk = new \Extend\JSSDK(C('WX_APPID'), C('WX_APPSECRET'));
    //    	$signPackage = $jssdk->GetSignPackage();
    //    	$signPackage['logo'] = C('WX_DOMAIN').'Public/logo.png';
    //    	$this->assign('signPackage',$signPackage);
    // }

}