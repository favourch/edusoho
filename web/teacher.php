
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<html lang="zh_CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title>精英团队 - 飞渡</title>
  <meta name="keywords" content="全部" />
  <meta name="description" content="" />
  <meta content="d7bf4536849c7b62f5a16151c7467a88171f8be6" name="csrf-token" />
  <meta content="0" name="is-login" />
  <meta content="0" name="is-open" />

    <link rel="icon" href="/files/system/2016/12-09/221850a70e5a928440.jpg?7.2.9" type="image/x-icon" />
  <link rel="shortcut icon" href="/files/system/2016/12-09/221850a70e5a928440.jpg?7.2.9" type="image/x-icon" media="screen"/>


	<link href="/assets/v2/bootstrap/css/bootstrap.css?7.2.9" rel="stylesheet" />

<link rel="stylesheet" media="screen" href="/assets/css/common.css?7.2.9" />
<link rel="stylesheet" media="screen" href="/assets/css/font-awesome.min.css?7.2.9" />
<link rel="stylesheet" media="screen" href="/assets/v2/css/es-icon.css?7.2.9" />

	<link href="/assets/v2/css/main.css?7.2.9" rel="stylesheet" />


	<link href="/assets/v2/css/header-feidu.css?7.2.9" rel="stylesheet" />



  <!--[if lt IE 9]>
    <script src="/assets/libs/html5shiv.js?7.2.9"></script>
    <script src="/assets/libs/respond.min.js?7.2.9"></script>
  <![endif]-->


</head>
<body class="course-list-page bg-blank">

  <div class="es-wrap">

          	      <header class="es-header navbar">
  <div class="navbar-header">
    <div class="visible-xs  navbar-mobile">
      <a href="javascript:;" class="navbar-more js-navbar-more">
        <i class="es-icon es-icon-menu"></i>
      </a>
      <div class="html-mask"></div>
      <div class="nav-mobile">
        <form class="navbar-form" action="/search" method="get">
          <div class="form-group">
            <input class="form-control" placeholder="搜索" name="q">
            <button class="button es-icon es-icon-search"></button>
          </div>
        </form>
        <ul class="nav navbar-nav">

      <li class="">
  <a href="http://123.56.165.158/page/history" >飞渡历程 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/course/explore" >课程中心 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/teacher.php" >精英团队 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/page/study" >学习资料 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/article" >新闻中心 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/page/aboutus" >关于飞渡 </a>
  </li>          </ul>
      </div>
    </div>
    <a href="/" class="navbar-brand">
              <img src="/files/../files/system/2016/12-09/2216557221c2743202.png">
          </a>
  </div>
  <nav class="collapse navbar-collapse">
    <ul class="nav navbar-nav clearfix hidden-xs " id="nav">

      <li class="">
  <a href="http://123.56.165.158/page/history" >飞渡历程 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/course/explore" >课程中心 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/teacher.php" >精英团队 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/page/study" >学习资料 </a>
  </li>
      <li class="">
  <a href="http://123.56.165.158/article" >新闻中心 </a>
  </li>          <li class="nav-more nav-hover">
      <a class="more">
        <i class="es-icon es-icon-morehoriz"></i>
      </a>
      <ul class="dropdown-menu" role="menu">

          <li class="">
  <a href="http://123.56.165.158/page/aboutus" >关于飞渡 </a>
  </li>              </ul>
    </li>

      </ul>
    <div class="navbar-user ">
      <ul class="nav user-nav">
                <li class="user-avatar-li nav-hover visible-xs">
          <a href="javascript:;" class="dropdown-toggle">
            <img class="avatar-xs" src="/assets/img/default/avatar.png?7.2.9">
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/login?goto=%2Fcourse%2Fexplore">登录</a></li>
          </ul>
        </li>
        <li class="hidden-xs"><a href="/login?goto=%2Fcourse%2Fexplore">登录</a></li>
                      </ul>
      <form class="navbar-form navbar-right hidden-xs hidden-sm" action="/search" method="get">
        <div class="form-group">
          <input class="form-control js-search" name="q" placeholder="搜索">
          <button class="button es-icon es-icon-search"></button>
        </div>
      </form>
    </div>
  </nav>
</header>
  <div class="es-banner">
    <div class="container">
      <div class="title">
        <i class="es-icon es-icon-permcontactcal"></i>教服团队
      </div>
    </div>
  </div>
  <div id="content-container" class="container">
  <div class="teacher-list row">
            <?php
            $con = mysql_connect("localhost:3306","esuser","edusoho");
            mysql_query("set names utf8");
            if (!$con)
              {
              die('Could not connect: ' . mysql_error());
              }
            mysql_select_db("edusoho", $con);
            $result = mysql_query("SELECT * FROM user WHERE roles='|ROLE_TEACHER|ROLE_USER|'");
            while($row = mysql_fetch_array($result))
               {
               $image = substr($row["largeAvatar"],9,40);
               echo '<div class="col-lg-3 col-md-4 col-xs-6"><div class="teacher-item"><div class="teacher-top"><a class="teacher-img" href="/user/' .$row["id"].'"><img class="avatar-lg" src="/files/' .$image.'" alt=""></a> <h3 class="title"><a class="link-dark" href="/user/' .$row["id"].'">' .$row["nickname"].'</a></h3><div class="position">' .$row["title"].'</div></div></div></div>';
               }
              mysql_close($con);
             ?>

  </div>
  </div>
  <div class="es-banner">
      <div class="container">
        <div class="title">
          <i class="es-icon es-icon-permcontactcal"></i>助教团队
        </div>
      </div>
    </div>
    <div id="content-container" class="container">
    <div class="teacher-list row">
              <?php
              $con = mysql_connect("localhost:3306","esuser","edusoho");
                         mysql_query("set names utf8");
                         if (!$con)
                           {
                           die('Could not connect: ' . mysql_error());
                           }
                         mysql_select_db("edusoho", $con);
              $result = mysql_query("SELECT * FROM user WHERE roles='|zhujiao|ROLE_USER|'");
              while($row = mysql_fetch_array($result))
                {
                $image = substr($row["largeAvatar"],9,40);
                echo '<div class="col-lg-3 col-md-4 col-xs-6"><div class="teacher-item"><div class="teacher-top"><a class="teacher-img" href="/user/' .$row["id"].'"><img class="avatar-lg" src="/files/' .$image.'" alt=""></a> <h3 class="title"><a class="link-dark" href="/user/' .$row["id"].'">' .$row["nickname"].'</a></h3><div class="position">' .$row["title"].'</div></div></div></div>';
                }
                mysql_close($con);
               ?>

    </div>
    </div>

                                                                              <div class="es-footer-link">
  <div class="container">
    <div class="row">

<div class="col-md-8 footer-main clearfix">
  <div class="link-item ">
  <h3>联系我们</h3>
  <ul>
          <li>
        <a href="" target="_self">电话:15927507429</a>
      </li>
          <li>
        <a href="" target="_blank">ccnuer@icloud.com</a>
      </li>
      </ul>
</div>

  <div class="link-item ">
  <h3>学校介绍</h3>
  <ul>
          <li>
        <a href="http://123.56.165.158/page/address" target="_self">武汉校区</a>
      </li>
          <li>
        <a href="http://123.56.165.158/page/address" target="_self">其他地址</a>
      </li>
      </ul>
</div>

  <div class="link-item ">
  <h3>学员服务</h3>
  <ul>
          <li>
        <a href="http://123.56.165.158/page/vip" target="_blank">会员积分服务</a>
      </li>
          <li>
        <a href="http://123.56.165.158/page/class" target="_blank">退课转班制度</a>
      </li>
      </ul>
</div>

  <div class="link-item hidden-xs">
  <h3>学习流程</h3>
  <ul>
          <li>
        <a href="#" target="_self">如何报名</a>
      </li>
      </ul>
</div>

  <div class="link-item hidden-xs">
  <h3>关于我们</h3>
  <ul>
          <li>
        <a href="#" target="_blank">官方微博</a>
      </li>
          <li>
        <a href="http://123.56.165.158/page/joinus" target="_self">加入我们</a>
      </li>
      </ul>
</div>

</div>

<div class="col-md-4 footer-logo hidden-sm hidden-xs">
  <a class="" href="#" target="_blank"><img src="/files/system/block_picture_1481367196.png?7.2.9" alt="建议图片大小为233*64"></a>
  <div class="footer-sns">
        <a href="http://weibo.com/" target="_blank"><i class="es-icon es-icon-weibo"></i></a>
            <a class="qrcode-popover top">
      <i class="es-icon es-icon-weixin"></i>
      <div class="qrcode-content">
        <img src="/files/system/block_picture_1481367101.jpg?7.2.9" alt="">
      </div>
    </a>
            <a class="qrcode-popover top">
      <i class="es-icon es-icon-apple"></i>
      <div class="qrcode-content">
        <img src="/files/system/block_picture_1481367137.jpg?7.2.9" alt="">
      </div>
    </a>
            <a class="qrcode-popover top">
      <i class="es-icon es-icon-android"></i>
      <div class="qrcode-content">
        <img src="/files/system/block_picture_1481367131.jpg?7.2.9" alt="">
      </div>
    </a>
      </div>
</div>



    </div>
  </div>
</div>
<footer class="es-footer">
  <div class="copyright">
    <div class="container">
        Powered by <a href="#" target="_blank">小熊</a>
  ©2014-2016
      <a class="mlm" href="/archive/course">课程存档</a>
      <div class="mts">
                      </div>
    </div>
  </div>
</footer>
      </div>



  <div id="login-modal" class="modal" data-url="/login/ajax"></div>
  <div id="modal" class="modal"></div>
  <div id="attachment-modal" class="modal"></div>

<script>
  var app = {};
  app.debug = false;
  app.version = '7.2.9';
  app.httpHost = 'http://123.56.165.158';
  app.basePath = '';
  app.theme = 'jianmo';
  app.themeGlobalScript = 'theme/global-script';
  app.jsPaths = {"common":"common","theme":"\/themes\/jianmo\/js","customwebbundle":"\/bundles\/customweb\/js","customadminbundle":"\/bundles\/customadmin\/js","topxiawebbundle":"\/bundles\/topxiaweb\/js","topxiaadminbundle":"\/bundles\/topxiaadmin\/js","classroombundle":"\/bundles\/classroom\/js","materiallibbundle":"\/bundles\/materiallib\/js","sensitivewordbundle":"\/bundles\/sensitiveword\/js","permissionbundle":"\/bundles\/permission\/js","orgbundle":"\/bundles\/org\/js"};

  app.crontab = '/common/crontab';
              app.scheduleCrontab = '/common/crontab';

  var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
  var CLOUD_FILE_SERVER = "";

  app.config = {"api":{"weibo":{"key":""},"qq":{"key":""},"douban":{"key":""},"renren":{"key":""}},"cloud":{"video_player":"http:\/\/cdn.staticfile.org\/GrindPlayerCN\/1.0.2\/GrindPlayer.swf","video_player_watermark_plugin":"http:\/\/cdn.staticfile.org\/GrindPlayerCN\/1.0.2\/Watermake-1.0.3.swf","video_player_fingerprint_plugin":"http:\/\/cdn.staticfile.org\/GrindPlayerCN\/1.0.2\/Fingerprint-1.0.1.swf"},"loading_img_path":"\/assets\/img\/default\/loading.gif?7.2.9"};

  app.arguments = {};

  app.scripts = ["teacher\/explore"];

  app.uploadUrl = '/file/upload';
  app.imgCropUrl = '/file/img/crop';
  app.lessonCopyEnabled = '0';
  app.cloudSdkCdn = '';
  app.mainScript = '/bundles/topxiaweb/js/app.js?7.2.9';
  app.lang = 'zh_CN';
</script>
<script src="/assets/libs/seajs/seajs/2.2.1/sea.js?7.2.9"></script>
<script src="/assets/libs/seajs/seajs-style/1.0.2/seajs-style.js?7.2.9"></script>
<script src="/assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js?7.2.9"></script>
<script src="/assets/libs/seajs-global-config.js?7.2.9"></script>
<script src="/bundles/bazingajstranslation/js/translator.min.js?7.2.9"></script>
<script src="http://123.56.165.158/translations"></script>
<script>
  seajs.use(app.mainScript);
</script>
</body>
</html>