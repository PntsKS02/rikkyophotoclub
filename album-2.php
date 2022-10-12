<?php
$Num =$_POST['Num'];
$tablename =$_POST['table'];
$Num = $Num - 2;
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    if($Num < 0){
    $sql = "SELECT * FROM $tablename LIMIT 2";    
    }else{
    $sql = "SELECT * FROM $tablename LIMIT 3 offset $Num";
    }
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute();  
         $rs = $pstmt->fetchall();
	foreach($rs as $result){ 
            $album["id"] = $result["id"]; 
            $album["file"] = $result["file"]; 
            $album["squarefile"] = $result["squarefile"]; 
            $album["type"] = $result["type"];
        if(!$album){
            
        }else{
            $albums[] = $album; 
        }
    }
  $data_arr = $albums; 
	echo json_encode($data_arr);
    unset($pdo); 
}catch(PDOException $e){
}

?> 