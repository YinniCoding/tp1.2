<?php if (!defined('THINK_PATH')) exit();?>
<!--根据浏览器自适应-->
<!--[if IE 6 ]><html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en-us" class="ie8"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->
<html lang="en-us"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>OnlineStudy—在线学习</title>

    <meta name="description" content="this description">
    <meta name="author" content="ThemeBucket">
    <meta name="copyright" content="ThemeBucket">
    <meta name="generator" content="Documenter v2.0 http://rxa.li/documenter">
    <meta name="date" content="2013-08-24T00:00:00+02:00">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap.min.css"  media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/iconfont.css" media="screen" title="no title">

    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/bootstrap.min.js"></script>
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/google-code-prettify/prettify.js"></script>
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/jquery.js"></script>
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
                    <li><a href="<?php echo U('Index/index');?>"  >首页</a></li>
                    <li class="active"><a href="<?php echo U('Page/GeneralCourse');?>">在线学习</a></li>

                    <li><a href="<?php echo U('Compile/all');?>">编程工具</a></li>
                    <li><a href="#">知识测验</a></li>
                    <li><a href="<?php echo U('Page/liuyan');?>">留言板</a></li>

                    <li><a href="#">联系我们</a></li>
                  </ul>
                  <form class="navbar-form navbar-right" role="search" style="color:#adadad;font-size: 1.0em;font-family:"微软雅黑";">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" style="height: 26px; background-color:ghostwhite;float:left;">
                    </div>
                  <!--<button type="submit" class="btn ">Submit</button>-->
                    <span type="submit" class="glyphicon glyphicon-search" style="padding: 0.7em 0.2em;"></span>
                    <?php
 if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { echo "当前用户：".$_SESSION['username']; ?> <a href="<?php echo U('Login/logout');?>">退出</a><?php
}else{ echo "你还没有登录，<a href='login.php'>请先登录</a>"; } ?>

                    <!-- <a href="#" class="" style="margin-left: 4em;font-size:16px;">登录</a>/<a href="#" class="" style="font-size:16px;">注册   </a> -->
                  </form>
                </div>
            </div>

</nav>
<!-- mainpart -->
<div class="container" style="margin-top:100px;">
        <!-- navabar -->
        <div class="col-md-12" style="">
            <nav class="navbar navbar-default" role="navigation" data-toggle="collapse" >
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                    </button> -->
                    <a href="#" class="navbar-brand">在线教程</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="dropdown"  role="menu" aria-labelledby="dropdownMenu">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            HTML+CSS
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="html-html5.php">HTML5教程</a></li>
                             <li>  <a href="FontEnd/html/css3.php">CSS3教程</a></li>
                             <li>  <a href="FondEnd/html/bootstrap.php">Bootstrap教程</a></li>
                              <li> <a href="FontEnd/html/foundation.php">Fountation教程</a>
                            </li>
                         </ul>
                      </li>
                      <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            JAVASCRIPT
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu">
                            <li>
                               <a href="#">JavaScript基础教程</a>
                               <a href="#">JavaScript Dom教程</a>
                               <a href="#">JQuery教程</a>
                               <a href="#">Ajax教程</a>
                               <a href="#">Json教程</a>
                               <a href="#">Vue.js教程</a>
                            </li>
                         </ul>
                      </li>
                      <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            JAVA
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu">
                            <li>
                               <a href="#">JAVA基础教程</a>
                               <a href="#">JSP教程</a>
                               <a href="#">MVC思想</a>
                               <a href="#">Java Spring框架教程</a>
                               <a href="#">Java Structs框架教程</a>
                               <a href="#">Java Hibernate框架教程</a>
                            </li>
                         </ul>
                      </li>
                      <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            PHP
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu">
                            <li>
                               <a href="#">php基础教程</a>
                               <a href="#">mysql教程</a>
                               <a href="#">thinkphp</a>
                               <a href="#">laravel框架教程</a>
                            </li>
                         </ul>
                      </li>
                      <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            PYTHON
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu">
                            <li>
                               <a href="#">python3基础教程</a>
                               <a href="#">Django框架教程</a>
                               <a href="#">tScrapy爬虫</a>
                               <a href="#">flask web框架教程</a>
                            </li>
                         </ul>
                      </li>
                      <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            C++
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu">
                            <li>
                               <a href="#">C++基础教程</a>
                               <a href="#">STL使用</a>
                               <a href="#"></a>
                               <a href="#"></a>
                            </li>
                         </ul>
                      </li>

                      <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            XML
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu">
                            <li>
                               <a href="#">xml基础教程</a>
                               <a href="#">rss教程</a>
                               <a href="#">svg教程</a>
                               <a href="#"></a>
                            </li>
                         </ul>
                      </li>
                      <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            网站建设
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu">
                            <li>
                               <a href="#">http教程</a>
                               <a href="#">Web服务器</a>
                               <a href="#">TCP/IP</a>
                               <a href="#"></a>
                            </li>
                         </ul>
                      </li>
                      <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            算法系列
                            <strong class="caret"></strong>
                         </a>
                         <ul class="dropdown-menu">
                            <li>
                               <a href="#"></a>
                               <a href="#">Web服务器</a>
                               <a href="#">TCP/IP</a>
                               <a href="#"></a>
                            </li>
                         </ul>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- content -->
        <!-- html+css -->
        <div class="col-md-12" style="margin-top:50px;">
           <div class="col-md-12">
             <div id="part1" >
               <h4>HTML+CSS</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="<?php echo U('Page/html5');?>">
                      <div id="html5_title">
                      【Learn HTML5】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/html5.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>Html5是最新一代的html标准.</h5>
                     </div>

                    </a>
                    
                  </div>
              </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    
                    <a href="<?php echo U('Page/css3');?>">
                       <div id="html5_title">
                         【Learn CSS】
                       </div>
                       <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/css.png" >
                     </div>
                     <div class="html5_text">
                     <h5>层叠样式表（Cascading).</h5>
                     </div>
                    </a>
                    
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="<?php echo U('Page/bootstrap');?>">
                      <div id="html5_title">
                      【Learn Bootstrap】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/bootstrap.png" >
                     </div>
                     <div class="html5_text">
                     <h5>Bootstrap 来自Twitter,目前最受欢迎的前端框架</h5>
                     </div>
                      </div>
                    </a>
                    

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="<?php echo U('Page/foundation');?>">
                      <div id="html5_title">
                      【Learn Foundation】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/foundation.png" >
                     </div>
                     <div class="html5_text">
                     <h5>Foundation 用于开发响应式的 HTML, CSS and JavaScript框架</h5>
                     </div>
                    </a>
                    
                  </div>

               </div>
             </div>

           </div>

        </div>
        <!-- JavaScript -->
         <div class="col-md-12" style="margin-top:50px;">
           <div class="col-md-12">
             <div id="html+css">
               <h4>JAVASCRIPT</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                     <a href="FontEnd/javascript/javascript.php">
                       <div id="html5_title">
                      【Learn JavaScript】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/js.png" >
                     </div>
                     <div class="html5_text">
                     <h5>javascript是web编程语言</h5>
                     </div>
                     </a>
                    
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="FontEnd/javascript/JavascriptDom.php">
                      <div id="html5_title">
                      【Learn DOM】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/dom.png" >
                     </div>
                     <div class="html5_text">
                     <h5>HTML DOM定义了访问和操作HTML文档的标准方法</h5>
                     </div>
                    </a>
                    
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="FontEnd/javascript/JQuery.php">
                      <div id="html5_title">
                      【Learn jQuery】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/jquery.png" >
                     </div>
                     <div class="html5_text">
                     <h5>jQuery是一个javascript库</h5>
                     </div>
                    </a>
                    
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="FontEnd/javascript/Ajax.php">
                      <div id="html5_title">
                      【Learn AJAX】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/ajax.png" >
                     </div>
                     <div class="html5_text">
                     <h5>AJAX = Asynchronous JavaScript and XML（异步的 JavaScript 和 XML）。</h5>
                     </div>
                    </a>
                    
                  </div>
               </div>

               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="FontEnd/javascript/json.php">
                       <div id="html5_title">
                      【Learn JSON】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/json.png" >
                     </div>
                     <div class="html5_text">
                     <h5>JSON 是存储和交换文本信息的语法。类似 XML。</h5>
                     </div>
                    </a>
                    
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                     <a href="FontEnd/javascript/Vuejs.php">
                        <div id="html5_title">
                      【Learn Vue.js】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/vue.png" >
                     </div>
                     <div class="html5_text">
                     <h5>Vue.js是一套构建用户界面的渐进式框架</h5>
                     </div>
                     </a>
                    
                  </div>
               </div>

             </div>

           </div>

        </div>
        <!-- JAVA -->
        <div class="col-md-12" style="margin-top:50px;">
           <div class="col-md-12">
             <div id="html+css">
               <h4>JAVA</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Java】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/java.png" >
                     </div>
                     <div class="html5_text">
                     <h5>目前独占鳌头的高级程序设计语言</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn JSP】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/jsp.png" >
                     </div>
                     <div class="html5_text">
                     <h5>中文名叫java服务器页面，其根本是一个简化的Servlet设计。</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn MVC设计模式】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/mvc.png" >
                     </div>
                     <div class="html5_text">
                     <h5>MVC全名是Model View Controller，是模型(model)－视图(view)－控制器(controller)的缩写</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Struts】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/xlink.png" >
                     </div>
                     <div class="html5_text">
                     <h5>基于MVC的充当了其中的试图层和控制器</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Hibernate】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/hiber.png" >
                     </div>
                     <div class="html5_text">
                     <h5>做持久化的,对JDBC轻量级的封装,使得我们能过面向对象的操作数据库</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Spring】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/spring.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>采用了控制反转的技术,管理Bean,降低了各层之间的耦合</h5>
                     </div>
                  </div>

               </div>

             </div>

           </div>

        </div>

        <!-- PHP -->
        <div class="col-md-12" style="margin-top:50px;" >
           <div class="col-md-12">
             <div id="html+css">
               <h4>PHP</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn PHP】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/php.png" >
                     </div>
                     <div class="html5_text">
                     <h5>后台开发语言</h5>
                     </div>
                  </div>
              </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn PHP数据库】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/mysql.png" >
                     </div>
                     <div class="html5_text">
                     <h5>学习如何和数据库连接</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Thinkphp】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/thinkphp.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>国人开发的phpWeb框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn lavarel】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/laveral.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>目前最受欢迎的PHP Web框架</h5>
                     </div>
                  </div>
               </div>


             </div>

           </div>
        </div>

<!-- python -->
        <div class="col-md-12" style="margin-top:50px;padding: 0; ">
           <div class="col-md-12">
             <div id="html+css">
               <h4>Python</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Python】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/python.png" >
                     </div>
                     <div class="html5_text">
                     <h5>面向对象的解释型计算机程序设计语言，具有丰富和强大的库。它常被昵称为胶水语言</h5>
                     </div>
                  </div>
              </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Python爬虫】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/pac.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>爬虫是一种自动获取网页内容的程序。而python在数据挖掘方面更是一绝</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Scrapy爬虫框架】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/scrapy.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>目前功能较为完善的爬虫框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn flask web开发】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/falsk.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>Python微型的web框架</h5>
                     </div>
                  </div>
               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Django框架】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/django.png" >
                     </div>
                     <div class="html5_text">
                     <h5>目前最受欢迎的python Web框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn 正则表达式】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/regexp.png" >
                     </div>
                     <div class="html5_text">
                     <h5>正则表达式是对字符串操作的一种逻辑公式，用来表达对字符串的一种过滤逻辑。</h5>
                     </div>
                  </div>
               </div>
<!-- c++ -->
 <div class="col-md-12" style="margin-top:50px;padding: 0; ">
           <div class="col-md-12">
             <div id="html+css">
               <h4>C++</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Python】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/python.png" >
                     </div>
                     <div class="html5_text">
                     <h5>面向对象的解释型计算机程序设计语言，具有丰富和强大的库。它常被昵称为胶水语言</h5>
                     </div>
                  </div>
              </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Python爬虫】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/pac.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>爬虫是一种自动获取网页内容的程序。而python在数据挖掘方面更是一绝</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Scrapy爬虫框架】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/scrapy.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>目前功能较为完善的爬虫框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn flask web开发】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/falsk.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>Python微型的web框架</h5>
                     </div>
                  </div>
               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Django框架】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/django.png" >
                     </div>
                     <div class="html5_text">
                     <h5>目前最受欢迎的python Web框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn 正则表达式】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/regexp.png" >
                     </div>
                     <div class="html5_text">
                     <h5>正则表达式是对字符串操作的一种逻辑公式，用来表达对字符串的一种过滤逻辑。</h5>
                     </div>
                  </div>
               </div>
<!-- XML -->
 <div class="col-md-12" style="margin-top:50px;padding: 0; ">
           <div class="col-md-12">
             <div id="html+css">
               <h4>XML</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Python】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/python.png" >
                     </div>
                     <div class="html5_text">
                     <h5>面向对象的解释型计算机程序设计语言，具有丰富和强大的库。它常被昵称为胶水语言</h5>
                     </div>
                  </div>
              </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Python爬虫】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/pac.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>爬虫是一种自动获取网页内容的程序。而python在数据挖掘方面更是一绝</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Scrapy爬虫框架】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/scrapy.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>目前功能较为完善的爬虫框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn flask web开发】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/falsk.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>Python微型的web框架</h5>
                     </div>
                  </div>
               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Django框架】
                    </div>
                    <div id="html5_img">












                    
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/django.png" >
                     </div>
                     <div class="html5_text">
                     <h5>目前最受欢迎的python Web框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn 正则表达式】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/regexp.png" >
                     </div>
                     <div class="html5_text">
                     <h5>正则表达式是对字符串操作的一种逻辑公式，用来表达对字符串的一种过滤逻辑。</h5>
                     </div>
                  </div>
               </div>
<!-- 网站建设 -->
 <div class="col-md-12" style="margin-top:50px;padding: 0; ">
           <div class="col-md-12">
             <div id="html+css">
               <h4>网站建设</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Python】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/python.png" >
                     </div>
                     <div class="html5_text">
                     <h5>面向对象的解释型计算机程序设计语言，具有丰富和强大的库。它常被昵称为胶水语言</h5>
                     </div>
                  </div>
              </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Python爬虫】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/pac.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>爬虫是一种自动获取网页内容的程序。而python在数据挖掘方面更是一绝</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Scrapy爬虫框架】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/scrapy.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>目前功能较为完善的爬虫框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn flask web开发】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/falsk.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>Python微型的web框架</h5>
                     </div>
                  </div>
               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Django框架】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/django.png" >
                     </div>
                     <div class="html5_text">
                     <h5>目前最受欢迎的python Web框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn 正则表达式】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/regexp.png" >
                     </div>
                     <div class="html5_text">
                     <h5>正则表达式是对字符串操作的一种逻辑公式，用来表达对字符串的一种过滤逻辑。</h5>
                     </div>
                  </div>
               </div>
<!-- 算法系列 -->
 <div class="col-md-12" style="margin-top:50px;padding: 0; ">
           <div class="col-md-12">
             <div id="html+css">
               <h4>算法系列</h4>
               <hr>
             </div>
             <div class="row">
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="<?php echo U('Page/cppsuanfa1');?>">
                      <div id="html5_title">
                         【c++ 算法总述】
                      </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/" >
                     </div>
                     <div class="html5_text">
                     <h5>总述</h5>
                     </div>
                    </a>
                    
                  </div>
              </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="<?php echo U('Page/cppsuanfa2');?>">
                      <div id="html5_title">
                      【c++ 排序算法总结】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/" >
                     </div>
                     <div class="html5_text">
                     <h5>常见排序算法总结</h5>
                     </div>
                    </a>
                    
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <a href="<?php echo U('Page/cppsuanfa3');?>">
                        <div id="html5_title">
                      【c++ 类和继承总结】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/scrapy.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>作为c++最为重要的概念，需要十分清楚</h5>
                     </div>
                    </a>
                    
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【C++ STL简介】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/falsk.jpg" >
                     </div>
                     <div class="html5_text">
                     <h5>c++的标准模板库。</h5>
                     </div>
                  </div>
               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn Django框架】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/django.png" >
                     </div>
                     <div class="html5_text">
                     <h5>目前最受欢迎的python Web框架</h5>
                     </div>
                  </div>

               </div>
               <div class="col-md-4" style="padding:0;width:8%;">


               </div>
               <div class="col-md-4" style="padding:0;margin-top:30px;">
                  <div id="html5" style="background-color: #f1f1f1; ">
                    <div id="html5_title">
                      【Learn 正则表达式】
                    </div>
                    <div id="html5_img">
                      <img src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/img/regexp.png" >
                     </div>
                     <div class="html5_text">
                     <h5>正则表达式是对字符串操作的一种逻辑公式，用来表达对字符串的一种过滤逻辑。</h5>
                     </div>
                  </div>
               </div>
</div>
</div>
</div>
</div>
</div>

       <!-- ＰＨＰ -->






</body>
<div class="col-md-12" style=" margin-top:100px;background-color: #f1f1f1;bottom: 0px;text-align:center;padding: 0;  ">
            <div style="text-align:center">
                <a href="#">免责声明</a>|<a href="#">关于我们</a>
            </div>
            <br>
            <div>
                OnlineStudy是基于Thinkphp 3.2.3开发的站点。正在完善过程中。
                <br>
                Copyright &copy 430
            </div>
</div>
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/js2/jquery.min.js"></script>
<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/main.js"></script>
<script type="text/javascript">
    exports($("#c1"));
</script>

</html>