<?php
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM gardenusers";
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){ 
            $Garden["id"] = $result["id"];
            $Garden["firstname"] = $result["firstname"];
            $Garden["middlename"] = $result["middlename"];
            $Garden["faculty"] = $result["faculty"];
            $Garden["camera"] = $result["camera"]; 
            $Garden["theme"] = $result["theme"]; 
            $Garden["comment"] = nl2br($result["comment"]); 
            $Garden["colors"] = $result["colors"]; 
            $Garden["first_roma"] = $result["first_roma"]; 
            $Garden["middle_roma"] = $result["middle_roma"]; 
            $Garden["Instagram"] = $result["instagram"]; 
            $Garden["token"] = $result["token"]; 
            $Garden["twitter"] = $result["twitter"]; 
        $access_token = $Garden["token"];
        if(!($Garden["token"])){
            
        }else{
$url = "https://graph.instagram.com/me/media?fields=id,caption,permalink,media_url&access_token=".$access_token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$photo_datas = json_decode($response,true);
        $Garden["insta_data"] = $photo_datas;
        $Gardens[] = $Garden; 
        }
    }
  
    unset($pdo);
}catch(PDOException $e){
}
	

/* var_dump($photo_datas["data"]); */
?> 
<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="矢作伊佐斗と川端恵茉の2人展「Garden.」公式ページ">
   <link rel="stylesheet" type="text/css" href="../css/Garden.css" media="(min-width: 1000px)">
   <link href="../css/GardenM.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >
   <link href="../css/GardenT.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 999px)" >
   <link rel="stylesheet" href="https://use.typekit.net/xkz2aes.css">
     <meta name="twitter:card" content="summary_large_image" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="Garden. | Rikkyo Photo Club" /> 
<meta property="og:description" content="矢作伊佐斗と川端恵茉の2人展「Garden.」公式ページ" /> 
<meta property="og:image" content="../img/DM_5.jpg" /> 
    <title>Garden. | Rikkyo Photo Club</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <!--<script src="../js/easing.js"></script>-->
    <script src="../js/color.js"></script>
    <!--<script src="../js/mousewheel.js"></script>-->
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
        
          function menu(){
            $('#menuzone').css({"display":"block"});
            $('#menuzone').velocity({
                 opacity:1
            },{
                duration:1300,
                easing:"easeInOutQuart"
            });
        }  
        function details(idNum){
            $('#detail_left').velocity({
                opacity:0
            },{
                complete:function(){
            var picNum = $.cookie('picNum');
            if(idNum == "back"){
                idNum = picNum - 1;
            }else if(idNum == "next"){
                idNum = picNum - -1;
            }else{
                
            }
            var W = $(window).width();
            $.ajax(
      { type: "POST",
            url: 'Garden-gallery2.php',
            data: {
                "Num": idNum
            },
				success: function(data_arr){
				data_arr2 = JSON.parse(data_arr);
                console.log(data_arr2);
                    if(idNum < 2){
                        $('#detail_back').css({"display":"none"});
                        $('#detail_next').css({"display":"block"});
                        $('#pic_next').attr('src',data_arr2[1]['imgs']);
                        $('.detail_pic').attr('src',data_arr2[0]['imgs']);
                        $('#detail_title').html(data_arr2[0]['caption']); 
                        $('#detail_name').html(data_arr2[0]['name']);
                        var WH = data_arr2[0]['type'];
                        $.cookie('picNum', data_arr2[0]['id']);	
                    }else if(idNum > 7){
                        $('#detail_next').css({"display":"none"});
                        $('#detail_back').css({"display":"block"});
                        $('#pic_back').attr('src',data_arr2[0]['imgs']);
                        $('.detail_pic').attr('src',data_arr2[1]['imgs']);
                        $('#detail_title').html(data_arr2[1]['caption']); 
                        $('#detail_name').html(data_arr2[1]['name']);
                        var WH = data_arr2[1]['type'];
                        $.cookie('picNum', data_arr2[1]['id']);	
                    }else{
                        $('#detail_back').css({"display":"block"});
                        $('#detail_next').css({"display":"block"});
                        $('#pic_back').attr('src',data_arr2[0]['imgs']);
                        $('#pic_next').attr('src',data_arr2[2]['imgs']); 
                        $('.detail_pic').attr('src',data_arr2[1]['imgs']);
                        $('#detail_title').html(data_arr2[1]['caption']);
                        $('#detail_name').html(data_arr2[1]['name']);
                        var WH = data_arr2[1]['type'];
                        $.cookie('picNum', data_arr2[1]['id']);	
                    }
                    console.log(WH);
                    if(WH == "H"){ 
                        if(W > 800){
                            $('.detail_pic').css({"width":"30%","left":"35%","margin-top":"5vh"});
                        }else{
                            $('.detail_pic').css({"width":"60%","left":"20%","margin-top":"15vh"});    
                        }
                    }else{
                        if(W > 800){
                            $('.detail_pic').css({"width":"50%","left":"25%","margin-top":"10vh"});
                        }else{
                            $('.detail_pic').css({"width":"90%","left":"5%","margin-top":"15vh"});
                        }
                    }
            $('#gallery_detail').css({"display":"block"});
                    $('#detail_left').velocity({
                 opacity:1
                    });
            $('#gallery_detail').velocity({
                 opacity:1
            },{
                duration:1300,
                easing:"easeInOutQuart"
            });
        }
      });
        }
            });
        }
        
        function closes(){
            $('#menuzone').velocity({
                opacity:0
            },{
                duration:1300,
                easing:"easeInOutQuart",
                display:"none"
            });
        }
        function galleryback(){
            $('#gallery_detail').velocity({
                opacity:0
            },{
                duration:1300,
                easing:"easeInOutQuart",
                display:"none"
            });
        }
        
        function instadetail(member){
             $("#insta_area2").velocity({
                opacity:0
            },{
                 display:"none",
                 complete:function(){
            $("#" + member).css({"display":"block"});
            $("#" + member).velocity({
                opacity:1
            });
        }
             });
        }
        
        function instaback(){
            $(".insta_pics").velocity({
                opacity:0
            },{
                 display:"none",
                 complete:function(){
            $("#insta_area2").css({"display":"block"});
            $("#insta_area2").velocity({
                opacity:1
            });
        }
             });
        }
    </script>
    </head>
    <body>
     <img class="menu_icon" src="../img/icon-2.png" onclick = "menu()">
           <div id="menuzone">
         <img class="menu_icon_close" src="../img/icon-1.png" onclick = "closes()"> 
           <div id="menu_title">Directory</div>
           <a href = "Garden">
           <div id="menu_list">
               <div id="list_roma">Top</div>
               <div id="list_ja">Garden. トップページ</div> 
               </div></a>
                <a href = "Garden-history">
               <div id="menu_list">
               <div id="list_roma">History</div>
               <div id="list_ja">更新情報</div>
                    </div></a>
                    <a href = "Garden-gallery">
                    <div id="menu_list">
               <div id="list_roma">Gallery</div>
               <div id="list_ja">デジタルギャラリー</div>
                        </div></a>
               <a href = "Garden-shop">
                    <div id="menu_list">
               <div id="list_roma">Shop</div>
               <div id="list_ja">物販</div>
                        </div></a>
                    <a href = "Garden-sns">
                    <div id="menu_list">
               <div id="list_roma">SNS</div>
               <div id="list_ja">Twitter/Instagram</div>
                        </div></a>
               </div>
               <a href = "Garden">
               <div id="titlearea-2">
                   <div id="subtitle-2">Photo Exhibition</div>
                     <div id="title-2">Garden.</div>
                   </div></a>
               <div id = "area_1">
                    <div id="area_title">SNS</div>
                    <div id="area_sentence">こちらでは、矢作・川端両名のInstagram投稿を見ることができます。<br>
                        MOREをクリックしてください。<br><br></div>
                 <div id="insta_area2">
              <?php
	           foreach($Gardens as $Garden){ 
                $photo_datas = $Garden["insta_data"];
               $AP = 0;
                   
                   ?>
                   <div id="insta_namebar" style="border-top-color:#111;"><?= $Garden["first_roma"]?>  <?= $Garden["middle_roma"]?></div>
                   <?php
	           for($AP =0;$AP < 4;$AP++){
                   
		?>
              <div id="insta_img_wrap2" class="<?= $Garden["instagram"]?>">
               <img class="insta_imgs" id = "<?= $AP ?>" src="<?= $photo_datas["data"][$AP]["media_url"] ?>">
                </div>
       <?php
     
               }
                   ?>
                       <div id="button_1" onclick="instadetail('<?= $Garden["middle_roma"] ?>')">MORE >>></div>
                     <div id="insta_ID">Instagram : <a href = "https://instagram.com/<?= $Garden["Instagram"]?>">@<?= $Garden["Instagram"]?></a></div>
                    <?php
               }
          ?>
                </div>
                </div>
                <?php
	           foreach($Gardens as $Garden){ 
                $photo_datas = $Garden["insta_data"];
               $AP = 0;
                   ?>
                <div class = "insta_pics" id="<?= $Garden["middle_roma"]?>">
                    <div id = "area_1">
                        <div id="area_title"><?= $Garden["first_roma"]?>  <?= $Garden["middle_roma"]?></div></div>
                    <?php
                     for($AP =0;$AP < 25;$AP++){
                   
		?>
               <img class="insta_pic" id = "<?= $AP ?>" src="<?= $photo_datas["data"][$AP]["media_url"] ?>">
       <?php
     
               }
                   ?>
                    <div id="button_1" onclick="instaback()">◀　戻る</div>
                </div>
                 <?php
               }
                   ?>
                <div id="footer">
            <div id="footer_title">Rikkyo Photo Club</div>
            <div id="footer_contents">
              <div id="fc_title">
                  Menu</div>
                <ul class="menu_footer">
                    <a href = "index" class = "footer_a"><li>TOP</li></a>
                    <a href = "history" class = "footer_a"><li>HISTORY</li></a>
                    <a href = "about" class = "footer_a"><li>ABOUT US</li></a>
                    <a href = "activities" class = "footer_a"><li>ACTIVITIES</li></a>
                    <a href = "exhibition" class = "footer_a"><li>EXHIBITION</li></a>
                    <a href = "link" class = "footer_a"><li>SNS/LINK</li></a>
                </ul>
            </div>
            <div id="footer_contents">
             <div id="fc_title">
                 Place</div>
            <a class ="map" href = "https://www.google.co.jp/maps/place/ウイリアムズホール/@35.7294518,139.7013359,17.54z/data=!4m5!3m4!1s0x60188d59f9f2fdfb:0x7b16098e235b911!8m2!3d35.7293041!4d139.7019023
                       "><div id="fc_sentence">東京都豊島区西池袋3-34-1<br>立教大学ウィリアムズホール1階105号室</div></a>
            </div>
            <div id="footer_contents">
            <img class="sns_pic" src="../img/Twitter_Logo_Blue.png">
            <img class="sns_pic" src="../img/instagram.png">
            </div>
            <div id="footer_c">Copyright (C)2019-2022 Rikkyo Photo Club All Rights Reserved.</div>
        </div>
    </body>
</html>