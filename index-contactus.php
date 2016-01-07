<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>Index-ContactUs</title>
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
    <div class="col-md-10 col-md-offset-1 row-ch">
      <nav class="navbar navbar-inverse" role="navigation">
        <div>
          <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php"><p class="nav-ch">首页</p></a></li>
            <li><a href="#"><p class="nav-ch">配对</p></a></li>
            <li><a href="index-information.php"><p class="nav-ch">个人中心</p></a></li>
            <li><a href="finish-information-basic.html"><p class="nav-ch">修改资料</p></a></li>
            <li class="active"><a href="index-contactus.php"><p class="nav-ch nav-ch-red">联系我们</p></a></li>
          </ul>
        </div>
      </nav>

      <div class="row">
          <div class="col-md-8 col-md-offset-2 row-inf-ch">
            <div class="col-md-5">
              <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> 组员 / 学号： </h3>
              <h5 class="right-h4-ch" style="padding-left:5px; padding-top:0px; margin:10px"> Crew / Student No. </h5>
            </div>
            <div class="col-md-7 col-md-offset-0">
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 陈　辉 / 13349006 </h3>
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 封志斌 / 13349026 </h3>
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 黄彦韶 / 13349042 </h3>
            </div>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-8 col-md-offset-2 row-inf-ch">
            <div class="col-md-5">
              <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> 院系 / 专业： </h3>
              <h5 class="right-h4-ch" style="padding-left:5px; padding-top:0px; margin:10px"> College / Major </h5>
            </div>
            <div class="col-md-7 col-md-offset-0">
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 数据科学与计算机学院 </h3>
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 13级 计算机科学系 </h3>
            </div>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-8 col-md-offset-2 row-inf-ch">
            <div class="col-md-5">
              <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> 电邮： </h3>
              <h5 class="right-h4-ch" style="padding-left:5px; padding-top:0px; margin:10px"> E-mail </h5>
            </div>
            <div class="col-md-7 col-md-offset-0">
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 874904918 @ qq.com </h3>
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 617271321 @ qq.com </h3>
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 359003257 @ qq.com </h3>
            </div>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-8 col-md-offset-2 row-inf-ch">
            <div class="col-md-5">
              <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> 地址： </h3>
              <h5 class="right-h4-ch" style="padding-left:5px; padding-top:0px; margin:10px"> Address </h5>
            </div>
            <div class="col-md-7 col-md-offset-0">
              <h3 class="right-h4-ch" style="padding:3px; margin:10px"> 广州大学城中山大学东校区<br>数据科学与计算机学院<br>510006 </h3>
            </div>
          </div>
      </div>


    </div>
  </div>



  <!--script src="bootstrap/js/bootstrap.js"></script-->
</body>
</html>
