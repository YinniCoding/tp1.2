<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板</title>

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

<div id="page-wrapper">
    
    <div class="row">
        <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">留言板</h2>
                    </div>
                </div>
        </div>
        <div class="col-md-6">
            <!-- <a href="<?php echo U('page/add');?>" class="btn btn-primary">添加单页</a> -->
            <br><br>
        </div>
        <div class="col-md-6">
            <br><br>
            <form action="<?php echo U('Liuyan/index');?>" method="post">
                <div class="form-group input-group">
                    <input type="text" class="form-control" name="key" placeholder="输入用户名或者别名关键词搜索">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-hover table-striped">
        <tbody>
            <thead>
            <tr>
                <th>留言用户</th>
                <th>留言内容</th>
                <th>时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($model)): foreach($model as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["content"]); ?></td>
                <td><?php echo ($v["date"]); ?></td>
                <td><a href="<?php echo U('Liuyan/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n删除后将不能恢复!');">删除</a></td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <?php echo ($page); ?>
</div>

<!-- JavaScript -->
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>