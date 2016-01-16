<?php
error_reporting(E_ALL ^ E_DEPRECATED);
//initial
$lifestyle = 5.0;
$sports = 5.0;
$entertain = 5.0;
$eat = 5.0;
//liftstyle part
if (isset($_POST['check_01_01'])) {
	$lifestyle += 1.5;
}
if (isset($_POST['check_01_02'])) {
	$lifestyle -= 1.0;
}
if (isset($_POST['check_01_03'])) {
	$lifestyle -= 1.0;
}
if (isset($_POST['check_01_04'])) {
	$lifestyle -= 2.0;
}
if (isset($_POST['check_01_05'])) {
	$lifestyle += 2.0;
}
if (isset($_POST['check_01_06'])) {
	$lifestyle += 2.0;
}
if (isset($_POST['check_01_07'])) {
	$lifestyle -= 1.0;
}
if (isset($_POST['check_01_08'])) {
	$lifestyle += 2.0;
}
if (isset($_POST['check_01_09'])) {
	$lifestyle += 2.0;
}
if (isset($_POST['check_01_10'])) {
	$lifestyle -= 1.0;
}
if (isset($_POST['check_01_11'])) {
	$lifestyle -= 2.0;
}
if (isset($_POST['check_01_12'])) {
	$lifestyle += 1.0;
}
//sports part
if (isset($_POST['check_02_01'])) {
	$sports -=2.0;
}
if (isset($_POST['check_02_02'])) {
	$sports += 2.0;
}
if (isset($_POST['check_02_03'])) {
	$sports += 1.0;
}
if (isset($_POST['check_02_04'])) {
	$sports -= 1.0;
}
if (isset($_POST['check_02_05'])) {
	$sports -= 2.0;
}
if (isset($_POST['check_02_06'])) {
	$sports += 2.0;
}
if (isset($_POST['check_02_07'])) {
	$sports += 1.5;
}
if (isset($_POST['check_02_08'])) {
	$sports -= 1.0;
}
if (isset($_POST['check_02_09'])) {
	$sports -= 1.5;
}
if (isset($_POST['check_02_10'])) {
	$sports += 1.5;
}
if (isset($_POST['check_02_11'])) {
	$sports -= 1.0;
}
if (isset($_POST['check_02_12'])) {
	$sports += 1.0;
}
//entertainment part
if (isset($_POST['check_03_01'])) {
	$sports -=2.0;
}
if (isset($_POST['check_03_02'])) {
	$entertain -= 1.0;
}
if (isset($_POST['check_03_03'])) {
	$entertain += 0.5;
}
if (isset($_POST['check_03_04'])) {
	$entertain -= 1.5;
}
if (isset($_POST['check_03_05'])) {
	$entertain -= 1.0;
}
if (isset($_POST['check_03_06'])) {
	$entertain += 2.0;
}
if (isset($_POST['check_03_07'])) {
	$entertain += 1.5;
}
if (isset($_POST['check_03_08'])) {
	$entertain += 1.0;
}
if (isset($_POST['check_03_09'])) {
	$entertain -= 1.5;
}
if (isset($_POST['check_03_10'])) {
	$entertain += 1.0;
}
if (isset($_POST['check_03_11'])) {
	$entertain -= 1.5;
}
if (isset($_POST['check_03_12'])) {
	$entertain += 2.0;
}
//Eating part
if (isset($_POST['check_04_01'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_02'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_03'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_04'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_05'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_06'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_07'])) {
	$eat+= 0.5;
}
if (isset($_POST['check_04_08'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_09'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_10'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_11'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_12'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_13'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_14'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_15'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_16'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_17'])) {
	$eat += 0.5;
}
if (isset($_POST['check_04_18'])) {
	$eat += 0.5;
}

//initial database
$db = mysql_connect('localhost','root','') or die('未能成功链接到数据库。');
mysql_select_db('test',$db) or die(mysql_error($db));

//$username = $_COOKIE['username'];
$username = "Eric";
$query = 'insert into hobby(username,hobby_lifestyle,hobby_sports,hobby_entertain,hobby_eat) values ("'.$username.'","'.$lifestyle.'","'.$sports.'","'.$entertain.'","'.$eat.'")';
mysql_query($query , $db) or die(mysql_error($db));

mysql_close();

echo "<meta http-equiv='refresh' content='0;url=index.html'>";

?>