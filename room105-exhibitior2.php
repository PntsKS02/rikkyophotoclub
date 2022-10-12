<?php
session_start();
    if (isset($_SESSION['id'])){
        
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM room105users order by first_roma";
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){ 
            $room105["userID"] = $result["userID"];
            $room105["firstname"] = $result["firstname"];
            $room105["middlename"] = $result["middlename"];
            $room105["faculty"] = $result["faculty"];
            $room105["camera"] = $result["camera"]; 
            $room105["theme"] = $result["theme"]; 
            $room105["comment"] = nl2br($result["comment"]); 
            $room105["colors"] = $result["colors"]; 
            $room105["first_roma"] = $result["first_roma"]; 
            $room105["middle_roma"] = $result["middle_roma"]; 
            $room105["instagram"] = $result["instagram"]; 
            $room105["twitter"] = $result["twitter"]; 
            $room105s[] = $room105; 
    }
  
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
                <div id="area_title">参加者一覧</div> </div>
            <div id="area_mypage">
               <?php
	           foreach($room105s as $room105){
                   $camera = json_decode($room105["camera"]);
                   $countnum = count($camera);
		?>
                <div id="user_box" style = "border-top :3px solid <?= $room105["colors"]?>">
                    <div id="user_name"><?= $room105["middlename"]?>  <?= $room105["firstname"]?></div>
                    <div id="user_2"><?= $room105["first_roma"]?>  <?= $room105["middle_roma"]?></div>
                    <div id="user_2">ID:<?= $room105["userID"]?></div>
                     <div id="user_2">学部：<?= $room105["faculty"]?></div>
                   <div id="user_2">展示テーマ：<?= $room105["theme"]?></div>
                   <div id="user_2">カメラ：<br>
                <?php 
    for($i = 0; $i < $countnum; $i++){ 
        $i2 = $i + 1;
            ?> 
		<?= $camera[$i] ?><br>
           <?php
    } 
            ?></div>
                   <div id="user_2">ひとこと：<?= $room105["comment"]?></div>
                   <div id="user_2">Instagram：<?= $room105["instagram"]?></div>
                </div>
                <?php
               }
		?>
                <div id="button_2" onclick="login()">マイページへ</div>
        </div>
    </body>
</html>