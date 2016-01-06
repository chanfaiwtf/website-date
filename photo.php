<html>
<body>
<?php
$upload=$_POST['upload'];
$username=$_COOKIE['username'];
$mysql_server_name='localhost'; //改成自己的mysql数据库服务器
$mysql_username='root'; //改成自己的mysql数据库用户名
$mysql_password=''; //改成自己的mysql数据库密码
$mysql_database='test'; //改成自己的mysql数据库名
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库

mysql_query("set names 'utf8'"); //数据库输出编码

mysql_select_db($mysql_database); //打开数据库
$sql = "insert into photo (user_name,address) values ('$username','$address')";
mysql_query($sql);

mysql_close(); //关闭MySQL连接
#setcookie('username',$username);
$url = "finish-information-basic.html";
#<meta http-equiv="refresh" content="10;url=finish-information-photo.html">
?>

</body>
</html>
