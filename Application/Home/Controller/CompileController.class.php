<?php

namespace Home\Controller;

use Think\Controller;

class CompileController extends BaseController{

    public function index($name){
        //$this->display();
        //html5+css3系列
        if($name==all) {
            //redirect(U('Compile/index'));
            redirect(U('Compile/all')); 

            // $this->display();
        }
        else if($name==Web) {
        	redirect(U('Compile/Web'));	
        }
        else if($name==c) {
        	redirect(U('Compile/c'));
        }
        else if($name==cpp) {
        	redirect(U('Compile/cpp'));
        }
        else if($name==java) {
        	redirect(U('Compile/java'));
        }
        else if($name==csharp) {
            redirect(U('Compile/csharp'));
        }
        else if($name==php) {
            redirect(U('Compile/php'));


            // if(!IS_GET) {
            //     $this->display();
            //     $this->success(U('Compile/php'));
            // }
        }
    }
}
