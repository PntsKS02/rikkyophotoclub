<?php
 try{
    //追加事項の記入
    //PDOの設定
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
    $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
ini_set("memory_limit", "1024M");
session_start();
// 一時アップロード先ファイルパス
$file_tmp  = $_FILES["insertimg"]["tmp_name"];

// 正式保存先ファイルパス
$file_save = "/home/focus-on/www/rikkyophotoclub/img/" . $_FILES["insertimg"]["name"];



// ファイル移動
$result = @move_uploaded_file($file_tmp, $file_save);
if ( $result === true ) {
    echo "UPLOAD OK";
} else {
    echo "UPLOAD NG";
}

//
$pictures = $picname1;
$picturesize= $picsize1;
    var_dump($picturesize);
$S = 0;
$files = "";

	/* if($picturesize < 2400000){
         $zip = 1.5;
     }elseif($picturesize >= 2400000 && $picturesize < 6000000){
		 $zip = 2.4;
	 }elseif($picturesize >= 6000000 && $picturesize < 12000000){
		 $zip = 3.2;
	 }else{
		 $zip = 4;
	 } */
    
    
    list($width, $height) = getimagesize('img/'. $_FILES["insertimg"]["name"]); 
     if($width > $height){
    $zip = $width / 1000;
     }elseif($width < $height){
    $zip = $height / 1000;
     }elseif($width === $height){
    $zip = $height / 1000;
     }
    $baseImage = imagecreatefromjpeg('img/'.$pictures); 
    $image = imagecreatetruecolor($width/$zip, $height/$zip); 
    if($width > $height){
	$diff  = ($width - $height) * 0.5; 
    $diffW = $height;
    $diffH = $height;
    $diffY = 0;
    $diffX = $diff;
    $WH = 'Width';
}elseif($width < $height){
	$diff  = ($height - $width) * 0.5; 
    $diffW = $width;
    $diffH = $width;
	$diffX = 0;
    $diffY = $diff;
    $WH = 'Height';
}elseif($width === $height){
    $diffW = $width;
    $diffH = $height;
	$diffY = 0;
    $diffX = 0;
    $WH = 'Square';
}
$trimimage = imagecreatetruecolor($diffW/$zip,$diffH/$zip); 
    imagecopyresampled($image, $baseImage, 0, 0, 0, 0, $width / $zip, $height / $zip, $width, $height);
    imagecopyresampled($trimimage, $baseImage, 0, 0, $diffX, $diffY, $diffW/$zip, $diffH/$zip, $diffW, $diffH);
    var_dump($width);
    var_dump($height);
    
    // コピーした画像を出力する
    imagejpeg($image , 'img/R'.$_FILES["insertimg"]["name"]);
    imagejpeg($trimimage , 'img/trim'.$_FILES["insertimg"]["name"]);
   $file = 'img/R'.$_FILES["insertimg"]["name"];
  $squarefile ='img/trim'.$_FILES["insertimg"]["name"];
  $sql = "insert into historypics(file,squarefile,WH)values(?,?,?)";
  $pstmt = $pdo->prepare($sql); //SQLの実行
  $pstmt->bindParam('1', $file, PDO::PARAM_STR);
  $pstmt->bindParam('2', $squarefile, PDO::PARAM_STR);
  $pstmt->bindParam('3', $WH, PDO::PARAM_STR);
  $pstmt->execute();
$rs = $pstmt->fetchall();

}catch(PDOException $e){
	
}
?>