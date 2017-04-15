<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OnlineStudy——登录界面</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.4 -->
<link href="/ThinkphpOS_1.1/Public/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="/ThinkphpOS_1.1/Public/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- iCheck -->
<link href="/ThinkphpOS_1.1/Public/adminlte/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style type="text/css">
body{font-family:"Microsoft Yahei",verdana, helvetica, arial, sans-serif;}
.verify{position:absolute;top:0px;right:0px;cursor:pointer;}
</style>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="">OnlineStudy</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">账号登录</p>
        <form action="<?php echo U('login/login');?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="用户名" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="密码" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="verify" class="form-control" placeholder="验证码" style="width:200px;" />
                <span class="glyphicon glyphicon-qrcode form-control-feedback" style="right:120px;"></span>
                <a href="javascript:void(0)"><img class="verify" src="<?php echo U('login/verify');?>" alt="点击刷新"/>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" value="1"> 记住我
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div><!-- /.col -->
            </div>
            
        </form>

        <a href="#">忘记密码</a>　|　
        <a href="<?php echo U('Login/register');?>" class="text-center">注册新用户</a>
        <div class="row">
                <div class="col-xs-12">
                    <br>
                    第三方登录
                    <a href="<?php echo U('login/login?type=qq');?>">QQ</a>
                    <a href="<?php echo U('login/login?type=sina');?>">新浪微博</a>
                    <a href="<?php echo U('login/login?type=weixin');?>">微信</a>
                    <a href="<?php echo U('login/login?type=renren');?>">人人网</a>
                    <a href="<?php echo U('login/login?type=github');?>">Github</a>
                </div>
            </div>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="/ThinkphpOS_1.1/Public/adminlte/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/ThinkphpOS_1.1/Public/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="/ThinkphpOS_1.1/Public/adminlte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
<script>
    $(function(){
        $(".verify").click(function(){
            var src = "<?php echo U('login/verify');?>";
            var random = Math.floor(Math.random()*(1000+1));
            $(this).attr("src",src+"&random="+random);

        });
    })
</script>
</body>
</html>