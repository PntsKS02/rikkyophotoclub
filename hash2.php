<?php
$PS =$_POST['PS'];
$hash = password_hash($_POST['PS'], PASSWORD_DEFAULT);
var_dump($hash);
?>