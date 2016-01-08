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
  <script type="text/javascript">
    function clickImg(i) {
      var x = document.getElementsByName(i.name);
      x[0].click();
      if (x[0].checked == true) {
        //x[1].className = "reg-img-act";
        x[2].className = "reg-che-act";
      }
      else {
        //x[1].className = "reg-img";
        x[2].className = "reg-che";
      }
      //document.getElementByName(i.id).style.opacity="0.2";
      //document.getElementById("lifeStyle").innerHTML=Date();
      //document.onmousedown = function(e) {
      //  var oeve = e || event;
      //  var id = oeve.target.id;
      //  document.getElementById(id).style.opacity="0.2";
      //}
    }
  </script>
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
        <li><a href="finish-information-introduction.php" class="ch-nav">自我介绍</a></li>
        <li class="active"><a href="finish-information-hobby.php" class="ch-nav">个人喜好</a></li>
      </ul>

      <form class="form-signin">


        <table class="table">
          <caption style="background-color:#fcf8e2; margin-bottom:2%;">
            <h3 id="lifeStyle"style="text-align:center; margin:0px;">生活方式</h3>
          </caption>
          <tbody>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_01" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_01" src="img/reg_01_01.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_01" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_02" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_02" src="img/reg_01_02.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_02" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_03" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_03" src="img/reg_01_03.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_03" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_04" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_04" src="img/reg_01_04.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_04" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_05" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_05" src="img/reg_01_05.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_05" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_06" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_06" src="img/reg_01_06.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_06" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_07" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_07" src="img/reg_01_07.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_07" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_08" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_08" src="img/reg_01_08.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_08" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_09" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_09" src="img/reg_01_09.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_09" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_10" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_10" src="img/reg_01_10.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_10" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_11" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_11" src="img/reg_01_11.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_11" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_01_12" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_01_12" src="img/reg_01_12.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_01_12" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="table">
          <caption style="background-color:#fcf8e2; margin-bottom:2%;">
            <h3 id="lifeStyle"style="text-align:center; margin:0px;">体育运动</h3>
          </caption>
          <tbody>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_01" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_01" src="img/reg_02_01.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_01" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_02" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_02" src="img/reg_02_02.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_02" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_03" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_03" src="img/reg_02_03.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_03" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_04" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_04" src="img/reg_02_04.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_04" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_05" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_05" src="img/reg_02_05.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_05" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_06" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_06" src="img/reg_02_06.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_06" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_07" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_07" src="img/reg_02_07.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_07" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_08" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_08" src="img/reg_02_08.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_08" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_09" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_09" src="img/reg_02_09.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_09" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_10" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_10" src="img/reg_02_10.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_10" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_11" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_11" src="img/reg_02_11.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_11" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_02_12" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_02_12" src="img/reg_02_12.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_02_12" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="table">
          <caption style="background-color:#fcf8e2; margin-bottom:2%;">
            <h3 id="lifeStyle"style="text-align:center; margin:0px;">休闲方式</h3>
          </caption>
          <tbody>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_01" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_01" src="img/reg_03_01.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_01" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_02" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_02" src="img/reg_03_02.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_02" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_03" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_03" src="img/reg_03_03.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_03" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_04" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_04" src="img/reg_03_04.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_04" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_05" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_05" src="img/reg_03_05.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_05" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_06" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_06" src="img/reg_03_06.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_06" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_07" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_07" src="img/reg_03_07.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_07" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_08" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_08" src="img/reg_03_08.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_08" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_09" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_09" src="img/reg_03_09.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_09" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_10" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_10" src="img/reg_03_10.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_10" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_11" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_11" src="img/reg_03_11.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_11" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_03_12" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_03_12" src="img/reg_03_12.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_03_12" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="table">
          <caption style="background-color:#fcf8e2; margin-bottom:2%;">
            <h3 id="lifeStyle"style="text-align:center; margin:0px;">饮食习惯</h3>
          </caption>
          <tbody>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_01" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_01" src="img/reg_04_01.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_01" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_02" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_02" src="img/reg_04_02.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_02" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_03" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_03" src="img/reg_04_03.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_03" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_04" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_04" src="img/reg_04_04.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_04" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_05" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_05" src="img/reg_04_05.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_05" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_06" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_06" src="img/reg_04_06.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_06" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_07" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_07" src="img/reg_04_07.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_07" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_08" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_08" src="img/reg_04_08.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_08" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_09" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_09" src="img/reg_04_09.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_09" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_10" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_10" src="img/reg_04_10.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_10" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_11" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_11" src="img/reg_04_11.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_11" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_12" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_12" src="img/reg_04_12.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_12" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_13" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_13" src="img/reg_04_13.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_13" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_14" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_14" src="img/reg_04_14.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_14" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_15" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_15" src="img/reg_04_15.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_15" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_16" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_16" src="img/reg_04_16.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_16" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_17" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_17" src="img/reg_04_17.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_17" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
              <td class="td-ch" style="padding:0px; position:relative;">
                <input id="check_c" name="check_04_18" type="checkbox" class="sr-only">
                <div style="position:absolute; width:100%">
                  <img id="check_i" name="check_04_18" src="img/reg_04_18.png" class="reg-img"/>
                </div>
                <div style="position:relative; width:100%">
                  <img id="check_d" name="check_04_18" src="img/reg-check.png" class="reg-che" onclick="clickImg(this)"/>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-large btn-block">
            保存
          </button>
        </div>
      </form>

    </div>
  </div>


  <script src="bootstrap/js/npm.js"></script>
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--script src="bootstrap/js/bootstrap.js"></script-->
</body>
</html>
