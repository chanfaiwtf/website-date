<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$db = mysql_connect('localhost','root','') or die('未能成功链接到数据库。');
mysql_select_db('test',$db) or die(mysql_error($db));

$username = $_COOKIE['username'];
$query1 = "SELECT * FROM basic WHERE user_name=$username";
$rs1 = mysql_query($query1 , $db);
$row1 = mysql_fetch_array($rs1);
$usersex = $row1['sex'];
if($usersex=="Male"){
	$usersexpref = "Female";
}else{
	$usersexpref = "Male";
}

$query2 = "SELECT * FROM basic";
$rs2 = mysql_query($query2 , $db);
$myfile = fopen("testfile.txt","w") or die("Unable to open file!");
while($row2 = mysql_fetch_array($rs2)){
	$txt = $row2['user_name'];
	fwrite($myfile,$row1['username']." ");
	if($row2['sex']=="Male"){
		fwrite($myfile,"Female"." ");
	}else{
		fwrite($myfile,"Male"." ");
	}
	fwrite($myfile,$row1['sex']." ");
	fwrite($myfile, $row2['hobby_lifestyle']." ");
	fwrite($myfile, $row2['hobby_sports']." ");
	fwrite($myfile, $row2['hobby_entertain']." ");
	fwrite($myfile, $row2['hobby_eat']." ");
	fwrite($myfile, "\r\n");
}
fclose($myfile);

$commandarr = $username." ".$usersexpref;
$command = 'UserCFM '.$commandarr;
$return = passthru($command);

$myfile2 = fopen("rs.txt","w") or die("Unable to open file!");
fwrite($myfile2,$return);
fclose($myfile2);

$rank = 0;
$myfile3 = fopen("rs.txt", "r") or die("Unable to open file!");
//while (!feof($myfile3)) {
	# code...
	$rank += 1;
	$usernamerank = fgets($myfile3);
	$query3 = "UPDATE result SET pair1 = $usernamerank WHERE username = $username";
	mysql_query($query3);
//}
fclose($myfile3);
?>
