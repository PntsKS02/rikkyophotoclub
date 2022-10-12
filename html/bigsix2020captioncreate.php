<?php
try{
	$Num = $_GET["Num"];
        //追加事項の記入
        //PDOの設定
             $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        //PDOの実行
	$Top = 0;
	$start = 1 + ($Num - 1) * 8;
	$end = $start + 7;
	$sql = "select * from bigsix2020check where id between ? and ?";
    $pstmt = $pdo->prepare($sql);
	$pstmt->bindParam('1', $start, PDO::PARAM_STR);
	$pstmt->bindParam('2', $end, PDO::PARAM_STR);
        $pstmt->execute();
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $bigsix2020["id"] = $result["id"];
           $bigsix2020["firstname"]  = $result["firstname"];
            $bigsix2020["lastname"] = $result["lastname"];
            $bigsix2020["university"] = $result["university"];
            $bigsix2020["year"] = $result["year"];
            $bigsix2020["title"] = $result["title"];
            $bigsix2020s[] = $bigsix2020;
        }
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
   <link rel="stylesheet" type="text/css" href="../css/bigsixcreate.css" media="screen">
   <link rel="stylesheet" type="text/css" href="../css/bigsixcreate.css" media="print">
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="Top | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/gazou2.png" /> 
    <title>六大学写真展　フォーム</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script type="text/javascript" src="../js/jquery.qrcode.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/color.js"></script>
    <script src="../js/mousewheel.js"></script>
    <script>
        switch 
	</script>
	</head>
	<body>
	<?php
		$Num = 1;
	foreach($bigsix2020s as $bigsix2020){
		$classnum = 'qcdemo'.$Num;
		$long = strlen($bigsix2020["picturetitle"]);
		if($long >= 30){
			
		}
        switch($bigsix2020["university"] ){
            case "立教":
                $color = "#884797";
                break;
            case "早稲田":
                $color = "#682a2b";
                break;
            case "慶應":
                $color = "#c73526";
                break;
            case "東京":
                $color = "#0080ff";
                break;
            case "法政":
                $color = "#ff9000";
                break;
            case "明治":
                $color = "#560f49";
                break;
        }
		?>
		<div id="captiongroup">
		<div id="universitycolor" style="background:<?= $color ?>;"></div>
		<div id="logo">EPOCH</div>
		<div id="caption"><?= $bigsix2020["title"] ?></div>
		<div id="faculty"><?= $bigsix2020["university"] ?>大学</div><div id="year"><?= $bigsix2020["year"] ?>年</div>
			<div id="name"><?= $bigsix2020["lastname"] ?>   <?= $bigsix2020["firstname"] ?></div>
		</div>
		<?php 
			$Num = $Num + 1;
	}
		?>
	</body>
</html>