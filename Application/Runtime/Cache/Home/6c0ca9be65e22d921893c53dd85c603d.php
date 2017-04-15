<?php if (!defined('THINK_PATH')) exit();?>
<!--根据浏览器自适应-->
<!--[if IE 6 ]><html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en-us" class="ie8"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->

<html lang="en-us"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title> OnlineStudy</title>

    <meta name="description" content="this description">
    <meta name="author" content="ThemeBucket">
    <meta name="copyright" content="ThemeBucket">
    <meta name="generator" content="Documenter v2.0 http://rxa.li/documenter">
    <meta name="date" content="2013-08-24T00:00:00+02:00">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/codemirror.min.js"></script>
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/css/codemirror.css">
        <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/htmlmixed.js"></script>
        <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/xml.js"></script>
        <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/javascript.js"></script>
        <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/css.js"></script>
        <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/clike.js"></script>
        <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/php.js"></script>
        <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap.min.css"  media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/iconfont.css" media="screen" title="no title">
    <!-- Custom CSS -->
    <link href="../assets/css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets02/css/bootstrap.min.css"  media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets02/css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets02/css/iconfont.css" media="screen" title="no title">
    <!-- Custom Fonts -->
    <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

    <!--[if lt IE 9]>
        <script src="//apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
        <script src="//apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    <!-- PHP 代码 -->
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/css/style.css?version=1.02"> 
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/css/buttons.css"> 
   
<!-- codemirror代码高亮 -->
<link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/lib/codemirror.css">  
<link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/lib/util/simple-hint.css">  
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/lib/codemirror.js"></script>  
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/lib/util/simple-hint.js"></script>  
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/util/javascript-hint.js"></script>  
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/mode/javascript/javascript.js"></script>    
<!-- jQuery -->
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/jquery.min.js"></script>
<!-- <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/css/buttons.css"></script> -->
</head>

<body class="documenter-project-frame2frame">
    <div class="container-fliud">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <div class="container-fluid">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand active" href="<?php echo U('Index/index');?>" style="margin-left:30px;margin-right:120px;">OnlineStudy</a>
                  <!-- <a href="#documenter_cover" id="documenter_logo">
                <img src="assets/css/img/icon1.png" alt="">
            </a> -->
               </div>
               <!-- 导航条标识头 -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                  <ul class="nav navbar-nav" id="title" style="font-family:微软雅黑;">
                    <li ><a href="<?php echo U('Index/index');?>"  >首页</a></li>
                    <li><a href="<?php echo U('Page/GeneralCourse');?>">在线学习</a></li>
                    <li class="active"><a href="<?php echo U('Compile/all');?>">编程工具</a></li>
                    <li><a href="#">知识测验</a></li>
                    <li><a href="<?php echo U('Page/liuyan');?>">留言板</a></li>

                    <li><a href="#">联系我们</a></li>
                  </ul>
                <!-- 选项 -->
                  <!-- <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                      <!--<span class="glyphicon glyphicon-search" aria-hidden="true"></span>-->
                  <!-- </form> -->
                <!-- 搜索框和提交按钮 -->
                 </div>
            </div>
        </nav>
        <div class="container" style="margin-top:50px;">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?php echo U('Compile/Web');?>"> Web在线编译</a></h3>
  </div>
  <div class="panel-body">
    这是一个基本的面板
  </div>
</div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?php echo U('Compile/c');?>"></a>C语言在线编译</h3>
  </div>
  <div class="panel-body">
    这是一个基本的面板
  </div>
</div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-Info">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?php echo U('Compile/cpp');?>">C++在线编译</a> </h3>
  </div>
  <div class="panel-body">
    这是一个基本的面板
  </div>
</div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?php echo U('Compile/php');?>">PHP在线编译</a> </h3>
  </div>
  <div class="panel-body">
    这是一个基本的面板
  </div>
</div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?php echo U('Compile/java');?>">JAVA在线编译</a> </h3>
  </div>
  <div class="panel-body">
    这是一个基本的面板
  </div>
</div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?php echo U('Compile/csharp');?>">C#在线编译</a> </h3>
  </div>
  <div class="panel-body">
    这是一个基本的面板
  </div>
</div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?php echo U('Compile/pyton');?>">PYTHON在线编译</a> </h3>
  </div>
  <div class="panel-body">
    这是一个基本的面板
  </div>
</div>
                </div>
                

            </div>

            <!-- <div class="col-md-3">
              <a href="#" class="button button-3d button-inverse button-pill ">Python编译</a>
            </div>
            <div class="col-md-3">
              <a href="#" class="button button-3d button-inverse button-pill ">Python编译</a>
            </div>
            <div class="col-md-3">
              <a href="#" class="button button-3d button-default button-pill ">Python编译</a>
            </div>
            <div class="col-md-3">
              <a href="#" class="button button-3d button-success button-pill ">Python编译</a>
            </div> -->
        <!-- <div class="col-md-12">
          <div class="col-md-6">
            
          </div>
        </div> -->
   <!-- <div class="col-md-3" style=" margin-top:0px;margin-left: -234px; background-color:#f1f1f1;height:1000px;">
     <div class="col-md-12" style="margin-top:100px; " ><a href="<?php echo U('Compile/Web');?>"><h4 style=" text-align: center;">Web在线编译</h4></a></div>
     <hr>
     <div class="col-md-12"><a href="<?php echo U('Compile/php');?>"><h4 style=" text-align: center;">php在线编译</h4></a></div>
     <hr>
     <div class="col-md-12"><a href="<?php echo U('Compile/java');?>"><h4 style=" text-align: center;">java在线编译</h4></a></div>

     <hr>
     <div class="col-md-12"><a href="<?php echo U('Compile/cpp');?>"><h4 style=" text-align: center;">c++在线编译</h4></a></div>
     <div class="col-md-12"><a href="<?php echo U('Compile/c');?>"><h4 style=" text-align: center;">c语言在线编译</h4></a></div>
     <div class="col-md-12"><a href="<?php echo U('Compile/csharp');?>"><h4 style=" text-align: center;">c#在线编译</h4></a></div>
     <div class="col-md-12"><a href="<?php echo U('Compile/python');?>"><h4 style=" text-align: center;">python在线编译</h4></a></div>
     <div class="col-md-12"><a href="python/python.php"><h4 style=" text-align: center;">go在线编译</h4></a></div><div class="col-md-12"><a href="python/python.php"><h4 style=" text-align: center;">perl在线编译</h4></a></div>
      -->

   </div>
  <div class="col-md-9"></div>
</body>
</html>