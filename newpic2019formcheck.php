<?php
$namae =$_POST['namae'];
$faculty =$_POST['faculty'];
$year =$_POST['year'];
$title =$_POST['title'];
$picture =$_POST['picture'];
$picture1 =$_FILES['picture1'];
$caption =$_POST['caption'];
$tempfile = $picture1['tmp_name']; 
$picname = $picture1['name'];
$dirs = "../img";
var_dump($_FILES['picture1']);
if (is_uploaded_file($tempfile)) {
  move_uploaded_file($tempfile,"$dirs/$picname"); 
	var_dump("SUCCEED");
	var_dump("$dirs/$picname");
 /* move_uploaded_file($_FILES['picture2']['tmp_name'], '/var/www/img/');
  move_uploaded_file($_FILES['picture3']['tmp_name'], '/var/www/img/');
  move_uploaded_file($_FILES['picture4']['tmp_name'], '/var/www/img/'); */
    } else {
      var_dump("FAILED");
    } 
?>