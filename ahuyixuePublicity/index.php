<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>阿虎医学</title>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="assets/css/amazeui.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>

<?php
//构造数据
$videoData = array(
    array(
        'title' => '2017护士考试习题精讲班谁发的啥地方',
        'imgName' => 'course.png',
        'peopleNum' => '2312人',
        'shitingUrl' => 'http://www.baidu.com'
    ),
    array(
        'title' => '2017护士考试习题精讲班谁发的啥地方',
        'imgName' => 'course.png',
        'peopleNum' => '2312人',
        'shitingUrl' => 'http://www.qq.com'
    )
);

$tikuData = array(
    array(
        'title' => '初级护师题库',
        'imgName' => 'chujihushi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '执业护士题库',
        'imgName' => 'zhiyehushi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '执业药师题库',
        'imgName' => 'zhiyeyaoshi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '初级护师题库',
        'imgName' => 'chujihushi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '初级护师题库',
        'imgName' => 'chujihushi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '初级护师题库',
        'imgName' => 'chujihushi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '初级护师题库士大夫士大夫',
        'imgName' => 'chujihushi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '初级护师题库',
        'imgName' => 'chujihushi.png',
        'url' => 'http://www.baidu.com'
    )
);
$tikuStart = array(0,3,6,9,12,15);
$tikuTail  = array(2,5,8,11,14);
$tikuLastK = count($tikuData)-1;

$jinnangData = array(
    array(
        'title' => '护理考试锦囊',
        'imgName' => 'hulikaoshi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '药师考试锦囊',
        'imgName' => 'yaoshikaoshi.png',
        'url' => 'http://www.baidu.com'
    ),
    array(
        'title' => '医师考试锦囊',
        'imgName' => 'yishikaoshi.png',
        'url' => 'http://www.baidu.com'
    )
);

?>

<div id="wrapper">
    <a id="banner" href="http://a.app.qq.com/o/simple.jsp?pkgname=com.ahuxueshu"><img class="am-img-responsive" src="assets/img/banner.png" alt=""></a>
    <div id="videoZone">
        <p class="zone-title">视频体验</p>
        <div class="am-container">
            <?php foreach($videoData as $v){ ?>
                <img class="video-item-left am-img-responsive" src="assets/img/<?php echo $v['imgName'] ?>" alt="">
                <div class="video-item-right">
                    <p class="video-item-title am-text-truncate"><?php echo $v['title'] ?></p>
                    <a href="<?php echo $v['shitingUrl'] ?>" class="video-item-shiting">试听</a>
                    <p class="video-item-peopleNum"><img src="assets/img/peopleNum.png" alt="">&nbsp;<span class="am-text-middle"><?php echo $v['peopleNum'] ?></span></p>
                </div>
                <div class="am-cf"></div>
                <hr>
            <?php } ?>
            <div id="video-more">
                <a href="http://www.ahuyikao.com">点击试听更多视频课程 &gt;</a>
            </div>
        </div>
    </div>
    <div id="tikuZone">
        <p class="zone-title">单科题库</p>
        <div class="am-container">
            <!--<div class="am-g">
                <div class="am-u-sm-4">
                    <img class="tiku-item-img am-img-responsive" src="assets/img/icon/zhiyehushi.png" alt="">
                    <p class="tiku-item-title am-text-truncate">执业护士题库</p>
                    <p class="tiku-item-xingxing"><img src="assets/img/xingxing.png" alt=""></p>
                    <a class="tiku-item-qianwang" href="http://www.sina.com">前往</a>
                </div>
                <div class="am-u-sm-4">dd</div>
                <div class="am-u-sm-4">ss</div>
            </div>
            <hr>-->
            <?php foreach($tikuData as $k=>$v){ ?>
                <?php if(in_array($k,$tikuStart)){ ?>
            <div class="am-g">
                <?php } ?>
                <div class="am-u-sm-4 <?php if($k == $tikuLastK){echo 'am-u-end';} ?>">
                    <img class="tiku-item-img am-img-responsive" src="assets/img/icon/<?php echo $v['imgName']; ?>" alt="">
                    <p class="tiku-item-title am-text-truncate"><?php echo $v['title']; ?></p>
                    <p class="tiku-item-xingxing"><img src="assets/img/xingxing.png" alt=""></p>
                    <a class="tiku-item-qianwang" href="<?php echo $v['url']; ?>">前往</a>
                </div>
                <?php if(in_array($k,$tikuTail)){ ?>
            </div>
            <hr>
                <?php } ?>


            <?php } ?>
        </div>
    </div>
    <div id="jinnangZone">
        <p class="zone-title">高分资料</p>
        <div class="am-container">
            <div class="am-g">
                <?php foreach($jinnangData as $v){ ?>
                    <div class="am-u-sm-4">
                        <img class="tiku-item-img am-img-responsive" src="assets/img/icon/<?php echo $v['imgName']; ?>" alt="">
                        <p class="tiku-item-title am-text-truncate"><?php echo $v['title']; ?></p>
                        <p class="tiku-item-xingxing"><img src="assets/img/xingxing.png" alt=""></p>
                        <a class="tiku-item-qianwang" href="<?php echo $v['url']; ?>">前往</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>