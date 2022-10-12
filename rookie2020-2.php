<?php
$num =$_POST['data'];
$sentence =$_POST['sentence'];
date_default_timezone_set('Asia/Tokyo');
$date = date("Y/m/d H:i:s");
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
                $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
	$sql = "insert into rookiecomment(pictureid,sentence,time) values(?,?,?)";
	$pstmt = $pdo->prepare($sql); //SQLの実行
		$pstmt->bindParam('1', $num, PDO::PARAM_STR);
		$pstmt->bindParam('2', $sentence, PDO::PARAM_STR);
		$pstmt->bindParam('3', $date, PDO::PARAM_STR);
        $pstmt->execute();
	 $rs = $pstmt->fetchall();
unset($pdo);
	
}catch(PDOException $e){
}

?>