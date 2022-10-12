<?php
session_start();
    if (isset($_SESSION['id'])){
        
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$faculty = $_POST["faculty"];
$camera = $_POST["camera"];
$colors = $_POST["colors"];
$theme = $_POST["theme"];
$theme_r = $_POST["theme_r"];
$comment = $_POST["comment"];
$twitter = $_POST["twitter"];
$instagram = $_POST["instagram"];
$cameraj = json_encode($camera);


    try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
   $sql = "UPDATE room105users SET firstname = ?,middlename = ?,faculty = ?,camera = ?,theme = ?,theme_r = ?,comment = ?,twitter = ?,instagram = ?,colors = ?  WHERE userID = ?";
			
		$pstmt = $pdo->prepare($sql); //SQLの実行
		$pstmt->bindParam('1', $firstname, PDO::PARAM_STR);
		$pstmt->bindParam('2', $middlename, PDO::PARAM_STR);
		$pstmt->bindParam('3', $faculty, PDO::PARAM_STR);
		$pstmt->bindParam('4', $cameraj, PDO::PARAM_STR);
		$pstmt->bindParam('5', $theme, PDO::PARAM_STR);
		$pstmt->bindParam('6', $theme_r, PDO::PARAM_STR);
		$pstmt->bindParam('7', $comment, PDO::PARAM_STR);
		$pstmt->bindParam('8', $twitter, PDO::PARAM_STR);
		$pstmt->bindParam('9', $instagram, PDO::PARAM_STR);
		$pstmt->bindParam('10', $colors, PDO::PARAM_STR);
        $pstmt->bindParam('11', $_SESSION['id'], PDO::PARAM_STR);
        $pstmt->execute();
	 $rs = $pstmt->fetchall();
    unset($pdo);
}catch(PDOException $e){
	
}
    
}else{
        header("location: room105-login");
    }
    ?>
    <html lang = "ja"> <!--言語設定です--> 
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta charset = "utf-8">
        <meta name=”description” content="立教大学写真部の公式ページです。">
       <link rel="stylesheet" type="text/css" href="../css/room105.css" media="(min-width: 1100px)">         
        <link href="../css/room105M.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >         
        <link href="../css/room105T.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 1099px)" >
        <link rel="stylesheet" href="https://use.typekit.net/xkz2aes.css">
        <link rel="stylesheet" href="https://use.typekit.net/dll3oer.css">
        <meta name="twitter:card" content="summary" /> 
        <meta name="twitter:site" content="@Pnts_KS02" /> 
        <meta property="og:url" content="rikkyophotoclub.com/" /> 
        <meta property="og:title" content="ROOM105 | Rikkyo Photo Club" /> 
        <meta property="og:description" content="立教大学写真部の公式ページです。" /> 
        <meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
        <title>ROOM105 | Rikkyo Photo Club</title>
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
       kitId: 'pts2zec',
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
            
            function login(){
                window.location.assign("room105-mypage");
            }
        </script>
    </head>
    <body>
           <a href = "room105"><div id="gallery_title" onclick="toppage()">ROOM105</div>
            <div id="gallery_subtitle">Rikkyo Photo Club<br>Graduate Exhibition 2022</div></a>
            <div id="area_mypage" >
                <div id="area_title">基本情報の編集</div> </div>
            <div id="area_mypage">
                <div id="complete_sentence">修正が完了しました！</div>
                <div id="button_2" onclick="login()">マイページへ</div>
        </div>
    </body>
</html>