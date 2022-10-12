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
    <title>About us | Rikkyo Photo Club</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/color.js"></script>
    <script src="../js/mousewheel.js"></script>
    <script>
		
		</script>
	</head>
	<body>
<div id="title">新人展2019</div>

	<ul class="menubar">
	<div id="close" onclick="closed()">✕</div>
		<li><a href="index.php">Top</a></li>
		 
		<li class="activate2">History</li> 
		<li><a href="about.php">About Us</a></li>
		<li>Activities</li>
		<li class="activate">Member</li>
		<li>Exhibition</li>
		<li>Portfolio</li>
		<li>SNS/Link</li>
	</ul>
		<div id="caption">
			<div id="title2">Form</div>
			<form id="sform" method="post" action="newpic2019formcheck.php" enctype="multipart/form-data">
				名前:<input type="text" name="namae">
				学部:<input type="text" name="faculity">
				学科:<input type="text" name="year"> 
				写真タイトル:<input type="text" name="title">
				デジタル写真の方は写真を選択してください。<br> 
				写真1:<input type="file" name="picture1">
				キャプション:<textarea rows = 6 name="caption"></textarea>
				<input type="submit" alt="決定">
			</form>
		</div>
	</body>
</html>