<?php if (!defined('THINK_PATH')) exit();?>
<!--根据浏览器自适应-->
<!--[if IE 6 ]><html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en-us" class="ie8"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->

<html lang="en-us"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>HTML+CSS—Bootstrap教程</title>

    <meta name="description" content="this description">
    <meta name="author" content="ThemeBucket">
    <meta name="copyright" content="ThemeBucket">
    <meta name="generator" content="Documenter v2.0 http://rxa.li/documenter">
    <meta name="date" content="2013-08-24T00:00:00+02:00">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/main.css">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/main.css">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/documenter_style.css">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap.min.css"  media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/iconfont.css" media="screen" title="no title">

<!-- <script src="assets/js/jquery.js"></script> -->
    <!-- jquery.min.js要在bootstrap.min.js之前 -->
    <!--  -->

    <!-- <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery-1.8.2.min.js"></script>
    <!-- <script src="../../assets02/js/jquery.js"></script> -->
    
    <script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/bootstrap.min.js"></script>

    
    
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/google-code-prettify/prettify.js"></script>
    <!-- <script type="text/javascript" src="../../assets02/js/bootstrap.min.js"></script> -->

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
                  <a class="navbar-brand active" href="index.php" style="margin-left:30px;margin-right:120px;">OnlineStudy</a>
                  <!-- <a href="#documenter_cover" id="documenter_logo">
                <img src="assets/css/img/icon1.png" alt="">
            </a> -->
               </div>
               <!-- 导航条标识头 -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                  <ul class="nav navbar-nav" id="title" style="font-family:微软雅黑;">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('Page/GeneralCourse');?>">在线学习</a></li>
                    
                    <li><a href="#">编程工具</a></li>
                    <li><a href="#">知识测验</a></li>
                    <li><a href="../liuyan.php">留言板</a></li>

                    <li><a href="#">联系我们</a></li>
                  </ul>
                  <form class="navbar-form navbar-right" role="search" style="color:#adadad;font-size: 1.0em;font-family:"微软雅黑";">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" style="height: 26px; background-color:ghostwhite;float:left;">
                    </div>
                  <!--<button type="submit" class="btn ">Submit</button>-->
                    <span type="submit" class="glyphicon glyphicon-search" style="padding: 0.7em 0.2em;"></span>
                    <?php
 session_start(); if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { echo "当前用户：".$_SESSION['username']; ?> <a href="../../login.php">退出</a><?php
}else{ echo "你还没有登录，<a href='../../login.php'>请先登录</a>"; } ?>
                    <!-- <a href="#" class="" style="margin-left: 4em;font-size:16px;">登录</a>/<a href="#" class="" style="font-size:16px;">注册   </a> -->
                  </form>
                </div>
            </div>    
                 
</nav>
<!-- mainpart -->
<div class="container" style="margin-top:150px;">
        <!-- navabar -->
        <div class="col-md-12">
            <nav class="navbar navbar-default" role="navigation" data-toggle="collapse" style="margin:1px;">
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                    </button> -->
                    <a href="#" class="navbar-brand">HTML+CSS</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                    <ul class="nav navbar-nav" style="margin-left:160px;">
                      <li class="htmlli"><a href="<?php echo U('Page/html5');?>">HTML5教程</a></li>
                      <li><a href="<?php echo U('Page/css3');?>" class="htmlli">CSS3教程</a></li>
                      <li><a href="<?php echo U('Page/bootstrap');?>" class="htmlli">Bootstrap教程</a></li>
                      <li class="active"><a href="<?php echo U('Page/foundation');?>" class="htmlli">Foundation教程</a></li>

                    </ul>
                </div>
            </nav>
        </div>
        <!-- content -->
        <div class="col-md-3">
           <ul class="" id="documenter_nav">
                  <li><h5><a href="#html5基础知识">Foundation5起步</a></h5></li>
                  <li><h5><a href="#html5新元素特性">Foundation5文本</a></h5></li>
                  <li><h5><a href="#html5Canvas">Foundation5表格</a></h5></li>
                  <li><h5><a href="#html5表单元素及属性">Foundation5按钮</a></h5></li>
                  <li><h5><a href="#html5内联SVG">Foundation5图标</a></h5></li>
                  <li><h5><a href="#html5video">Foundation5侧边栏</a></h5></li>
                  <li><h5><a href="#html5Audio">Foundation5滑动导航</a></h5></li>
                  <li><h5><a href="#html5WebSQL">Foundation5提示框</a></h5></li>
                  <li><h5><a href="#html5WebSocket">Foundation5均衡器</a></h5></li>
                  <li><h5><a href="#css3media">Foundation5网络系统</a></h5></li>
            
              </ul>
            </li>
            <!-- <li><a href="#JAVA" title="JAVA"><h5>JAVA</h5></a></li> -->
        </ul>
        </div>
        <div class="col-md-9">
        <<section id="html5jc">

            <div class="title">
                <p>Foundation5教程</p>
            </div>
            <div class="contant">
                <h4>

                CSS 用于控制网页的样式和布局。<br><br>
                CSS3 是最新的 CSS 标准。<br><br>
                本教程向您讲解 CSS3 中的新特性。<br><br>
                </h4>
            </div>
            <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5基础知识">
                  <div id="htmltitle">
                    <h4>Foundation5起步</h4>
                  </div>

                  <div id="htmlcontent">
                      <tr>

                        <?php
 error_reporting(0); $con = mysql_connect("localhost","root"); if (!$con){ die('Could not connect: ' . mysql_error()); } mysql_select_db('phpwebadmin',$con); mysql_query("set names utf8"); $sql = "select * from html_css where type='css' && id = '2'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); ?>
                        <tr>
                        <?php
 echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>

                </tr>


                  </div>

                </div>

                <!-- <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div> -->

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5新元素特性">
                  <div id="htmltitle">
                    <h4>Foundation5文本</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type = 'css' && id = '3'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>



                  </div>

                </div>

                <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div>

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5Canvas">
                  <div id="htmltitle">
                    <h4>Foundation5表格</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type = 'css' && id = '4'"; $result=mysql_query($sql); $row1=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row1["content"]."</td><hr><td>".$row1["date"]."</td></tr></h4></pre>"; ?>



                  </div>

                </div>

                <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div>

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5表单元素及属性">
                  <div id="htmltitle">
                    <h4>Foundation5按钮</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type='css' id = '5'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>



                  </div>

                </div>

                <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div>

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5内联SVG">
                  <div id="htmltitle">
                    <h4>Foundation5图标</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type='css' id = '6'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>



                  </div>


                </div>

                <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div>

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5video">
                  <div id="htmltitle">
                    <h4>Foundation5侧边栏</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type='css' id = '7'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>



                  </div>


                </div>

                <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div>

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5Audio">
                  <div id="htmltitle">
                    <h4>Foundation5滑动导航</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type='css' id = '8'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>



                  </div>


                </div>

                <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div>

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5WebSQL">
                  <div id="htmltitle">
                    <h4>Foundation5提示框</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type='css' id = '9'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>



                  </div>


                </div>

                <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div>

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="html5WebSocket">
                  <div id="htmltitle">
                    <h4>Foundation5均衡器</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type='css' id = '10'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>



                  </div>


                </div>

                <div class="mainbody">
                </div>
                <div class="but">
                    <button type="button" class="btn btn-success btn-lg"><a href="FontEnd/htmlCompile/index.html">尝试一下</a></button>
                </div>

              </div>
              <div class="Tutorial">
                <!-- <div class="shili">
                    <p>正文</p>
                </div> -->
                <div id="css3media">
                  <div id="htmltitle">
                    <h4>Foundation5网络系统</h4>
                  </div>
                  <div id="htmlcontent">

                        <?php
 $sql = "select * from html_css where type='css' id = '11'"; $result=mysql_query($sql); $row=mysql_fetch_assoc($result); echo "<pre><h4><tr><td>".$row["content"]."</td><hr><td>".$row["date"]."</td></tr></h4></pre>"; ?>



                  </div>


                </div>


        </section>
        </div>    
        <div class="col-md-3"></div>
        <div class="col-md-9">
        <ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li ><a href="../../html-html5.php">1</a></li>
  <li><a href="css3.php">2</a></li>
  <li><a href="bootstrap.php">3</a></li>
  <li class="active"><a href="foundation.php">4</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
            <div class="ds-share" data-thread-key="Foundation" data-title="【Learn HTML5】——Foundation" data-images="此处请替换为分享时显示的图片的链接地址" data-content="此处请替换为分享时显示的内容" data-url="此处请替换为分享时显示的链接地址 " style="margin-top: 50px; margin-left: px; ">
    <div class="ds-share-inline">
      <ul  class="ds-share-icons-16">
        
        <li data-toggle="ds-share-icons-more"><a class="ds-more" href="javascript:void(0);">分享到：</a></li>
        <li><a class="ds-weibo" href="javascript:void(0);" data-service="weibo">微博</a></li>
        <li><a class="ds-qzone" href="javascript:void(0);" data-service="qzone">QQ空间</a></li>
        <li><a class="ds-qqt" href="javascript:void(0);" data-service="qqt">腾讯微博</a></li>
        <li><a class="ds-wechat" href="javascript:void(0);" data-service="wechat">微信</a></li>
        
      </ul>
      <div class="ds-share-icons-more">
      </div>
    </div>
 </div>
<!-- 多说评论框 start -->
  <div class="ds-thread" data-thread-key="Foundation" data-title="【Learn HTML5】——Fundation" data-url="#" style="margin-top:10px;margin-bottom:200px;"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"yinnicoding"};
  (function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] 
     || document.getElementsByTagName('body')[0]).appendChild(ds);
  })();
  </script>
<!-- 多说公共JS代码 end -->
        </div>
         
            
        </div>
     
</div>
<div class="col-md-12">
 <button><img class="back-to-top" src="../../assets/img/returntop.png" style="margin-right:15px;"></button>
    
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
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/js2/jquery.min.js"></script>
<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/main.js"></script>
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery.js"></script>
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery.scrollTo.js"></script>
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery.easing.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    exports($("#c1"));
</script>
    
</html>
<!-- <p>
                    BucketAdmin uses Open Sans and Lato font from google fonts. The font imported in main css file: <code class="code-format">css/style.css</code>
                </p>
                    <pre class="prettyprint lang-html linenums">

        <!- <pre class="css">

        /* Import fonts */
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic);
        @import url(http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic);
        </pre> -->
<!-- </pre> -->