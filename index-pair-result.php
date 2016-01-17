<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>Index-Pair-Result</title>
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
  <?php
    $username = $_COOKIE['username'];
    $mysql_server_name = 'localhost'; //改成自己的mysql数据库服务器
    $mysql_username = 'root'; //改成自己的mysql数据库用户名
    $mysql_password = ''; //改成自己的mysql数据库密码
    $mysql_database = 'test'; //改成自己的mysql数据库名
    $conn=mysql_connect($mysql_server_name, $mysql_username, $mysql_password) or die("error connecting"); //连接数据库
    mysql_query("set names 'utf8'"); //数据库输出编码
    mysql_select_db($mysql_database); //打开数据库

    $sql = "select * from result";
    $rs=mysql_query($sql);
    $is = true;
    while ($row = mysql_fetch_array($rs)) {
      if ($row['username'] == $username) {
        $pair1 = $row['pair1'];
        $is = false;
      }
    }
    if ($is) {
      echo "no information, return login in 5s";
      echo "<meta http-equiv=refresh content='0; url=finish-information-basic.php'>";
    }

    $sql = "select * from images";
    $rs = mysql_query($sql);
    $is = true;
    while ($row = mysql_fetch_array($rs)) {
      if ($row['image_username'] == $pair1) {
        $img_path = "user-img/".$row['image_filename'];
        $is = false;
      }
    }
    if ($is) {
      $img_path = "user-img/default.jpg";
    }

    $sql = "select * from user";
    $rs = mysql_query($sql);
    while ($row = mysql_fetch_array($rs)) {
      if ($row['user_name'] == $pair1) {
        $nickname = $row['nickname'];
        $email = $row['email'];
      }
    }

    $sql = "select * from basic";
    $rs = mysql_query($sql);
    while ($row = mysql_fetch_array($rs)) {
      if ($row['user_name'] == $pair1) {
        $phone = $row['phone'];
        $wechat = $row['wechat'];
        $qq = $row['qq'];
      }
    }

    if ($email == "") $email = "N/A";
    if ($phone == "") $phone = "N/A";
    if ($wechat == "") $wechat = "N/A";
    if ($qq == "") $qq = "N/A";

    mysql_close(); //关闭MySQL连接
  ?>
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="collapse navbar-collapse">
      <?php
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
            <li class="active"><a href="index-pair.php"><p class="nav-ch">配对</p></a></li>
            <li><a href="index-information.php"><p class="nav-ch">个人中心</p></a></li>
            <li><a href="finish-information-basic.php"><p class="nav-ch">修改资料</p></a></li>
            <li><a href="index-contactus.php"><p class="nav-ch nav-ch-red">联系我们</p></a></li>
          </ul>
        </div>
      </nav>

      <div class="row">
        <h3 style="padding-left:80px; padding-bottom:20px; color:white; opacity:0.9;">配对结果:</h3>
          <div class="col-md-10 col-md-offset-1 row-inf-ch">
            <div class="col-md-4" style="padding:20px; padding-left:10px;">
              <?php
                $iimg = "<img src='$img_path' style='width:100%; border-radius:20px; margin-bottom: 3px;'>";
                echo $iimg;
              ?>
            </div>
            <div class="col-md-8" style="padding:20px;">
              <div class="col-md-4">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> 昵称： </h3>
              </div>
              <div class="col-md-8">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> <?php echo $nickname ?> </h3>
              </div>
              <br>
              <div class="col-md-4">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> 电邮： </h3>
              </div>
              <div class="col-md-8">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> <?php echo $email ?> </h3>
              </div>
              <br>
              <div class="col-md-4">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> 电话： </h3>
              </div>
              <div class="col-md-8">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> <?php echo $phone ?> </h3>
              </div>
              <br>
              <div class="col-md-4">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> 微信： </h3>
              </div>
              <div class="col-md-8">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> <?php echo $wechat ?> </h3>
              </div>
              <br>
              <div class="col-md-4">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> QQ： </h3>
              </div>
              <div class="col-md-8">
                <h3 class="right-h4-ch" style="padding:3px; padding-bottom:0px; margin:10px"> <?php echo $qq ?> </h3>
              </div>
              <br>
            </div>
          </div>
      </div>

    </div>
  </div>



  <!--script src="bootstrap/js/bootstrap.js"></script-->
</body>
</html>
