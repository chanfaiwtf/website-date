<?php
$db = mysql_connect('localhost','root','') or die('未能成功链接到数据库。');
mysql_select_db('test',$db) or die(mysql_error($db));

$dir = '\images';//图片保存路径

if($_FILES['upload']['error'] != UPLOAD_ERR_OK)
{
    switch($_FILES['upload']['error'])
    {
        case UPLOAD_ERR_INI_SIZE: //其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值
            die('上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。');
        break;
        case UPLOAD_ERR_FORM_SIZE: //其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值
            die('上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。');
        break;
        case UPLOAD_ERR_PARTIAL: //其值为 3，文件只有部分被上传
            die('文件未能全部成功上传。');
        break;
        case UPLOAD_ERR_NO_FILE: //其值为 4，没有文件被上传
            die('没有文件被上传。');
        break;
        case UPLOAD_ERR_NO_TMP_DIR: //其值为 6，找不到临时文件夹
            die('服务器找不到临时文件夹。');
        break;
        case UPLOAD_ERR_CANT_WRITE: //其值为 7，文件写入失败
            die('文件写入服务器失败。');
        break;
        case UPLOAD_ERR_EXTENSION: //其他异常
            die('由于发生异常，文件上传中止。');
        break;
    }
}

//$image_username = $_SESSION['suohai'];
$image_date = date('Y-m-D');

list($width,$height,$type,$attr) = getimagesize($_FILES['upload']['tmp_name']);

switch($type)
{
    case IMAGETYPE_GIF:
        $image = imagecreatefromgif($_FILES['upload']['tmp_name']) or die('不支持该上传文件的格式。');
        $ext = '.gif';
    break;
    case IMAGETYPE_JPEG:
        $image = imagecreatefromjpeg($_FILES['upload']['tmp_name']) or die('不支持该上传文件的格式。');
        $ext = '.jpg';
    break;
    case IMAGETYPE_PNG:
        $image = imagecreatefrompng($_FILES['upload']['tmp_name']) or die('不支持该上传文件的格式。');
        $ext = '.png';
    break;
    default    :
        die('不支持该上传文件的格式。');
}

$query = 'insert into images(image_date) values (now())';
mysql_query($query , $db) or die(mysql_error($db));
$last_id = mysql_insert_id();
$imagename = $last_id;
$query = 'update images set image_filename="'.$imagename.'" where image_id='.$last_id;
mysql_query($query , $db) or die(mysql_error($db));

switch($type)
{
    case IMAGETYPE_GIF:
        imagegif($image,$dir.'/'.$imagename);
    break;
    case IMAGETYPE_JPEG:
        imagejpeg($image,$dir.'/'.$imagename);
    break;
    case IMAGETYPE_PNG:
        imagepng($image,$dir.'/'.$imagename);
    break;
}

imagedestroy($image);
?>
