<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>Index</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" media="screen">

  <link rel="stylesheet" href="bootstrap/index/bootstrap.min.css" media="screen">
  <script src="bootstrap/index/jquery.min.js"></script>
  <script src="bootstrap/index/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css" media="screen">

</head>

<body class="index">
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="collapse navbar-collapse">
      <?php
        $username = $_COOKIE['username'];
        if (!$username) {
          $username = "未登录";

      ?>
      <ul class="nav navbar-nav navbar-left">
        <a class="navbar-brand" id="index-acc"> </a>
        <a class="navbar-brand" id="index-acc"> <u>&nbsp<?php echo $username ?>&nbsp</u> </a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a class="navbar-brand" href="login.html" id="index-log"> 登陆 </a>
        <a class="navbar-brand" href="register.html" id="index-reg"> 注册 </a>
        <a class="navbar-brand">  </a>
      </ul>
      <?php
        }
        else {
      ?>
      <ul class="nav navbar-nav navbar-left">
        <a class="navbar-brand" id="index-acc"> </a>
        <a class="navbar-brand" id="index-acc"> 用户： <u>&nbsp<?php echo $username ?>&nbsp</u> </a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a class="navbar-brand" href="login.html" id="index-log"> 登出 </a>
        <a class="navbar-brand">  </a>
      </ul>
      <?php
        }
      ?>
    </div>
  </nav>

  <div class="row-fluid">
    <div class="logo">
      <a href="index.php"><img src="logo.png"></a>
    </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-10 col-md-offset-1">
      <nav class="navbar navbar-inverse" role="navigation">
        <div>
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="index.php"><p class="nav-ch">首页</p></a></li>
            <li><a href="index-pair.php"><p class="nav-ch">配对</p></a></li>
            <li><a href="index-information.php"><p class="nav-ch">个人中心</p></a></li>
            <li><a href="finish-information-basic.php"><p class="nav-ch">修改资料</p></a></li>
            <li><a href="index-contactus.php"><p class="nav-ch nav-ch-red">联系我们</p></a></li>
          </ul>
        </div>
      </nav>

      <div class="row-fluid">
        <div class="col-md-12">
          <div id="myCarousel" class="carousel slide" style="">
             <!-- 轮播（Carousel）指标 -->
             <ol class="carousel-indicators carousel-control">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
             </ol>
             <!-- 轮播（Carousel）项目 -->
             <div class="carousel-inner">
                <div class="item active" style="background-size:cover;">
                   <img src="img01.jpg" alt="">
                   <div class="carousel-caption"><h3></h3></div>
                </div>
                <div class="item" style="background-size:cover;">
                   <img src="img02.jpg" alt="">
                   <div class="carousel-caption"><h3></h3></div>
                </div>
             </div>
             <!-- 轮播（Carousel）导航 -->
             <a class="carousel-control left" href="#myCarousel" data-slide="prev" style="">&lsaquo;</a>
             <a class="carousel-control right" href="#myCarousel" data-slide="next" style="">&rsaquo;</a>
          </div>
        </div>
      </div>




    </div>
  </div>



  <!--script src="bootstrap/js/bootstrap.js"></script-->
</body>
</html>
