<?php
 try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
     for($FN = 1; $FN < 66; $FN++){
         $file = "R".$FN.".jpg";
         $squarefile = "trim".$FN.".jpg";
         $type = "Height";
   $sql = "insert into prayforthedying(file,squarefile,type)values(?,?,?)";
		$pstmt = $pdo->prepare($sql); //SQLの実行
		$pstmt->bindParam('1', $file, PDO::PARAM_STR);
		$pstmt->bindParam('2', $squarefile, PDO::PARAM_STR);
		$pstmt->bindParam('3', $type, PDO::PARAM_STR);
        $pstmt->execute();
	 $rs = $pstmt->fetchall();
     }
    unset($pdo);
}catch(PDOException $e){
	
}
    
?>