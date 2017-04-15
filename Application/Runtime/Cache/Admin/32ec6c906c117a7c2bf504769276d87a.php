<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>OnlineStudy(1.1)——后台管理系统</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[title]</title>

    <!-- Bootstrap core CSS -->
    <link href="/ThinkphpOS_1.1/Application/Admin/View//Public/static/css/bootstrap.css" rel="stylesheet">
    <link href="/ThinkphpOS_1.1/Application/Admin/View//Public/static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/ThinkphpOS_1.1/Application/Admin/View//Public/static/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Admin/View//Public/static/font-awesome/css/font-awesome.min.css">
    <style type="text/css">
        body{
            background:#f0f0f0;
        }
        #colmd0{
            margin-top: 3%;
            margin-bottom: 20px;
            background-color: #f0f0f0;
        }
        #colmd0 h2{
            color:#444;
            text-align: center;
            /*font-family: 微软雅黑;*/
        }
        #colmd1{
            background-color:white;
            padding-top: 30px;
            padding-bottom: 35px;
            padding-left: 25px;
            padding-right: 35px;
        }
        #exampleInputCode{
            float: left;
        }
        .col-xs-4{
            
            padding-left: 0px;
            /*float: left;*/
        }
        .col-xs-4 button{
            width: 4.5em;
        }
    </style>
</head>
<body>

<div class="container">
        <div class="col-md-4 col-md-offset-4" id="colmd0">
            <h2><b>后台管理系统</b></h2>
        </div>
        <div class="col-md-4 col-md-offset-4" id="colmd1">

            <form action="<?php echo U('login/login');?>" method="post" >
                <div class="form-group has-feedback">
                    <label for="exampleInputUser">用户名</label>
                    <input type="text" name="username" class="form-control"  placeholder="用户名">
                    <span class="glyphicon glyphicon-user form-control-feedback" style="right:10px;"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword">密码</label>
                    <input type="password" name="password" class="form-control" placeholder="密码">
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="right:10px;"></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputCode">验证码</label>
                    <div class="row">
                        <div class="col-md-7">
                            <input type="text"  name="verify" class="form-control" id="exampleInputCode" placeholder="验证码">
                             <span class="glyphicon glyphicon-qrcode form-control-feedback" style="right:30px;"></span>
                        </div>
                        <div class="col-md-5">
                            <a href="javascript:void(0)"><img class="verify" src="<?php echo U('login/verify');?>" alt="点击刷新"/></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
                <!-- <button type="submit" class="btn btn-primary btn-flat">登录</button> -->
            </form>
        </div>
</div>
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
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