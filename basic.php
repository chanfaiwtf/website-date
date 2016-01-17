<?php
  $year = $_POST['year'];
  $month = $_POST['month'];
  $date = $_POST['date'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $sex = $_POST['sex'];
  $grade = $_POST['grade'];
  $major = $_POST['major'];
  $phone = $_POST['phone'];
  $wechat = $_POST['wechat'];
  $qq = $_POST['qq'];
  if ($sex == 1) {
    $sex = "Male";
  }
  if ($sex == 2) {
    $sex = "Female";
  }
  $username = $_COOKIE['username'];
  #echo $month;
  $mysql_server_name = 'localhost'; //改成自己的mysql数据库服务器
  $mysql_username = 'root'; //改成自己的mysql数据库用户名
  $mysql_password = ''; //改成自己的mysql数据库密码
  $mysql_database = 'test'; //改成自己的mysql数据库名
  $conn = mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库

  mysql_query("set names 'utf8'"); //数据库输出编码

  mysql_select_db($mysql_database); //打开数据库
  $sql = "select * from basic";
  $rs = mysql_query($sql);
  $is = true;
  while ($row = mysql_fetch_array($rs)) {
   if($row['user_name'] == $username) {
     $is = false;
   }
  }
  if ($is) {
    $sql = "insert into basic (user_name,year,month,date,height,weight,sex,grade,major,phone,wechat,qq) values ('$username','$year','$month','$date','$height','$weight','$sex','$grade','$major','$phone','$wechat','$qq')";
    mysql_query($sql);
  }
  else {
   if ($year != "") {
     $sql = "update basic set year = '$year' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($month != "") {
     $sql = "update basic set month = '$month' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($date != "") {
     $sql = "update basic set date = '$date' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($height != "") {
     $sql = "update basic set height = '$height' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($weight != "") {
     $sql = "update basic set weight = '$weight' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($sex != "") {
     $sql = "update basic set sex = '$sex' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($grade != "") {
     $sql = "update basic set grade = '$grade' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($major != "") {
     $sql = "update basic set major = '$major' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($phone != "") {
     $sql = "update basic set phone = '$phone' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($wechat != "") {
     $sql = "update basic set wechat = '$wechat' where user_name = '$username'";
     mysql_query($sql);
   }
   if ($qq != "") {
     $sql = "update basic set qq = '$qq' where user_name = '$username'";
     mysql_query($sql);
   }
  }
  mysql_query($sql);
  mysql_close(); //关闭MySQL连接
?>
<meta http-equiv = "refresh" content = "0;url = index-information.php">
