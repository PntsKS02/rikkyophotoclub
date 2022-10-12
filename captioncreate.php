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
	$sql = "select * from spf2019 where id between ? and ?";
    $pstmt = $pdo->prepare($sql);
	$pstmt->bindParam('1', $start, PDO::PARAM_STR);
	$pstmt->bindParam('2', $end, PDO::PARAM_STR);
        $pstmt->execute();
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $spf2019["id"] = $result["id"];
            $personal = $result["personal"];
		    $spf2019['personal'] = explode(',',$personal);
            $spf2019["picturetitle"] = $result["picturetitle"];
            $picturestyle = $result["picturestyle"];
		    $spf2019['picturestyle'] = explode(',',$picturestyle);
           $file = $result["file"];
		    $spf2019['file'] = explode(',',$file);
            $spf2019["caption"] = $result["caption"];
            $spf2019s[] = $spf2019;
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
   <link rel="stylesheet" type="text/css" href="../css/create.css" media="screen">
   <link rel="stylesheet" type="text/css" href="../css/create.css" media="print">
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="Top | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/gazou2.png" /> 
    <title>About us | Rikkyo Photo Club</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script type="text/javascript" src="../js/jquery.qrcode.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/color.js"></script>
    <script src="../js/mousewheel.js"></script>
    <script>
		$(document).ready(function(){
			Number = <?= $Num ?>;
			QRn = (Number - 1) * 8;
			QR = 1;
     while(QR < 9){
		 QRs = QR + QRn;
		 qcdemo = ".qcdemo" + QR;
		 text = 'https://rikkyophotoclub.com/spf2019caption?Num=' + QRs;
     $(qcdemo).qrcode({                       
         width:130,                     
         height:130,                      
         text:text
   }); 
			QR = QR + 1;
	 }
		});
	</script>
	</head>
	<body>
	<?php
		$Num = 1;
	foreach($spf2019s as $spf2019){
		$classnum = 'qcdemo'.$Num;
		$long = strlen($spf2019["picturetitle"]);
		if($long >= 30){
			
		}
		?>
		<div id="captiongroup">
		<div id="caption"><?= $spf2019["picturetitle"] ?></div>
		<div id="faculty"><?= $spf2019["personal"][1] ?></div><div id="year"><?= $spf2019["personal"][2] ?></div>
			<div id="name"><?= $spf2019["personal"][0] ?></div>
			<div id="sentence">QRコードより説明文をご覧いただけます。</div>
			<div id="qcdemo2" class = '<?= $classnum ?>'></div>
		</div>
		<?php 
			$Num = $Num + 1;
	}
		?>
	</body>
</html>