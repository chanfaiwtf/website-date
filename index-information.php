<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>Index-Information</title>
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
  #echo $month;
  $mysql_server_name = 'localhost'; //改成自己的mysql数据库服务器
  $mysql_username = 'root'; //改成自己的mysql数据库用户名
  $mysql_password = ''; //改成自己的mysql数据库密码
  $mysql_database = 'test'; //改成自己的mysql数据库名
  $conn=mysql_connect($mysql_server_name, $mysql_username, $mysql_password) or die("error connecting") ; //连接数据库

  mysql_query("set names 'utf8'"); //数据库输出编码

  mysql_select_db($mysql_database); //打开数据库

  $sql = "select * from user";
  $rs=mysql_query($sql);
  $is = true;
  while ($row = mysql_fetch_array($rs)) {
    if ($row['user_name'] == $username) {
      $email = $row['email'];
      $nickname = $row['nickname'];
      $password = $row['password'];
      $is = false;
    }
  }
  if ($is) {
    echo "no information, return login in 5s";
    echo "<meta http-equiv=refresh content='0; url=login.html'>";
  }

  $sql = "select * from basic";
  $rs = mysql_query($sql);
  $is = true;
  while ($row = mysql_fetch_array($rs)) {
    if($row['user_name'] == $username) {
      $year = $row['year'];
      $month = $row['month'];
      $date = $row['date'];
      $birth = $year." ".$month." ".$day;
      $height = $row['height'];
      $weight = $row['weight'];
      $sex = $row['sex'];
      $grade = $row['grade'];
      $major = $row['major'];
      $phone = $row['phone'];
      $wechat = $row['wechat'];
      $qq = $row['qq'];
      $is = false;
    }
  }
  if ($is) {
    $year = "<h4 class='right-na-ch'> N/A </h4>";
    $month = "<h4 class='right-na-ch'> N/A </h4>";
    $date = "<h4 class='right-na-ch'> N/A </h4>";
    $birth = "<h4 class='right-na-ch'> N/A </h4>";
    $height = "<h4 class='right-na-ch'> N/A </h4>";
    $weight = "<h4 class='right-na-ch'> N/A </h4>";
    $sex = "<h4 class='right-na-ch'> N/A </h4>";
    $grade = "<h4 class='right-na-ch'> N/A </h4>";
    $major = "<h4 class='right-na-ch'> N/A </h4>";
    $phone = "<h4 class='right-na-ch'> N/A </h4>";
    $wechat = "<h4 class='right-na-ch'> N/A </h4>";
    $qq = "<h4 class='right-na-ch'> N/A </h4>";
  }

  $sql = "select * from selfintroduction";
  $rs = mysql_query($sql);
  while ($row = mysql_fetch_array($rs)) {
    if($row['user_name']==$username) {
      $introduction=$row['introduction'];
      $is=false;
    }
  }
  if($is) {
    $introduction = "<h4 class='right-na-ch'> N/A </h4>";
  }
  mysql_close(); //关闭MySQL连接



  ?>


  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-left">
        <a class="navbar-brand" href="#" id="index-acc"> 未登录 </a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a class="navbar-brand" href="login.html" id="index-log"> 登陆 </a>
        <a class="navbar-brand" href="register.html" id="index-reg"> 注册 </a>
      </ul>
    </div>
  </nav>

  <div class="row-fluid">
    <div class="logo">
      <a href="index.html"><img src="logo.png"></a>
    </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-10 col-md-offset-1">
      <nav class="navbar navbar-inverse" role="navigation">
        <div>
          <ul class="nav navbar-nav navbar-left">
            <li><a href="index.html"><p class="nav-ch">首页</p></a></li>
            <li><a href="#"><p class="nav-ch">配对</p></a></li>
            <li class="active"><a href="index-information.html"><p class="nav-ch">个人中心</p></a></li>
            <li><a href="#"><p class="nav-ch">修改资料</p></a></li>
            <li><a href="index-contactus.html"><p class="nav-ch nav-ch-red">联系我们</p></a></li>
          </ul>
        </div>
      </nav>

      <div class="row row-ch">
        <div class="col-md-12">
          <div class="col-md-5">
            <img src="img/reg_01_01.png" style="width:100%; border-radius:20px; margin-bottom: 3px;">
            <br>
            <div class="col-md-12">
              <div class="col-md-5">
                <h3 class="right-h4-ch"> 电话： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $phone ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-5">
                <h3 class="right-h4-ch"> 微信： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $wechat ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-5">
                <h3 class="right-h4-ch"> QQ： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $qq ?> </h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-0">
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 用户名： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $username ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 昵称： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $nickname ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 电邮： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $email ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 性别： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $sex ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 出生日期： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $birth ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 身高： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $height ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 体重： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $weight ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 年级： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $grade ?> </h3>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <h3 class="right-h4-ch"> 专业类别： </h3>
              </div>
              <div class="col-md-6">
                <h3 class="right-h4-ch"> <?php echo $major ?> </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <br>
          <h3 class="right-h4-ch"> 自我介绍：</h3>
        </div>
        <div class="col-md-8 col-md-offset-2" style="background-color:#606060; border-radius:10px;">
          <?php echo $introduction ?>
        </div>
      </div>

    </div>
  </div>



  <!--script src="bootstrap/js/bootstrap.js"></script-->
</body>
</html>
