<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>Finish Information</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" media="screen">
  <link href="bootstrap/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" herf="login.css" media="screen">
  <link rel="stylesheet" href="login.css" media="screen">
</head>

<body class="login">
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
        <a class="navbar-brand" href="login.html" id="index-log"> 登出&nbsp </a>
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
    <div class="span8 offset2 login-ch-content">
      <ul class="nav nav-tabs nav-justified">
        <li><a href="finish-information-basic.php" class="ch-nav">基本资料</a></li>
        <li><a href="finish-information-photo.php" class="ch-nav">我的照片</a></li>
        <li class="active"><a href="finish-information-introduction.php" class="ch-nav">自我介绍</a></li>
        <li><a href="finish-information-hobby.php" class="ch-nav">个人喜好</a></li>
      </ul>

      <form class="form-signin input-ch-form" action="selfintroduction.php" method="post">

        <div class="form-group">
          <label class="control-label" for="intro"><h4>自我介绍:</h4></label>
          <textarea class="form-control textarea-ch" rows="3"> </textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-warning">
            保存
          </button>
        </div>

        <br>
        <a href="finish-information-hobby.html" class="btn btn-large btn-primary btn-block" role="button" type="submit">
          NEXT HOBBY
        </a>
        <a href="finish-information-photo.html" class="btn btn-default btn-block" role="button">
          Back Photo
        </a>
      </form>

    </div>
  </div>


  <script src="bootstrap/js/npm.js"></script>
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--script src="bootstrap/js/bootstrap.js"></script-->
</body>
</html>
