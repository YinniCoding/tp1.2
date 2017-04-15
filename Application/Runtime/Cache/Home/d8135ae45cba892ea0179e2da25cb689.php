<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/css/style.css">
	<link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap.min.css"  media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/css/iconfont.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/documenter_style.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/main.css" media="screen" title="no title">
    <link rel="stylesheet" href="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/css/codemirror.css">
    
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/jquery.js"></script>
    
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/bootstrap.min.js"></script>
    <script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/google-code-prettify/prettify.js"></script>
	<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/js/init.js"></script>
</head>
<body>
	<h3>Home模块 Post 详情页</h3>
</body>

<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'onMenuShareQZone'
    ]
  });
  wx.ready(function () {
    // 在这里调用 API
        //获取“分享到朋友圈”按钮点击状态及自定义分享内容接口
        wx.onMenuShareTimeline({
            title: 'ThinkAdmin分享标题', // ThinkAdmin分享标题
            link:  window.location.href, // 分享链接
            imgUrl: '<?php echo $signPackage["logo"];?>', // 分享图标
        });
        //获取“分享给朋友”按钮点击状态及自定义分享内容接口
        wx.onMenuShareAppMessage({
            title: 'ThinkAdmin分享标题', // ThinkAdmin分享标题
            desc: 'ThinkAdmin通用后台管理系统,博客：http://www.cnsecer.com', // 分享描述
            link:  window.location.href, // 分享链接
            imgUrl: '<?php echo $signPackage["logo"];?>', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
        });
        //获取“分享到QQ”按钮点击状态及自定义分享内容接口
        wx.onMenuShareQQ({
            title: 'ThinkAdmin分享标题', // ThinkAdmin分享标题
            title: 'ThinkAdmin分享标题', // ThinkAdmin分享标题
            desc: 'ThinkAdmin通用后台管理系统,博客：http://www.cnsecer.com', // 分享描述
            link:  window.location.href, // 分享链接
            imgUrl: '<?php echo $signPackage["logo"];?>', // 分享图标
        });
        //获取“分享到腾讯微博”按钮点击状态及自定义分享内容接口
        wx.onMenuShareWeibo({
            title: 'ThinkAdmin分享标题', // ThinkAdmin分享标题
            desc: 'ThinkAdmin通用后台管理系统,博客：http://www.cnsecer.com', // 分享描述
            link:  window.location.href, // 分享链接
            imgUrl: '<?php echo $signPackage["logo"];?>', // 分享图标
    
        });
        //获取“分享到QQ空间”按钮点击状态及自定义分享内容接口
        wx.onMenuShareQZone({
            title: 'ThinkAdmin分享标题', // ThinkAdmin分享标题
            desc: 'ThinkAdmin通用后台管理系统,博客：http://www.cnsecer.com', // 分享描述
            link:  window.location.href, // 分享链接
            imgUrl: '<?php echo $signPackage["logo"];?>', // 分享图标
        });
  });
</script>
<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery.js"></script>
<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/main.js"></script>
<!-- <script type="text/javascript" src="assets/js/jquery.js"></script> -->
<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets/js/jquery-1.8.2.min.js"></script>
<script src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/js2/jquery.min.js"></script>
<script type="text/javascript" src="/ThinkphpOS_1.1/Application/Home/View//Public/static/assets02/js/main.js"></script>

</html>