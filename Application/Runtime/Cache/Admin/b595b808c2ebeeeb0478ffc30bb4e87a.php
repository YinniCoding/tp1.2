<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineStudy(1.1)—后台管理系统</title>

    <!-- Bootstrap core CSS -->
    <link href="/ThinkphpOS_1.1/Application/Admin/View//Public/static/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/ThinkphpOS_1.1/Application/Admin/View//Public/static/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Admin/View//Public/static/font-awesome/css/font-awesome.min.css">
</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('index/index');?>"><b>OS_1.1后台管理系统</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav side-nav" id="sidebarid">
    <li><a href="<?php echo U('index/index');?>"><i class="fa fa-home"></i>  首页</a></li>
    <li class="dropdown">
        <a href="<?php echo U('category/index');?>"><i class="fa fa-reorder"></i>  文章分类</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('post/index');?>"><i class="fa fa-edit"></i>  文章管理</a>
    </li>

    <li class="dropdown">
        <a href="<?php echo U('Notes/index');?>"><i class="fa fa-book"></i>  公告栏管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('Liuyan/index');?>"><i class="fa fa-book"></i>  留言板管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('Comments/index');?>"><i class="fa fa-pencil"></i>  评论管理</a>
    </li>
    <!-- <li class="dropdown">
        <a href="<?php echo U('page/index');?>"><i class="fa fa-file"></i>  单页管理 </a>
    </li> -->
    <li class="dropdown">
        <a href="<?php echo U('member/index');?>"><i class="fa fa-user"></i>  用户管理</a>  
    </li>
     <li class="dropdown">
        <a href="<?php echo U('links/index');?>"><i class="fa fa-link"></i>  链接管理</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i>  系统设置 <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo U('setting/index');?>">自定义字段</a></li>
            <li><a href="#">系统优化</a></li>
            <li><a href="#">缓存管理</a></li>
        </ul>
    </li>
</ul>

            <ul class="nav navbar-nav navbar-right navbar-user">

                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 当前用户,<?php echo session('username');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-gear"></i> 设置</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('login/logout');?>"><i class="fa fa-power-off"></i> 退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

<div class="col-md-12">
        <div id="page">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title">一、后台基于如下环境:</h2>
    </div>
    <div class="panel-body">
    <h3></h3>
             <ul>
                        <li><h4> thinkphp 3.2.3</h4></li>
                        <li><h4>php 5.5.12</h4></li>
                        <li><h4>mysql 5.6.17</h4></li>
                        <li><h4>Apache 2.4.9</h4></li>
                        <li><h4>CentOS </h4></li>
                        <!-- <li>用户管理</li>
                        <li>用户登陆注册</li>
                        <li>无限极分类</li>
                        <li>文章管理</li>
                        <li>单页管理</li>
                        <li>链接管理</li> -->
                    </ul>
    
                <p><span class="pull-right">个人博客: <a href="http://www.luckyye.top" target="_blank">http://www.luckyye.top</a> </span></p>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">二、目前已集成功能</h3>
    </div>
    <div class="panel-body">
        <h3></h3>
                    

                    <ul>
                        <li><h4>前台用户信息</h4></li>
                        <li><h4>后台普通管理员、超级管理员</h4></li>
                        <hr>
                        <li><h4>学习内容分类管理</h4></li>
                        <li><h4>学习内容管理及发布</h4></li>
                        <hr>
                        <li><h4>留言板管理</h4></li>
                        <li><h4>评论框管理</h4></li>
                        <li><h4>公告栏管理</h4></li>
                        <hr>
                        <li><h4>自定义菜单(链接、字段等)</h4></li>
                    </ul>
    </div>
</div>

<div class="col-md-12" style="padding:0px;">
    <div class="col-md-4" style="padding:2px;">
            <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">文章管理<i class="fa fa-pencil fa"></i></h3>
    </div>
    <div class="panel-body">
        <ul>
         <li>
             <a href="<?php echo U('category/index');?>"><h4>文章分类</h4></a>
         </li>
         <li style="list-style:none;">
             <!-- <a href="<?php echo U('post/index');?>"><h4>文章管理</h4></a> -->
             
         </li>
            
        </ul>
    </div>
</div>
    </div>
    <div class="col-md-4" style="padding:2px;">
            <div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">留言板管理<i class="fa fa-book fa"></i></h3>
    </div>
    <div class="panel-body">
        <ul>
         <li>
             <a href="<?php echo U('Liuyan/index');?>"><h4>留言板管理</h4></a>
         </li>
         <li style="list-style:none;">

         </li>
        </ul>
    </div>
</div>
    </div>
    <div class="col-md-4" style="padding:2px;">
            <div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">用户管理<i class="fa fa-user fa"></i></h3>
    </div>
    <div class="panel-body">
        <ul>
         <li>
             <a href="<?php echo U('member/index');?>"><h4>两级用户管理</h4></a>
         </li>
         <li style="list-style:none;">

         </li>
        </ul>
    </div>
</div>
</div>




    

<!-- JavaScript -->
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>