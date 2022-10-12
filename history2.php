<?php
$idNum = $_POST('data');
try{
        //追加事項の記入
        //PDOの設定
             $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        //PDOの実行
	$Top = 0;
	$sql = "select * from whatsnew where id = ?";
    $pstmt = $pdo->prepare($sql);
    $pstmt->bindParam('1', $idNum, PDO::PARAM_STR);
        $pstmt->execute();
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $id= $result["id"];
            $title = $result["title"];
            $sentence = $result["sentence"];
            $date = $result["date"];
        }
    $data_arr2 = array($id, $title,$senetnce,$date);
	echo json_encode($data_arr2);
        unset($pdo);
}catch(PDOException $e){
	
}
?>