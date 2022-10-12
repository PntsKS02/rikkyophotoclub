<?php
if(empty($_POST['password'])){
	$iv = "empty";	
}else{
	$Password = $_POST['password'];
$Member = $_POST['memberid'];
$key ="8192738235";
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
$Password2 = password_hash($Password,PASSWORD_BCRYPT);
$sql = "select pass from pass where name =?"; 
	$pstmt = $pdo->prepare($sql); 
	$pstmt->bindParam('1', $Member, PDO::PARAM_STR);
    $pstmt->execute();
    $rs = $pstmt->fetchall();
	if(empty($rs)){
		$iv = "notfound";	
	}else{
	foreach($rs as $result){
		$member["pass"] = $result["pass"];
	}
	$Password3 = $member["pass"];
	$sql = "SELECT id,name , AES_DECRYPT(UNHEX(?),?) AS password FROM pass";
	$npstmt = $pdo->prepare($sql);
	$npstmt->bindParam('1', $Password3, PDO::PARAM_STR);
	$npstmt->bindParam('2', $key, PDO::PARAM_STR);
    $npstmt->execute();
	$rs = $npstmt->fetchall();
	foreach($rs as $result){
		$member2["password"] = $result["password"];
	}
	$Password4 = $member2["password"];
if(password_verify($member2["password"],$Password2)){
$iv = "Valid";	
}else{
$iv = $member2["password"];	
}
}}catch(PDOException $e){
	 //エラー時
         echo $e->getMessage();
         exit(0);
     }
}
echo($iv);
?>