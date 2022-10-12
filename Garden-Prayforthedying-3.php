<?php
$Num =$_POST['data'];
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM prayforthedying LIMIT 1 OFFSET $Num";    
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute();  
         $rs = $pstmt->fetchall();
	foreach($rs as $result){ 
            $garden["id"] = $result["id"]; 
            $garden["file"] = $result["file"]; 
            $garden["squarefile"] = $result["squarefile"]; 
            $garden["type"] = $result["type"];
        if(!$garden){
            
        }else{
            $gardens[] = $garden; 
        }
    }
  $data_arr = $gardens; 
	echo json_encode($data_arr);
    unset($pdo); 
}catch(PDOException $e){
}

?> 