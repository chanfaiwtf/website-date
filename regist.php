<?php
$username = $_POST['reg-username'];
$nickname = $_POST['reg-nickname'];
$password = $_POST['reg-password'];
$email = $_POST['reg-email'];
$mysql_server_name='localhost'; //改成自己的mysql数据库服务器
$mysql_username='root'; //改成自己的mysql数据库用户名
$mysql_password=''; //改成自己的mysql数据库密码
$mysql_database='test'; //改成自己的mysql数据库名
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库

mysql_query("set names 'utf8'"); //数据库输出编码

mysql_select_db($mysql_database); //打开数据库
$sql = "insert into basic (user_name,year,month,date,height,weight,sex,grade,major,phone,wechat,qq,hobby_lifestyle,hobby_sports,hobby_entertain,hobby_eat) values ('$username','','','','','','','','','','','','','','','')";
mysql_query($sql);
$sql = "insert into user (user_name,password,email,nickname) values ('$username','$password','$email','$nickname')";
mysql_query($sql);
$sql = "insert into selfintroduction (user_name,introduction) values ('$username','')";
mysql_query($sql);
$sql = "insert into result (username,pair1) values ('$username','')";
mysql_query($sql);

mysql_close(); //关闭MySQL连接
setcookie('username',$username);
$url = "finish-information-basic.html";
?>
<meta http-equiv="refresh" content="0;url=index.php">
