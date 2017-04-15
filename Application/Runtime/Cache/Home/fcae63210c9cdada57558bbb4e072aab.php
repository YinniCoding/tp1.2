<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   	<title>C 在线编译工具</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel="canonical" href="https://c.runoob.com/compile/1" />
<meta name="keywords" content="PHP 在线工具">
<meta name="description" content="PHP Hello实例！..">
   
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
    <link href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

    <!--[if lt IE 9]>
        <script src="//apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
        <script src="//apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    <!-- PHP 代码 -->
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/css/style.css?version=1.02"> 
   

<!-- codemirror代码高亮 -->
<link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/lib/codemirror.css">  
<link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/lib/util/simple-hint.css">  
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/lib/codemirror.js"></script>  
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/lib/util/simple-hint.js"></script>  
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/util/javascript-hint.js"></script>  
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/codemirror-5.2/mode/javascript/javascript.js"></script>  
<!-- jQuery -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/bootstrap.min.js"></script>
<!--
	generated 2510 seconds ago
	generated in 0.316 seconds
	served from batcache in 0.010 seconds
	expires in 1090 seconds
-->
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
                    <li><a href="../../../index.php"  >首页</a></li>
                    <li class="active"><a href="../../../index02.php">在线学习</a></li>

                    <li><a href="#">编程工具</a></li>
                    <li><a href="#">知识测验</a></li>
                    <li><a href="../../../FontEnd/liuyan.php">留言板</a></li>

                    <li><a href="#">联系我们</a></li>
                  </ul>
                  <form class="navbar-form navbar-right" role="search" style="color:#adadad;font-size: 1.0em;font-family:"微软雅黑";">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" style="height: 26px; background-color:ghostwhite;float:left;">
                    </div>
                  <!--<button type="submit" class="btn ">Submit</button>-->
                    <span type="submit" class="glyphicon glyphicon-search" style="padding: 0.7em 0.2em;"></span>
                    <!-- <a href="#" class="" style="margin-left: 4em;font-size:16px;">登录</a>/<a href="#" class="" style="font-size:16px;">注册   </a> -->
                  </form>
                </div>
            </div>

</nav>
<div class="container">

	

<style>
.CodeMirror {
	    height: 374px;
}
</style>
<br>
<div class="row">

	<div class="col-md-12" style="margin-left:0px;">
		<div class="panel panel-default">
					<div id="compiler" class="panel-heading">
			<form class="form-inline" role="form">
				 <!-- <button type="button" class="btn btn-success" id="submitBTN" style="margin-right:12px;"><i class="glyphicon glyphicon-send"></i> 点击运行</button> -->
				 
				<select class="form-control" id="sel1">
            <option  value="">HTML 在线工具</option>         
				    <option  value="">Java 在线工具</option>
            <option  value="">PHP 在线工具</option>	
            <option  value="">C++ 在线工具</option>    
            <option  value="" selected="selected">C 在线工具</option>         


        </select>
			  	<!--
				 <label class="pull-right"><strong style="font-size: 16px"><i class="fa fa-cogs"></i> PHP 在线工具</strong></label>
				-->
			</form>
			</div>
			<div class="panel-body">
			<form role="form" id="compiler-form" action="" method="POST">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-7">
                    <textarea class="form-control"  id="code" name="code" rows="18"></textarea>
                    <script type="text/javascript">
                      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {  
                      lineNumbers: true,  
                      extraKeys: {"Ctrl-Space": function(cm) {CodeMirror.simpleHint(cm, CodeMirror.javascriptHint);}}  
                         });  
                      $(".CodeMirror-scroll").hover(function(){  
                      $(this).get(0).style.cursor = "text";  
                      });  
                      </script>
<button type="submit"  class="btn btn-success" id="submitBTN" style="margin-right:12px;"><i class="glyphicon glyphicon-send"></i> 点击运行</button>
                  </div>
<?php
error_reporting(0); $str = $_POST['code']; $file="D:/yinni/WAMP/wamp/www/phpwebadmin/OS(__1.0)/Backend/compileSet/c/c_code.c"; $fp=fopen($file,"w");fwrite($fp,$str);fclose($fp); exec("cl c_code.c",$output,$return_val); exec("c_code.exe",$output1,$return_val1); ?> 

                  <div class="col-md-5">
                    <textarea placeholder="" value="" class="form-control" id="compiler-textarea-result" rows="18">
                      <?php  while ($color=each($output1)) { echo $color['value']; } ?>
                    </textarea>
                    <!-- <script>setTimeout(function(){window.location.href='java.php';},5000);</script> -->
                  </div>
                </div>
              </div>
             
             
            </form>
          
<script type="text/javascript">

// $("#compiler-textarea-result").val(<?php $result[0] ?>);
</script>

			</div>
		</div>
	</div>
	<!--
	<div class="col-md-12">
	
		<div id="about" class="panel panel-default">
			<div class="panel-heading">概述</div>
			<div class="panel-body">
			内容
			</div>
        </div>
        
	    <div id="author" class="panel panel-default">
			<div class="panel-body">
              <p>该实例由 <a target="_blank" href="http://www.runoob.com/">菜鸟教程</a> 整理。</a></p>
			</div>
		</div>
	</div>
	-->
</div>
<script>
// var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
// 	lineNumbers: true,
// 	matchBrackets: true,
// 	mode: "application/x-httpd-php",
// 	indentUnit: 4,
// 	indentWithTabs: true,
// });
$("#submitBTN").click(function() {
	loadingdata = '程序正在运行中……';
	$("#compiler-textarea-result").val(loadingdata);
  
	code = editor.getValue();
  
	runcode = 3;
	$.post("http://localhost/phpcompile.php",{code:code,language:runcode},function(data){
		if(runcode==18) {
			data.output = data.output.replace("Free Pascal Compiler version 2.6.2-8 [2014/01/22] for x86_64\nCopyright (c) 1993-2012 by Florian Klaempfl and others\n", "");
			data.errors = data.errors.replace("/usr/bin/ld.bfd: warning: /usercode/link.res contains output sections; did you forget -T?\n", "");
		}
		data.output = $.post("http://localhost/phpcompile.php",code);
		$("#compiler-textarea-result").val(data.output);
	});
});

$(function(){
  // bind change event to select
  $('#sel1').on('change', function () {
      var url = $(this).val(); // get selected value
      if (url) { // require a URL
          window.location = url; // redirect
      }
      return false;
  });
});

</script>

<hr>
<!-- Footer -->
<footer>
	<div class="row">
		<div class="col-md-12" style="margin-left:0px;">
			<p>Copyright &copy; <a href="#">OnlineStudy(OS_1.0)</a> 2017</p>
		</div>
	</div>
</footer>

</div>
<div style="display:none;">
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/php1.js" language="JavaScript"></script>
</div>
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/compileassets/assets/js/bootstrap.min.js"></script>

</body>

</html>