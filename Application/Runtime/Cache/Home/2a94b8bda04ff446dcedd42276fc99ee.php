<?php if (!defined('THINK_PATH')) exit();?>
<!--根据浏览器自适应-->
<!--[if IE 6 ]><html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en-us" class="ie8"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->
<html lang="en-us"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>OnlineStudy—首页</title>

    <meta name="description" content="this description">
    <meta name="author" content="ThemeBucket">
    <meta name="copyright" content="ThemeBucket">
    <meta name="generator" content="Documenter v2.0 http://rxa.li/documenter">
    <meta name="date" content="2013-08-24T00:00:00+02:00">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/main.css">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/css/bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap.min.css"  media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/iconfont.css" media="screen" title="no title">
    <script src="assets02/js/jquery.js"></script>
    
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/bootstrap.min.js"></script>
    <script src="assets02/js/google-code-prettify/prettify.js"></script>
	<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery-1.8.2.min.js"></script>

    
    <style type="text/css">
    	@media screen and (max-width: 760px) {
    #qr{
        display: none;
    }
    
}
    </style> 
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <div class="container-fluid">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand active" href="<?php echo U(Index/index);?>" style="margin-left:30px;margin-right:120px;">OnlineStudy</a>
                  <!-- <a href="#documenter_cover" id="documenter_logo">
                <img src="assets/css/img/icon1.png" alt="">
            </a> -->
               </div>
               <!-- 导航条标识头 -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                  <ul class="nav navbar-nav" id="title" style="font-family:微软雅黑;">
                    <li  class="active"><a href="<?php echo U(Index/index);?>"  >首页</a></li>
                    <li><a href="<?php echo U('Page/GeneralCourse');?>">在线学习</a></li>
                    <li><a href="<?php echo U('Compile/all');?>">编程工具</a></li>
                    <li><a href="#">知识测验</a></li>
                    <li><a href="<?php echo U('Page/liuyan');?>">留言板</a></li>

                    <li><a href="#">联系我们</a></li>
                  </ul>
                   <form class="navbar-form navbar-right" role="search" style="color:#adadad;font-size: 1.0em;font-family:"微软雅黑";">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" style="height: 26px; background-color:ghostwhite;float:left;">
                    </div>
                  <!-- <button type="submit" class="btn ">Submit</button> -->
                    <span type="submit" class="glyphicon glyphicon-search" style="padding: 0.7em 0.2em;"></span>
                    <?php
 session_start(); if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { echo "当前用户：".$_SESSION['username']; ?> <a href="<?php echo U('Login/logout');?>">退出</a><?php
}else{ echo "你还没有登录，<a href='login.php'>请先登录</a>"; } ?>
                    
                </div>
            </div>

</nav>
<!-- mainpart -->

	<div id="qr" style="margin-left:20px;margin-top:28%;float:left;">
	 <img id="img1" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/weixin.jpg" style="width:140px;height:140px;">
	 <h5>扫一扫，获取更多信息。</h5>
</div>

<div class="container">

	 <!-- carousel -->
	<div class="col-md-12" style="margin-top: 100px;">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  

            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner" role="listbox" style="width:100%;">
                <div class="item active img-responsive">
                    <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/shouye4.png" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item img-responsive">
                    <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/shouye2.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <!-- div class="item">
                    <img src="assets/img/03.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div> -->
            </div>
            <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#carousel-example-generic"
        data-slide="prev">&lsaquo;
    </a>
    <a class="carousel-control right" href="#carousel-example-generic"
        data-slide="next">&rsaquo;
    </a>
            <!-- <li class="sy-prev"><a href="#prev">Previous</a></li>
            <li class="sy-next"><a href="#next">Next</a></li> -->
        </div>
        <hr>
	 </div>


	 <!-- threepart -->
	 <div class="col-md-12" style="margin-top:50px;">
	 	<nav class="navbar navbar-default" role="navigation" >
	 	  <div class="navbar-header">
	 		<a href="#" class="navbar-brand">站点简介</a>
	 	  </div>
	    </nav>
	 </div>
	 <div class="col-md-12" style="margin-top:-15px;">
	    <div class="row">
	    	<div class="col-md-4" style="">
	 	    <div id="studycourse">
	 	       <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/img/study.jpg">

	 	       <div class="caption">
	 	       	   <h3>学习资源</h3>
	 	       	   <p>包含了Web前端(h5、css3、javacript)，框架Bootstrap布局完整的教程。后台开发包含java、php、c++、python等动态语言。</p>
	 	       	   <p>
	 	       	   	  <a href="index02.php" class="btn btn-success">开始学习</a>
	 	       	   </p>
	 	       	   <div class="row clearfix" style="margin-left:-45px;">
	 	       	   	  <div class="col-xs-6 column">
	 	       	   	  	<ul class="list-unstyle">
	 	       	   	  		<li><a href="#">h5基本教程</a></li>
	 	       	   	  		<li><a href="#">css3新属性详解</a></li>
	 	       	   	  		<li><a href="#">JavaScript教程</a></li>
	 	       	   	  		<li><a href="#">Bootstrap布局教程</a></li>
	 	       	   	  		<li><a href="#">jQuery教程</a></li>
	 	       	   	  	</ul>
	 	       	   	  </div>
	 	       	   	  <div class="col-xs-6 column">
	 	       	   	  	<ul class="list-unstyle">
	 	       	   	  		<li><a href="#">java在线学习</a></li>
	 	       	   	  		<li><a href="#">c++在线学习</a></li>
	 	       	   	  		<li><a href="#">php教程</a></li>
	 	       	   	  		<li><a href="#">python教程</a></li>
	 	       	   	  		<li><a href="#">thinkphp框架教程</a></li>
	 	       	   	  	</ul>
	 	       	   	  </div>
	 	       	   </div>
	 	       </div>

	 	    </div>
	    </div>
	    <div class="col-md-4">
	 	    <div id="onlinetools">
	 	    <img src="assets02/img/tools.jpg">

	 	       <div class="caption">
	 	       	   <h3>在线工具</h3>
	 	       	   <p>利用本地环境实现Web前端、java、php、c++、python等编程语言在线编译。正在使用docker集成环境来优化。</p>
	 	       	   <p>
	 	       	   	  <a href="#" class="btn btn-success">尝试在线编程</a>
	 	       	   </p>
	 	       	   <div class="row clearfix">
	 	       	   	  <div class="col-xs-6 column" style="margin-left:-35px;">
	 	       	   	  	<ul class="list-unstyle">
	 	       	   	  		<li><a href="#">html在线编译</a></li>
	 	       	   	  		<li><a href="#">css在线编译</a></li>
	 	       	   	  		<li><a href="#">javascript在线编译</a></li>
	 	       	   	  		<li><a href="#">java在线编译</a></li>
	 	       	   	  		<li><a href="#">c++在线编译</a></li>
	 	       	   	  	</ul>
	 	       	   	  </div>
	 	       	   	  <div class="col-xs-6 column">
	 	       	   	  	<ul class="list-unstyle">
	 	       	   	  		<li><a href="#">c语言在线编译</a></li>
	 	       	   	  		<li><a href="#">php在线编译</a></li>
	 	       	   	  		<li><a href="#">python在线编译</a></li>
	 	       	   	  		<li><a href="#">c#在线编译</a></li>
	 	       	   	  		
	 	       	   	  	</ul>
	 	       	   	  </div>
	 	       	   </div>
	 	       </div>
	 	    </div>
	    </div>
	     <div class="col-md-4">
	 	    <div id="studyreferences">
	 	    <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/img/03.png">
	 	       <div class="caption">
	 	       	   <h3>后台管理</h3>
	 	       	   <p>采用MVC分层思想，实现模块分离。采用两级管理员模式，后台利用php+mysql管理用户信息、实现学习文章、公告栏信息、留言板、评论信息管理及发布。</p>
	 	       	   <p>
	 	       	   	  <a href="#" class="btn btn-success">了解更多关于MVC模式</a>
	 	       	   </p>
	 	       	   <div class="row clearfix">
	 	       	   	  <div class="col-xs-6 column" style="margin-left:-35px;">
	 	       	   	  	<ul class="list-unstyle">
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>

	 	       	   	  	</ul>
	 	       	   	  </div>
	 	       	   	  <div class="col-xs-6 column">
	 	       	   	  	<ul class="list-unstyle">
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#"> 1</a></li>

	 	       	   	  	</ul>
	 	       	   	  </div>
	 	       	   </div>
	 	       </div>

	 	    </div>

	     </div>
	     <div class="col-md-4">
	     	<div id="studyreferences">
	 	    <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/img/04.png">
	 	       <div class="caption">
	 	       	   <h3>参考文档</h3>
	 	       	   <p>利用GitBook作为载体，存储各方各面的学习资料，编程语言开发文档。</p>
	 	       	   <p>
	 	       	   	  <a href="#" class="btn btn-success">开始阅读</a>
	 	       	   </p>
	 	       	   <div class="row clearfix">
	 	       	   	  <div class="col-xs-6 column" style="margin-left:-35px;">
	 	       	   	  	<ul class="list-unstyle">
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>

	 	       	   	  	</ul>
	 	       	   	  </div>
	 	       	   	  <div class="col-xs-6 column">
	 	       	   	  	<ul class="list-unstyle">
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>
	 	       	   	  		<li><a href="#">1</a></li>

	 	       	   	  	</ul>
	 	       	   	  </div>
	 	       	   </div>
	 	       </div>

	 	    </div>
	     </div>
	    </div>

	 </div>
	 <!-- lastarticle -->
	 <div class="col-md-12" style="margin-top:50px;">
	 <nav class="navbar navbar-default" role="navigation" >
	 	  <div class="navbar-header">
	 		<a href="#" class="navbar-brand">最新学习内容</a>
	 	  </div>
	    </nav>
	 	<div class="col-md-3">
	 	    <div id="Web前端系列">
	 	        <i class="glyphicon glyphicon-heart" style="float:left;margin-right:10px;"></i>
	 	    	<h4>Web前端系列</h4>
	 	    </div>
	 	    <div id="article1">
	 	    	<tr>
	 	    	<?php
 error_reporting(0); $con = mysql_connect("localhost","root"); if (!$con) { die('Could not connect: ' . mysql_error()); } mysql_select_db('phpwebadmin',$con);mysql_query("set names utf8"); $sql = "select * from html_css where date='2017-3-16'";$result=mysql_query($sql);$row=mysql_fetch_assoc($result); ?>
<tr>
<?php
 while($row=mysql_fetch_assoc($result)){ echo "<pre><tr><td>".$row["type"]."</td> </t><td>".$row["date"]."</td></tr><br></pre>"; } ?>

                </tr>
	 	    </div>
	 	<hr>

	 	</div>
	 	<div class="col-md-3">
	 	    <div id="编程工具系列">
	 	        <i class="glyphicon glyphicon-stats" style="float:left;margin-right:10px;"></i>

	 	    	<h4>编程工具系列</h4>
	 	    </div>
	 	    <div id="article2">
	 	    	<a href="#">关于实现Web前端在线编译</a>
	 	    	<br>
	 	    	<a href="#">关于实现后台语言在线编译</a>
	 	    	<br>

	 	    	<a href="#">使用Docker集成在线编译环境</a>
	 	    	<br>

	 	    	
	 	    </div>

	 	</div>

	 	<div class="col-md-3">
	 	    <div id="后台开发系列">
	 	        <i class="glyphicon glyphicon-flash" style="float:left;margin-right:10px;"></i>

	 	    	<h4>后台开发系列</h4>
	 	    </div>
	 	    <div id="article3">
	 	        <?php
$sql = "select * from javascript order by date desc";$result=mysql_query($sql);$row=mysql_fetch_assoc($result); ?>
<tr>
<?php
 while($row=mysql_fetch_assoc($result)){ echo "<tr><td>".$row["type"]."</td></t><td>".$row["date"]."</td></tr><br>"; } ?>
	 	    </div>
	 	<hr>

	    </div>

	 	<div class="col-md-3">
	 		<div id="后台开发系列">
	 	        <i class="glyphicon glyphicon-education" style="float:left;margin-right:10px;"></i>

	 	    	<h4>算法补充系列</h4>
	 	    </div>
	 	    <div id="article4">
	 	    	Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.
	 	    </div>
	 	<hr>

	 	</div>
	 	<!-- NOtes -->
         <div class="col-md-12" style="margin-top:50px;">
	 <nav class="navbar navbar-default" role="navigation" >
	 	  <div class="navbar-header">
	 		<a href="#" class="navbar-brand">最新公告</a>
	 	  </div>
	    </nav>
	 	<div class="col-md-4">
	 	    
	 	    <div id="article1">
	 	    <tr>
	 	    	<?php
 error_reporting(0); $con = mysql_connect("localhost","root"); if (!$con) { die('Could not connect: ' . mysql_error()); } mysql_select_db('tpadmin',$con);mysql_query("set names utf8"); $sql = "select * from liuyan order by date desc";$result=mysql_query($sql);$row=mysql_fetch_assoc($result); ?>
<tr>
<?php
 echo "<tr><td>".$row["id"]."</td><br><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr>"; ?>

                </tr>
	 	    </div>
	 	<hr>

	 	</div>
	 	

	 	</div>

       </nav>
	 </div>



</div>



	<div class="col-md-12" style="margin-top:100px;background-color: #f1f1f1;bottom: 0px;text-align:center ">
	 		<div style="text-align:center">
	 			<a href="#">免责声明</a>|<a href="#">关于我们</a>
	 		</div>
	 		<br>
	 		<div>
	 			OnlineStudy是基于php+mysql开发的站点。正在完善过程中。
	 			<br>
	 			Copyright &copy 430
	 		</div>
	 	</div>



</body>
</html>