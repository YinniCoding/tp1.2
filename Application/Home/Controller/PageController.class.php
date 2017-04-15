<?php

namespace Home\Controller;

use Think\Controller;

class PageController extends BaseController{

    public function index($name){
        //$this->display();
        //html5+css3系列
        if($name==GeneralCourse) {
        	redirect(U('Page/GeneralCourse'));	
        }
        else if($name==html5) {
        	redirect(U('Page/html5'));
        }
        else if($name==bootstrap) {
        	redirect(U('Page/bootstrap'));
        }
        else if($name==foundation) {
        	redirect(U('Page/foundation'));
        }
        else if($name==liuyan) {
            redirect(U('Page/liuyan'));
        }
        else if($name==cppsuanfa1) {
            redirect(U('Page/cppsuanfa1'));
        }
        else if($name==cppsuanfa2) {
            redirect(U('Page/cppsuanfa2'));
        }
    }
}
