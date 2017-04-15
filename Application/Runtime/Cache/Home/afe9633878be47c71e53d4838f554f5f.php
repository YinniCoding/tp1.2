<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--根据浏览器自适应-->
<!--[if IE 6 ]><html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en-us" class="ie8"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->

<html lang="en-us"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>HTML在线编译界面</title>

    <meta name="description" content="this description">
    <meta name="author" content="ThemeBucket">
    <meta name="copyright" content="ThemeBucket">
    <meta name="generator" content="Documenter v2.0 http://rxa.li/documenter">
    <meta name="date" content="2013-08-24T00:00:00+02:00">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/documenter_style.css" media="all">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/google-code-prettify/prettify.css" media="screen">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/main.css">    
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap.css">    
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/bootstrap.min.css"  media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" type="text/css" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/main.css">
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/google-code-prettify/prettify.js"></script>
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery.js"></script>
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery.scrollTo.js"></script>
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery.easing.js"></script>
    <script>document.createElement('section');var duration='500',easing='swing';</script>
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</head>

<body class="documenter-project-frame2frame" style="background:;">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <div class="container-fluid">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand active" href="index.php" style="margin-left:30px;margin-right:120px;">OnlineStudy</a>
                  <!-- <a href="#documenter_cover" id="documenter_logo">
                <img src="assets/css/img/icon1.png" alt="">
            </a> -->
               </div>
               <!-- 导航条标识头 -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                  <ul class="nav navbar-nav" id="title" style="font-family:微软雅黑;font-size:14px;">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('Page/GeneralCourse');?>">在线学习</a></li>
                    
                    <li><a href="<?php echo U('Compile/all');?>">编程工具</a></li>
                    <li><a href="#">知识测验</a></li>
                    <li class="active"><a href="<?php echo U('Page/liuyan');?>">留言板</a></li>

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
                   <!-- <ul class="nav navbar-nav navbar-right" id="title"  style="font-family:微软雅黑;font-size:14px;">
                     <li><a href="../login.php">登录后台</a></li>
                     <!-- <li><a href="FontEnd/Managers/signup.html">注册</a></li> -->
                   <!-- </ul> -->
                   <form class="navbar-form navbar-right" role="search" style="color:#adadad;font-size: 1.0em;font-family:"微软雅黑";" method="POST" action="">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" style="height: 26px; background-color:ghostwhite;float:left;">
                    </div>
                  <!--<button type="submit" class="btn ">Submit</button>-->
                    <span type="submit" class="glyphicon glyphicon-search" style="padding: 0.7em 0.2em;"></span>
                    <?php
 session_start(); if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { echo "当前用户：".$_SESSION['username']; ?> <a href="../login.php">退出</a><?php
}else{ echo "你还没有登录，<a href='../login.php'>请先登录</a>"; } ?>
                    <!-- <a href="#" class="" style="margin-left: 4em;font-size:16px;">登录</a>/<a href="#" class="" style="font-size:16px;">注册   </a> -->
                  </form>
                 </div>
            </div>
        </nav>
        
    <!-- 下面实现留言板功能 -->  
    <div class="container"><hr class="hrtop"></div>
    <div class="main_resign">
        <div class="container" style="margin-top:60px;">
            <div class="welcome_resign col-md-12">
                
                <div class="col-md-12" style="margin:0;padding:0;">
                <!-- <hr> -->
                    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">留言板</h3>
  </div>
  
</div>
                    </div>
                    <!-- <h4 style="font-family:微软雅黑;">写下你想要说的话吧……</h4> -->
            </div>
            <div class=" col-md-12" style="margin:0;">
                <form class="form-horizontal" role="form" method="POST" action="">
                    <div class="form-group">
                        <!-- <label for="inputaccount" class="col-md-5 control-label">用户名</label> -->
                        <!-- <div class="col-md-3" style="width:4.5%;"></div> -->
                        <div class="col-md-12">
                            <!-- <input type="txt" class="form-control" id="" name="username" placeholder="用户名"> -->
                            <textarea type="text" class="form-control" name="message" rows="14" col=20></textarea>
                        </div> 
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-0 col-md-1">
                            <input type="submit" name="submit" class="btn btn-success"></button>
                            <!-- <button type="button" class="btn btn-default">重置</button> -->
                        </div>
                    </div>
                </form>
                <?php
 header("Content_Type: text/html; charset=utf8"); $con = mysql_connect("localhost","root"); if (!$con) { die('Could not connect: ' . mysql_error()); } mysql_select_db('tpadmin',$con);mysql_query("set names utf8");if(isset($_POST['submit'])) { $content=$_POST['message']; $name=$_SESSION['username']; $time=date('y-m-d h:i:s',time()); include('../connectmysql.php'); if($name) { if($content) { $q="insert into liuyan(id,content,date) values ('$name','$content','$time')"; $result=mysql_query($q,$con); if (!$result) { die('Error:'.mysql_error()); } else{ echo "<script>alert('发表留言成功！')</script>"; } } else {echo "<script>alert('留言内容不能为空！')</script> ";} } else {echo "<script>alert('请先登录再发表留言！')</script> ";} mysql_close(); } ?>
            </div>
            <div class="welcome_resign col-md-12" style="margin:0;padding:0;">
                 <div class="col-md-12" style="">
                <!-- <hr> -->
                    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">历史留言记录：</h3>
                    </div>
                 <div class="">
                 <table class="table table-striped">
        <tbody>
            <thead>
            <tr>
                <th>留言用户</th>
                <th>留言内容</th>
                <th>时间</th>
                <!-- <th>操作</th> -->
            </tr>
        </thead>
        <tbody>
              <?php  $con = mysql_connect("localhost","root"); if (!$con) { die('Could not connect: ' . mysql_error()); } mysql_select_db('tpadmin',$con);mysql_query("set names utf8"); $sql = "select * from liuyan";$result=mysql_query($sql);?>
<tr>
<?php
while($row=mysql_fetch_assoc($result)){ echo "<tr><td>".$row["id"]."</td><td>".$row["content"]."</td><td>".$row["date"]."</td></tr><br>"; } ?>
        </tbody>
    </table>
                 </div>
            </div>
    
</body>
</html>