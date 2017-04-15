<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller {
    public function _initialize(){
        $sid = session('adminId');
        //判断用户是否登陆
        if(!isset($sid ) ) {
            //redirect(U('Login/index'));
            $this->error('对不起，您尚未登录，正跳转至登录页面……',U('Login/index'));
        }

    }

}