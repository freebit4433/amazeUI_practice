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
    'imgUrl' => '',
    'nickname' => '西瓜士水电费发的啥地方是否',
    'score' => '600'
);
$rank = array(
    array(
        'rankNum' => 1,
        'imgUrl' => 'xxx',
        'nickname' => '18149843245',
        'score' => '700'
    ),
    array(
        'rankNum' => 2,
        'imgUrl' => 'xxx',
        'nickname' => '三闾大夫就哦了',
        'score' => '680'
    ),
    array(
        'rankNum' => 3,
        'imgUrl' => 'xxx',
        'nickname' => '昵称不可以为空',
        'score' => '650'
    ),
    array(
        'rankNum' => 4,
        'imgUrl' => 'xxx',
        'nickname' => '今年的winter没有下雪选项',
        'score' => '600'
    ),
    array(
        'rankNum' => 5,
        'imgUrl' => 'xxx',
        'nickname' => '厚德载物自强不息',
        'score' => '600'
    )
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

<div class="oneItem item-myself">
    <div class="item-left">
        <span><?php echo $myself['rankNum'] ?></span>
        <img class="am-circle head-img" src="<?php echo $myself['imgUrl'] ?>" onerror="this.src='static/img/defaultHeadImg.png'" alt="">
    </div>
    <div class="item-right"><?php echo $myself['score'] ?>分</div>
    <div class="item-center am-text-truncate"><?php echo $myself['nickname'] ?></div>
    <hr>
    <div class="am-cf"></div>
</div>

<?php foreach($rank as $v){ ?>
<div class="oneItem <?php if($v['rankNum'] < 4){echo 'item-numx';} ?>">
    <div class="item-left">
        <?php
        if($v['rankNum'] < 4){
            echo "<img src=\"static/img/num" . $v['rankNum'] . ".png\">";
        }else{
            echo "<span>" . $v['rankNum'] . "</span>";
        }
        ?>
        <img class="am-circle head-img" src="<?php echo $v['imgUrl'] ?>" onerror="this.src='static/img/defaultHeadImg.png'" alt="">
    </div>
    <div class="item-right"><?php echo $v['score']; ?>分</div>
    <div class="item-center am-text-truncate"><?php echo $v['nickname']; ?></div>
    <hr>
    <div class="am-cf"></div>
</div>
<?php } ?>

<script src="../assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        //处理屏幕适配JS开始
        $("#header-placeholder").css('height',$("#header-content").css('height'));
        $(".item-center").css('padding-right','1em');
        //处理屏幕适配JS结束
    })
</script>
</body>
</html>