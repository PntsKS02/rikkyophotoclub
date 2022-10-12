<?php
 try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
ini_set("memory_limit", "1024M");
session_start();
$picture1 =$_FILES['picture1'];
$tempfile1 = $picture1['tmp_name']; 
$picname1 = $picture1['name'];
$picsize1 = $picture1['size'];
$dirs = "img";
$iup = count($tempfile1);

    
for($i = 0; $i < $iup; $i++){
if (is_uploaded_file($tempfile1[$i])){
  move_uploaded_file($tempfile1[$i],"$dirs/$picname1[$i]"); 
$pictures = $picname1[$i];
$picturesize= $picsize1[$i];
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
    
    
    list($width, $height) = getimagesize('img/'.$pictures); 
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
    imagejpeg($image , 'img/R'.$pictures);
    imagejpeg($trimimage , 'img/trim'.$pictures);
   $file = 'img/R'.$pictures;
    $files2[$i] = $file;
  $squarefile ='img/trim'.$pictures;
    $squarefiles2[$i] = $squarefile;
         $type = "Height";
   $sql = "insert into prayforthedying(file,squarefile,type)values(?,?,?)";
		$pstmt = $pdo->prepare($sql); //SQLの実行
		$pstmt->bindParam('1', $file, PDO::PARAM_STR);
		$pstmt->bindParam('2', $squarefile, PDO::PARAM_STR);
		$pstmt->bindParam('3', $type, PDO::PARAM_STR);
        $pstmt->execute();
	 $rs = $pstmt->fetchall();
	 $S = $S + 1;
}
}
       unset($pdo);
}catch(PDOException $e){
	
}
?>  
<html lang = "ja"> <!--言語設定です--> 
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta charset = "utf-8">
        <meta name=”description” content="立教大学写真部の公式ページです。">
       <link rel="stylesheet" type="text/css" href="../css/spf2021.css" media="(min-width: 1100px)">         <link href="../css/spf2021M.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >         <link href="../css/spf2021T.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 1099px)" >

        <link rel="stylesheet" href="https://use.typekit.net/dll3oer.css">
        <meta name="twitter:card" content="summary" /> 
        <meta name="twitter:site" content="@Pnts_KS02" /> 
        <meta property="og:url" content="rikkyophotoclub.com/" /> 
        <meta property="og:title" content="SPF 2021 | Rikkyo Photo Club" /> 
        <meta property="og:description" content="立教大学写真部の公式ページです。" /> 
        <meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
        <title>SPF 2021 | Rikkyo Photo Club</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
            <script src="../js/easing.js"></script>
            <script src="../js/color.js"></script>
            <script src="../js/mousewheel.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139853085-2"></script>
            <script>
  (function(d) {
    var config = {
      kitId: 'bum6awv',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-139853085-2');
        </script>
        <script>
            
            window.onpageshow = function(event) {
	           if (event.persisted) {
		          window.location.reload();
               }
            };
            
            function ac(actions){
                window.location.assign("spf2021-" + actions);
            }
            function logout(){
                window.location.assign("spf2021-logoutA");
            }
        </script>
    </head>
    <body>
            <div id="gallery_title" onclick="toppage()">SPF</div>
            <div id="gallery_subtitle">Rikkyo Photo Club Exhibition 2021</div>
            <div id="area_mypage">
                <div id="area_title">作品の新規作成</div> 
                <div id="complete_sentence">作品が投稿されました！</div>
                <div id="button_2" onclick="ac('create')">続けて作品を投稿する</div>    
                <div id="button_2" onclick="ac('mypage')">マイページへ戻る</div>
                <div id="button_2" onclick="logout()">ログアウト</div>
        </div>
    </body>
</html>