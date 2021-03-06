<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>编辑文章</title>

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
    <div class="col-md-12" style="padding: 0; ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">修改文章</h2>
                    </div>
                </div>
        </div>
    <form method="post" action="<?php echo U('post/update?id='); echo ($category["id"]); ?>">
        <div class="form-group">
            <label for="post-title">文章标题</label>
            <input type="text" name="title" class="form-control" value="<?php echo ($post["title"]); ?>" id="post-title" placeholder="输入文章标题">
        </div>
        <div class="form-group">
            <label for="post-cate">文章分类</label>
            <select name="cate_id" id="post-cate" class="form-control">
                <?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($post['cate_id'] == $v['id']) {echo 'selected="selected"' ;}?>><?php echo ($v["html"]); ?> <?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="post-content">文章内容</label>
            <script id="post-content" name="content" type="text/plain"><?php echo (htmlspecialchars_decode($post["content"])); ?></script>
        </div>
        <div class="form-group">
            <label>文章类型</label>
            <label class="radio-inline">
              <input type="radio" name="type" id="type" value="1" <?php if($post["type"] == 1): ?>checked="checked"<?php endif; ?> >普通
            </label>
            <label class="radio-inline">
              <input type="radio" name="type" id="type" value="2" <?php if($post["type"] == 2): ?>checked="checked"<?php endif; ?>>置顶
            </label>
            <label class="radio-inline">
              <input type="radio" name="type" id="type" value="3" <?php if($post["type"] == 3): ?>checked="checked"<?php endif; ?>>热门
            </label>
            <label class="radio-inline">
              <input type="radio" name="type" id="type" value="4" <?php if($post["type"] == 4): ?>checked="checked"<?php endif; ?>>推荐
            </label>
        </div>
        <input type="hidden" name="id" value="<?php echo ($post["id"]); ?>">
        <button type="submit" class="btn btn-default">提交</button>
    </form>
</div>
<!-- 配置文件 -->
<script type="text/javascript" src="/ThinkphpOS_1.1/Public/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/ThinkphpOS_1.1/Public/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('post-content',{
        toolbars: [
            ['fullscreen', 'source', 'undo', 'redo','bold', 'italic', 'underline','fontborder', 'strikethrough', '|','simpleupload', 'insertimage','attachment','emotion','link','unlink', '|', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote','searchreplace', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc'],
            ['inserttable','insertrow', 'insertcol','mergeright', 'mergedown','deleterow', 'deletecol','splittorows','splittocols', 'splittocells','deletecaption','inserttitle', 'mergecells', 'deletetable','insertparagraphbeforetable', 'paragraph','fontsize','fontfamily']
        ],
        initialFrameHeight:500,
        zIndex:100
    });
</script>
<!-- JavaScript -->
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/ThinkphpOS_1.1/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>