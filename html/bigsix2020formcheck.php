<?php
$lastname =$_POST['lastname'];
$firstname =$_POST['firstname'];
$university =$_POST['university'];
$year =$_POST['year'];
$title =$_POST['title'];

try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
                $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
	$sql = "insert into bigsix2020(firstname,lastname,university,year,title) values(?,?,?,?,?)";
	$pstmt = $pdo->prepare($sql); //SQLの実行
		$pstmt->bindParam('1', $firstname, PDO::PARAM_STR);
		$pstmt->bindParam('2', $lastname, PDO::PARAM_STR);
		$pstmt->bindParam('3', $university, PDO::PARAM_STR);
		$pstmt->bindParam('4', $year, PDO::PARAM_STR);
		$pstmt->bindParam('5', $title, PDO::PARAM_STR);
        $pstmt->execute();
	 $rs = $pstmt->fetchall();
unset($pdo);
	
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
<meta property="og:image" content="https://focus-on-pic.com/gazou2.png" /> 
    <title>六大学写真展 2020</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/color.js"></script>
    <script src="../js/mousewheel.js"></script>
 <script>
		$(window).on('load',function(){
			setTimeout(function(){
		window.location.href = 'bigsix2020form.php';
		},2000);
		});
		</script> 
	</head>
	<body>
<div id="title"></div>
<div id="caption">
			<div id="title2">Upload Success</div>
		</div>
	</body>
</html>