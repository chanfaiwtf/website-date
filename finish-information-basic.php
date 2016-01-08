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
  <link rel="stylesheet" href="login.css" media="screen">
  <link rel="stylesheet" href="index.css" media="screen">
  <script type="text/javascript" src="bootstrap/js/birthdays.js"></script>
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
        <li class="active"><a href="finish-information-basic.php" class="ch-nav">基本资料</a></li>
        <li><a href="finish-information-photo.php" class="ch-nav">我的照片</a></li>
        <li><a href="finish-information-introduction.php" class="ch-nav">自我介绍</a></li>
        <li><a href="finish-information-hobby.php" class="ch-nav">个人喜好</a></li>
      </ul>

      <form class="form-inline input-ch-form1" action="basic.php" method="post">
        <div class="form-group">
          <h4>出生日期(年/月/日):</h4>
          <select class="form-control" name="year" id="year" style="width:150px;" onfocus="years('year',new Date().getFullYear()),change_date()" onchange="change_date()"></select>
          <select class="form-control" name="month" id="month" style="width:100px;" onfocus="months(),change_date()" onchange="change_date()"></select>
          <select class="form-control" name="date" id="date" style="width:100px;" ></select>
          </select>
        </div>
        <br>
        <div class="form-group">
          <h4>身高(cm):</h4>
          <select class="form-control" name="height" id="height" style="width:150px;" onfocus="heights('height', 190)"></select>
        </div>
        <!--&nbsp;-->
        <div class="form-group">
          <h4>体重(kg):</h4>
          <select class="form-control" name="weight" id="weight" style="width:150px;" onfocus="weights('weight', 90)"></select>
        </div>
      <!--/form-->

      <!--form class="form-signin input-ch-form"-->
        <br>
        <div class="form-group">
          <h4>性别:</h4>
          <select class="from-control" name="sex" id="sex" style="width:150px;" onfocus="sexs()"></select>
        </div>
        <br>
        <div class="form-group">
          <h4>年级:</h4>
          <select class="form-control" name="grade" id="grade" style="width:150px;" onfocus="grades()"></select>
        </div>
        <br>
        <div class="form-group">
          <h4>专业类别:</h4>
          <select class="form-control" name="major" id="major" style="width:150px;" onfocus="majors()">
          </select>
        </div>
        <br>
        <div class="form-group">
          <h3 style="color:#ffe9be;">以下资料将不会公开</h3>
          <label class="control-label" for="phone"><h4>电话:</h4></label>
          <input class="input-block-level input-ch-private" type="text" name="phone" id="phone" placeholder="PhoneNumber">

          <label class="control-label" for="wechat"><h4>微信:</h4></label>
          <input class="input-block-level input-ch-private" type="text" name="wechat" id="wechat" placeholder="WeChat">

          <label class="control-label" for="qq"><h4>QQ:</h4></label>
          <input class="input-block-level input-ch-private" type="text" name="qq" id="qq" placeholder="QQ">

        </div>
        <br><br><br>
          <button type="submit" class="btn btn-primary btn-large btn-block">
            保存
          </button>
      </form>

    </div>
  </div>


  <script src="bootstrap/js/npm.js"></script>
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--script src="bootstrap/js/bootstrap.js"></script-->
</body>
</html>
