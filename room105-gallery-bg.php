<?php
$Num =$_POST['Num'];
$User =$_POST['User'];
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM room105users where instagram = ?";
    $pstmt = $pdo->prepare($sql);
    $pstmt->bindParam('1', $User, PDO::PARAM_STR);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){ 
            $room105["token"] = $result["token"]; 
            $room105s[] = $room105; 
    }
  
    unset($pdo);
}catch(PDOException $e){
}
$access_token = $room105["token"];
$url = "https://graph.instagram.com/me/media?fields=id,caption,permalink,media_url&access_token=".$access_token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
echo $response;
/* var_dump($photo_datas["data"]); */
?> 