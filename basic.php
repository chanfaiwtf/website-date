<html>
<body>
<?php
$year=$_POST['year'];
$month=$_POST['month'];
$date=$_POST['date'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$sex=$_POST['sex'];
$grade=$_POST['grade'];
$major=$_POST['major'];
$phone=$_POST['phone'];
$wechat=$_POST['wechat'];
$qq=$_POST['qq'];
if($sex==1){
$sex="male";
}
else{
$sex="famale";
}
$username=$_COOKIE['username'];
#echo $month;
$mysql_server_name='localhost'; //改成自己的mysql数据库服务器
$mysql_username='root'; //改成自己的mysql数据库用户名
$mysql_password='grace1380'; //改成自己的mysql数据库密码
$mysql_database='test'; //改成自己的mysql数据库名
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
 
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库
$sql = "insert into basic (user_name,year,month,date,height,weight,sex,grade,major,phone,wechat,qq) values ('$username','$year','$month','$date','$height','$weight','$sex','$grade','$major','$phone','$wechat','$qq')";
mysql_query($sql);
 
mysql_close(); //关闭MySQL连接
?>
<meta http-equiv="refresh" content="0;url=finish-information-basic.html">
</body>
</html>
