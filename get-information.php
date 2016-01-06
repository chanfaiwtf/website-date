<?php
$username=$_COOKIE['username'];
#echo $month;
$mysql_server_name='localhost'; //改成自己的mysql数据库服务器
$mysql_username='root'; //改成自己的mysql数据库用户名
$mysql_password=''; //改成自己的mysql数据库密码
$mysql_database='test'; //改成自己的mysql数据库名
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库

mysql_query("set names 'utf8'"); //数据库输出编码

mysql_select_db($mysql_database); //打开数据库

$sql = "select * from user";
mysql_query($sql);
while($row= mysql_fetch_array($rs)){
if($row['user_name']==$username){
$email=$row['email'];
$nickname=$row['nickname'];
}
}

$sql = "select * from basic";
mysql_query($sql);
while($row= mysql_fetch_array($rs)){
if($row['user_name']==$username){
$year=$row['year'];
$month=$row['month'];
$date=$row['date'];
$height=$row['height'];
$weight=$row['weight'];
$sex=$row['sex'];
$grade=$row['grade'];
$major=$row['major'];
$phone=$row['phone'];
$wechat=$row['wechat'];
$qq=$row['qq'];
}
}

$sql = "select * from selfintroduction";
mysql_query($sql);
while($row= mysql_fetch_array($rs)){
if($row['user_name']==$username){
$introduction=$row['introduction'];
}
}
mysql_close(); //关闭MySQL连接

?>
