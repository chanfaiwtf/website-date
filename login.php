<html>
<body>
<?php
$username = $_POST['input-username'];
$password = $_POST['input-password'];
$mysql_server_name='localhost'; //改成自己的mysql数据库服务器
$mysql_username='root'; //改成自己的mysql数据库用户名
$mysql_password='grace1380'; //改成自己的mysql数据库密码
$mysql_database='test'; //改成自己的mysql数据库名
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
 
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库
$sql = "select * from user";
$rs=mysql_query($sql);
if(!$rs){
mysql_close(); //关闭MySQL连接
echo "<meta http-equiv=refresh content='0;url=login.html'>";
#echo "no this user";
}
else{
$is=true;
while($row= mysql_fetch_array($rs)){
if($row['user_name']==$username&&$row['password']==$password){
echo "<meta http-equiv=refresh content='0;url=index.html'>";
#echo "success";
mysql_close(); //关闭MySQL连接
setcookie('username',$username);
$is=false;
}
}
if($is)
{
#echo "wrong password";
mysql_close(); //关闭MySQL连接
echo "<meta http-equiv=refresh content='0;url=login.html'>";
}
}
$url = "finish-information-basic.html";
?>
</body>
</html>
