<?php
$WH =$_POST['WH'];
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        //PDOの実行
	$Top = 0;
    
    $sql = "select count(*) as cnt from spf2021pictures where WH = ?";
	$pstmt = $pdo->prepare($sql);

    $pstmt->bindParam('1',$WH, PDO::PARAM_STR);
        $pstmt->execute();
         $rs = $pstmt->fetchall();
    foreach($rs as $result){ 
    $countw= $result["cnt"];
    }
    $Num = rand(0,$countw - 1); 
    
	$sql = "select * from spf2021pictures where WH = :WH LIMIT $Num, 1";
    $pstmt = $pdo->prepare($sql);
   
    $pstmt->bindParam(':WH', $WH, PDO::PARAM_STR);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $spf2020["id"] = $result["id"];
            $spf2020["firstname"] = $result["firstname"];
            $spf2020["middlename"] = $result["middlename"];
            $spf2020["picturename"] = $result["picturename"];
            $spf2020["file"] = $result["file"];
            $spf2020["squarefile"] = $result["squarefile"];
            $spf2020["WH"] = $result["WH"];
            $spf2020s[] = $spf2020;
        }
    $file = $spf2020["file"];
      echo json_encode($file);
        unset($pdo);
}catch(PDOException $e){
	
}

?>