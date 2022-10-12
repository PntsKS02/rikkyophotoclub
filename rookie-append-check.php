<?php
$firstname =$_POST['firstname'];
$middlename =$_POST['middlename'];
$faculty =$_POST['faculty'];
$grade =$_POST['grade'];
$title =$_POST['title'];
$mainsentence =$_POST['mainsentence'];
$style =$_POST['style'];
$picture1 =$_POST['picture1'];
$picture2 =$_POST['picture2'];
$picture3 =$_POST['picture3'];
$picture4 =$_POST['picture4'];
$picture5 =$_POST['picture5'];
$thumbnailpicture1 =$_POST['thumbnailpicture1'];
$thumbnailpicture2 =$_POST['thumbnailpicture2'];
$thumbnailpicture3 =$_POST['thumbnailpicture3'];
$thumbnailpicture4 =$_POST['thumbnailpicture4'];
$thumbnailpicture5 =$_POST['thumbnailpicture5'];
$style = "pic";
$file = $picture1.",".$thumbnailpicture1.",".$picture2.",".$thumbnailpicture2.",".$picture3.",".$thumbnailpicture3.",".$picture4.",".$thumbnailpicture4.",".$picture5.",".$thumbnailpicture5;
$Jid ="4";
$DId ="4";
$S = 0;
var_dump($file);
var_dump($file);
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
       $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
			$sql = "insert into rookie2020(title,firstname,middlename,faculty,grade,picturestyle,caption,file)values(?,?,?,?,?,?,?,?)";
			
		$pstmt = $pdo->prepare($sql); //SQLの実行
		$pstmt->bindParam('1', $title, PDO::PARAM_STR);
		$pstmt->bindParam('2', $firstname, PDO::PARAM_STR);
		$pstmt->bindParam('3', $middlename, PDO::PARAM_STR);
		$pstmt->bindParam('4', $faculty, PDO::PARAM_STR);
		$pstmt->bindParam('5', $grade, PDO::PARAM_STR);
		$pstmt->bindParam('6', $style, PDO::PARAM_STR);
		$pstmt->bindParam('7', $mainsentence, PDO::PARAM_STR);
		$pstmt->bindParam('8', $file, PDO::PARAM_STR);
        $pstmt->execute();
	 $rs = $pstmt->fetchall();
unset($sql); 
	
}catch(PDOException $e){
} 
?> 
<!DOCTYPE html> 
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="立教大学写真部の公式ページです。">
   <link rel="stylesheet" type="text/css" href="../css/spf-CP.css" media="(min-width: 800px)">
   <link href="../css/spf-CP.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="Top | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/img/camera23.jpg" /> 
    <title>About us | Rikkyo Photo Club</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/color.js"></script>
    <script src="../js/mousewheel.js"></script>
    <script>
        function back(){
            window.location.href = "rookie-append.php";
        }
		</script>
	</head>
	<body>
<div id="title">Append to Journey</div>
<div id="caption5">
			<div id="title2">Upload Success</div>
			<div id="click" onclick="back()" >投稿ページへ戻る</div>
		</div>
	</body>
</html>