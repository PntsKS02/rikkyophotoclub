<?php
$favorites = $_COOKIE["favorites"];
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        //PDOの実行
$Num = $_GET["Num"];
	$Top = 0;
	$sql = "select * from room105history order by id DESC";
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $history["id"] = $result["id"];
            $history["title"] = $result["title"];
            $history["date"] = $result["date"];
            $history["sentence"] = nl2br($result["sentence"]);
            $historys[] = $history;
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
       <link rel="stylesheet" type="text/css" href="../css/room105.css" media="(min-width: 1100px)">         
        <link href="../css/room105M.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >         
        <link href="../css/room105T.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 1099px)" >

        <link rel="stylesheet" href="https://use.typekit.net/xkz2aes.css">
        <meta name="twitter:card" content="summary_large_image" /> 
<meta name="twitter:site" content="@Pnts_KS02" />  
<meta property="og:url" content="https://rikkyophotoclub.com/" /> 
<meta property="og:title" content="HISTORY | ROOM105" /> 
<meta property="og:description" content="立教大学写真部2022年卒展「ROOM105」公式ページ" /> 
<meta property="og:image" content="https://rikkyophotoclub.com/img/卒展 DM横2.jpg" /> 
        <title>HISTORY | ROOM105</title>
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
           $(document).ready(function(){
             var H2 = window.innerHeight;
                var W = $(window).width();
                if(W > 800){
                    WH ="Width";
                }else{
                    WH = "Height";
                }
                $('#loading_bar').css({top:(H2/2)});
                $('#loading_count').css({top:(H2/2)- -20});
               if(W > 600 && W < 1099){
                   
               }else{
               $('.door_close').css({top:(H2/2)- 170});
                $('.door_open').css({top:(H2/2)- 170});
               }
                var all_img = $("img"); //すべての画像
                var img_len = all_img.length; //画像の総数
                var loaded_counter = 0; //読み込み完了の数値
                for (var i = 0; i < img_len; i++) {
                    all_img[i].addEventListener("load", loadFunc);
                }
	           function loadFunc() { //読み込み画像のカウント
		          loaded_counter++;
                    count_num = loaded_counter / img_len;
                    count_num = Math.floor(count_num * 100); 
                   $('#loading_count').html(count_num + "%");  
                   $('#loading_bar').css({"width":count_num + "%"});  
               }
           
        });
             $(function(){
         $(window).on('load',function(){
                var H2 = window.innerHeight;
                var W = $(window).width();
             $('.door_close').css({display:"none"});
             $('.door_open').css({display:"block"});
             $('#loading_bar').css({"width":"100%"}); 
             $('#loading_count').html("100%");
                $('#loading_screen').velocity({
               opacity:0
           },{
            display:"none",
                    delay: 1000
           });
             $('.area_1').each(function(){

            var position = $(this).offset().top; 
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > position - windowHeight + 200){
                $(this).addClass('active');
               
                $(this).children('#area_sub').velocity({
                    marginLeft:0,
                    width:'100%'
                },{
                    delay:1500,
                    complete:function(){
                        $(this).parent('.area_1').animate(500).css({color:"#eeef"});
                        $(this).parent('.area_1').children('#area_main').velocity({
                            opacity:1
                    });
                         $(this).children('.exhibitior_area').velocity({
                   borderLeftWidth:'10px'
                },{ 
                    delay:1500,
                duration:200}); 
                    }
                });
            } 
        });
            });
            });
           
            
           $(function(){
    $(window).scroll(function (){
       $('.area_1').each(function(){
        /*     $('.area_1').css({overflowX:"visible"}); */
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > position - windowHeight + 200){
                $(this).addClass('active');
                $(this).children('#area_sub').velocity({
                    marginLeft:0,
                    width:'100%'
                },{
                    complete:function(){
           
                        $(this).parent('.area_1').animate(500).css({color:"#eeef"});
                        $(this).parent('.area_1').children('#area_main').velocity({
                            opacity:1
                    });
                }
            });
    }
        });
    });
               $('a').on('click', function(e){
                        e.preventDefault(); // ナビゲートをキャンセル
                        url = $(this).attr('href'); // 遷移先のURLを取得
                        if (url !== '') {
                          $("#loading_screen").css({"display":"block"});
                            $("#loading_bar").css({"display":"none"});
                          $("#loading_count").css({"display":"none"});
                            $(".door_open").css({"display":"none"});
                            $(".door_close").css({"display":"block"});
                           
                    $("#loading_screen").delay(300).velocity({
                        opacity:1
                    },{
                        duration:"300"
                    });
                          setTimeout(function(){
                            window.location = url;  // 0.8秒後に取得したURLに遷移
                          }, 700);
                        }
               });
           });
            
           function disableScroll(event) {
    event.preventDefault();
  }
        function menu(){
    document.addEventListener('touchmove', disableScroll, { passive: false });
    document.addEventListener('mousewheel', disableScroll, { passive: false });
            $('#menuzone').css({"display":"block"});
            $('#menuzone').velocity({
                marginLeft:0,
                 opacity:1
            },{
                duration:1300,
                easing:"easeInOutQuart"
            });
        }
               
        function closes(){
    document.removeEventListener('touchmove', disableScroll, { passive: false });
    document.removeEventListener('mousewheel', disableScroll, { passive: false });
            $('#menuzone').velocity({
                marginLeft:"100%",
                opacity:0
            },{
                duration:1300,
                easing:"easeInOutQuart",
                display:"none"
            });
        }
           
            

        </script> 
    </head> 
    <body> <div id="loading_screen">
        <div id="loading_bar"></div>
        <img class="door_close" src="../img/door_close.png">
        <img class="door_open" src="../img/door_open.png">
        <div id="loading_count"></div>
    </div>
           <img class="top_pic_PC" src="../img/back_pic-01.jpg">
       <img class="top_pic_Mobile" src="../img/back_pic-02.jpg">
           <img class="menu_icon" src="../img/icon-2.png" onclick = "menu()">
           <div id="menuzone">
         <img class="menu_icon_close" src="../img/icon-1.png" onclick = "closes()"> 
           <div id="menu_title">DIRECTORY</div>
           <a href = "room105">
           <div id="menu_list">
               <div id="list_roma">TOP</div>
               <div id="list_ja">ROOM105 トップページ</div>
               </div></a>
                <a href = "room105-history">
               <div id="menu_list">
               <div id="list_roma">HISTORY</div>
               <div id="list_ja">更新情報</div>
                    </div></a>
                     <a href = "room105-summary">
                    <div id="menu_list">
               <div id="list_roma">SUMMARY</div>
               <div id="list_ja">展示概要</div>
                         </div></a>
                    <a href = "room105-memoriagallery">
                    <div id="menu_list">
               <div id="list_roma">MEMORIA GALLERY</div>
               <div id="list_ja">メモリアギャラリー</div>
                        </div></a>
                     <a href = "room105-access">
                    <div id="menu_list">
               <div id="list_roma">ACCESS</div>
               <div id="list_ja">アクセス･開催期間</div>
                         </div></a>
                     <a href = "room105-exhibitior">
                    <div id="menu_list">
               <div id="list_roma">EXHIBITIOR</div>
               <div id="list_ja">ROOM105 参加者一覧</div>
                         </div></a>
                    <a href = "room105-sns">
                    <div id="menu_list">
               <div id="list_roma">SNS・LINK</div>
               <div id="list_ja">Twitter/Instagram/リンク集</div>
                        </div></a>
       </div>
            <a href = "room105"><div id="gallery_title" onclick="toppage()">ROOM105</div>
            <div id="gallery_subtitle">Rikkyo Photo Club<br>Graduate Exhibition 2022</div></a>
            <div class="area_1" >
                <div id="area_title">HISTORY</div>
            <div id="area_sub">更新情報</div>
            <div id="area_main">
            <div id="page_tour"><a href = "room105">ROOM105 TOP</a>　>　HISTORY</div>
            <div id="area_sentence">
                ROOM105の展示などにおける更新情報です。<br>
                </div>
                 <?php
                foreach($historys as $history){
                    ?>
                <div id="history_box">
                <div id="history_date"><?= $history["date"]?></div>
                <div id="history_title"><?= $history["title"]?></div>
                <div id="history_sentence"><?= $history["sentence"]?></div>
                </div>
                <?php
                }
                ?>
                </div></div>
                <div id="footer" style="background:#ccc9">
            <div id="footer_title">ROOM105</div>
            <div id="footer_contents">   
              <div id="fc_title">
                  Menu</div>
                <ul class="menu_footer2">
                  <div id="footer_area2">
                   <li class="footer_b">展示に行く</li>
                    <a href = "room105-access#opentime" class = "footer_a2"><li>ROOM105 開催期間・開館時間</li></a>
                    <a href = "room105-access#access" class = "footer_a2"><li>会場へのアクセス</li></a>
                    <a href = "room105-access#timetable" class = "footer_a2"><li>シフト表</li></a>
                    </div><div id="footer_area2">
                    <li class="footer_b">展示を見る</li>
                    <a href = "room105-summary-detail" class = "footer_a2"><li>ROOM105 展示概要</li></a>
                    <a href = "room105-digitaltour" class = "footer_a2"><li>デジタルツアー</li></a>
                    <a href = "room105-gallery" class = "footer_a2"><li>デジタルギャラリー</li></a>
                    <a href = "room105-exhibitior" class = "footer_a2"><li>展示者一覧</li></a>
                    </div><div id="footer_area2">
                    <li class="footer_b">展示の情報を知る</li>
                    <a href = "room105-history" class = "footer_a2"><li>更新情報</li></a>
                    <a href = "room105-sns" class = "footer_a2"><li>ROOM105 公式Instagram</li></a>
                    </div>
                </ul>
            </div>
        </div>
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
