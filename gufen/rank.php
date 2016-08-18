<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>估分系统（排行榜）</title>
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="../assets/css/amazeui.css">
    <link rel="stylesheet" href="static/css/rank.css">
</head>

<?php
$myself = array(
    'rankNum' => 80,
    'imgUrl' => 'xxx',
    'nickname' => '西瓜',
    'score' => '600分'
);
$rank = array(
    array(
        'rankNum' => 1,
        'imgUrl' => 'xxx',
        'nickname' => '夏天',
        'score' => '700分'
    ),
    array(
        'rankNum' => 2,
        'imgUrl' => 'xxx',
        'nickname' => '西瓜',
        'score' => '680分'
    ),
    array(
        'rankNum' => 3,
        'imgUrl' => 'xxx',
        'nickname' => '芒果',
        'score' => '650分'
    ),
    array(
        'rankNum' => 4,
        'imgUrl' => 'xxx',
        'nickname' => '哈密瓜',
        'score' => '600分'
    ),
);
?>

<body>
<header>
    <div id="header-content">
        <p id="header-exit">＜</p>
        <p>排行榜</p>
    </div>
    <div id="header-placeholder"></div>
</header>

<div id="rank-title">
    <img src="static/img/rank.png" alt="">
    <span class="am-text-bottom">排行榜TOP100</span>
</div>

<div class="oneItem">
    <div class="item-left">
        <span>98</span>
        <img src="static/img/headimg.png" alt="">
    </div>
    <div class="item-right">
        650分
    </div>
    <div class="item-center">
        夏天
    </div>
    <div class="am-cf"></div>
</div>









<script src="../assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#header-placeholder").css('height',$("#header-content").css('height'));
    })
</script>
</body>
</html>
