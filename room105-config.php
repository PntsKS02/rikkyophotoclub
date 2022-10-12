<?php
session_start();
    if (isset($_SESSION['id'])){
        
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM room105users WHERE userID = ?";
    $pstmt = $pdo->prepare($sql);
    $pstmt->bindParam('1', $_SESSION["id"], PDO::PARAM_STR);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){ 
            $room105["firstname"] = $result["firstname"];
            $room105["middlename"] = $result["middlename"];
            $room105["faculty"] = $result["faculty"];
            $room105["camera"] = $result["camera"]; 
            $room105["theme"] = $result["theme"]; 
            $room105["theme_r"] = $result["theme_r"]; 
            $room105["comment"] = nl2br($result["comment"]); 
            $room105["colors"] = $result["colors"]; 
            $room105["first_roma"] = $result["first_roma"]; 
            $room105["middle_roma"] = $result["middle_roma"]; 
            $room105["instagram"] = $result["instagram"]; 
            $room105["twitter"] = $result["twitter"]; 
            $room105s[] = $room105; 
    }
  $camera = json_decode($room105["camera"]);
                   $countnum = count($camera);
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
        <meta name="twitter:card" content="summary" /> 
        <meta name="twitter:site" content="@Pnts_KS02" /> 
        <meta property="og:url" content="rikkyophotoclub.com/" /> 
        <meta property="og:title" content="room105-mypage | Rikkyo Photo Club" /> 
        <meta property="og:description" content="立教大学写真部の公式ページです。" /> 
        <meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
        <title>room105-mypage | Rikkyo Photo Club</title>
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
            /*
             function names(){
                 var PSname = $('[name="firstname"]').val();
                 $.ajax({
               type:"POST",
               url:"spf2021-registername.php",
               data:{
                   firstname:PSname
               }, 
               success: function(result){
                   result = JSON.parse(result); 
                   console.log(result); 
                   let result2 = result;
                   if(result2 == 'yet'){
                       $('[name="firstname"]').css({"background":"#fc8181"});
                        $('#log_IP_N').html("既にこの名前で登録しています！<br>ログインページからログインしてください");
                        input.disabled = "true";
                   }else{
                        input.disabled = "false";
                         $('#log_IP_N').html("");
                    $('[name="firstname"]').css({"background":"#ffffff"});
                      
                   } 
             }
                 });
             } */
                        
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
                <div id="loginbox">  
         <form id="login" action="room105-configchange.php" method="post">
              <div id="config_title">苗字・名前・学部</div>
               <div id="login_area1">
               <div id="log_IP">苗字:</div>
                <input type="text" name="middlename" value = "<?= $room105["middlename"] ?>" required>
                <div id="log_IP">名前:</div> 
                <input type="text" name="firstname" value ="<?= $room105["firstname"] ?>"  required oninput="names()">
                <div id="log_IP">学部:</div>
                <select name="faculty"> 
    			    <option value="<?= $room105["faculty"] ?>">---選択中：<?= $room105["faculty"] ?>---</option>
    			    <option value="文学部">文学部</option>
    			    <option value="異文化コミュニケーション学部">異文化コミュニケーション学部</option>
    			    <option value="経済学部">経済学部</option>
    			    <option value="経営学部">経営学部</option>
    			    <option value="理学部">理学部</option>
    			    <option value="社会学部">社会学部</option>
    			    <option value="法学部">法学部</option>
    			    <option value="観光学部">観光学部</option>
    			    <option value="コミュニティ福祉学部">コミュニティ福祉学部</option>
    			    <option value="現代心理学部">現代心理学部</option>
    			    <option value="GLAP">GLAP</option>
                </select>
                   </div>
                   <div id="config_title">使用カメラ・展示テーマ・ひとこと</div>
                   <div id="login_area1">
                   使っているカメラ、展示テーマ、展示に向けたひとことを記入してください。<br>
                   ※使っているカメラは一つ以上記入してください。<br>
                   ※展示テーマ、ひとことは後から編集することができます。<br><br>
                <div id="log_IP">よく使うカメラ（3つまで）:</div> 
                <input type="text" name="camera[]" value="<?= $camera[0] ?>" required>
                <input type="text" name="camera[]" value="<?= $camera[1] ?>">
                <input type="text" name="camera[]" value="<?= $camera[2] ?>">
                <div id="log_IP" >展示に向けたテーマ:</div> 
                <input type="text" name="theme"  value="<?= $room105["theme"] ?>" required>
                <div id="log_IP">テーマの理由:</div> 
                 <textarea name="theme_r" rows="5" cols="30" class="writebox"><?= $room105["theme_r"] ?></textarea>
                <div id="log_IP">ひとこと:</div> 
                 <textarea name="comment" rows="5" cols="30" class="writebox"><?= $room105["comment"] ?></textarea>
                   </div>
                   <div id="config_title">テーマカラー</div>
                    <div id="login_area1">
                   テーマカラーの設定を行ってください。<br>
                   ※年末までは、カラーを後から変更することができます。<br><br>
                <div id="log_IP">テーマカラー:</div>
                <input type="color" name="colors" value="<?= $room105["colors"] ?>">
                   </div>
                   <div id="config_title">SNSとの紐付け設定</div>
                   <div id="login_area1">
                   SNSのアカウントを紐付けたい場合は、下のフォームに記入してください。<br>
                   ※紐付け設定は、後から編集することができます。<br><br>
                <div id="log_IP">Twitter(希望者のみ・@を抜いて書いてください):</div>
                <input type="text" name="twitter" value="<?= $room105["twitter"] ?>">
                <div id="log_IP">Instagram(希望者のみ・@を抜いて書いてください):</div>
                <input type="text" name="instagram" value="<?= $room105["instagram"] ?>" >
                   </div> 
                   <button type="submit" src="Login" id = "button">修正</button>
                    </form></div>
                    <div id="button_2" onclick="login()" style="margin-bottom:50px;">マイページへ戻る</div>
       </body>
</html>