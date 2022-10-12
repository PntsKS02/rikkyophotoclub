  
  <?php
$IA = 2;
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM room105_timetable";
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){ 
            $room105a["date"] = $result["date"];
            $room105["1100"] = $result["1100"];
            $room105["1200"] = $result["1200"];
            $room105["1300"] = $result["1300"];
            $room105["1400"] = $result["1400"];
            $room105["1500"] = $result["1500"];
            $room105["1600"] = $result["1600"];
            $room105["1700"] = $result["1700"];
            $room105["1800"] = $result["1800"];
         $room105s[] = $room105;         
    }
    
    foreach($room105s as $room105){
            $memberNum[] = explode(",",$room105["1100"]);
            $memberNum[] = explode(",",$room105["1200"]);
            $memberNum[] = explode(",",$room105["1300"]);
            $memberNum[] = explode(",",$room105["1400"]);
            $memberNum[] = explode(",",$room105["1500"]);
            $memberNum[] = explode(",",$room105["1600"]);
            $memberNum[] = explode(",",$room105["1700"]);
            $memberNum[] = explode(",",$room105["1800"]);
            $memberNums[] = $memberNum;
        $memberNum = [];
    }
        
    unset($pdo);
}catch(PDOException $e){
}
	

/* var_dump($photo_datas["data"]); */
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
<meta property="og:title" content="ACCESS | ROOM105" /> 
<meta property="og:description" content="立教大学写真部2022年卒展「ROOM105」公式ページ" /> 
<meta property="og:image" content="https://rikkyophotoclub.com/img/卒展 DM横2.jpg" /> 
        <title>ACCESS | ROOM105</title>
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
                $(this).children('.exhibitior_area').velocity({
                   borderLeftWidth:'10px'
                },{ 
                    delay:1500,
                duration:200}); 
                $(this).children('#area_sub').velocity({
                    marginLeft:0,
                    width:'100%'
                },{
                    delay:1500,
                    complete:function(){
                        $(this).parent('.area_1').animate(500).css({color:"#eeef"});
                    }
                });
            } 
        });
            });
            });
           
            
           $(function(){
    $(window).scroll(function (){
        $('.area_1').each(function(){

            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > position - windowHeight + 200){
                $(this).addClass('active');
                $(this).children('.exhibitior_area').velocity({
                   borderLeftWidth:'10px'
                });
                $(this).children('#area_sub').velocity({
                    marginLeft:0,
                    width:'100%'
                },{
                    complete:function(){
                        $(this).parent('.area_1').animate(500).css({color:"#eeef"});;
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
                    return false;
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
            
            function changea(distination){
                      var position = $('#' + distination).offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position},1500,'swing');
      return false;
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
                <div id="area_title">ACCESS</div>
            <div id="area_sub">展示場所・アクセス・シフト表</div>
                <div id="page_tour"><a href = "room105">ROOM105</a> > ACCESS</div>
             <div class="area_title2"  id = "opentime">Exhibition Period</div>
            <div id="area_sentence">
                <div id="area_time">3/2 wed. >>> 3/7 mon.</div>
                <div id="area_time">11:00 ~ 19:00</div>
                ※初日の3/2は、搬入が完了し次第の開始となります。<br>
                ※最終日の3/7は、17:00で終了とさせていただきます。
            </div>
             <div class="area_title2"  id = "access">Access to ROOM105</div>
            <div id="area_sentence2">
                <div id="place">America-Bashi Gallery</div>
                〒150-0022 東京都渋谷区恵比寿南 1-22-3<br><br><br>
                JR山手線・埼京線 恵比寿駅(東口)より徒歩5分<br>
                地下鉄日比谷線 恵比寿駅(1番出口)より徒歩7分<br>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.371790389739!2d139.70963411482606!3d35.64321053966442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b3e2af36673%3A0x3a73b419da46db01!2sAmerica-Bashi%20Gallery!5e0!3m2!1sja!2sjp!4v1637372229793!5m2!1sja!2sjp" width="600" height="300" style="border:0;margin-top:50px;" allowfullscreen="" loading="lazy"></iframe>
            <div class="area_title2"  id = "access">Access Guide</div>
            <div id="area_sentence2">
                恵比寿駅東口を出ましたら、「恵比寿ガーデンプレイス方面」の案内に従って右折してください。
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1646313931671!6m8!1m7!1s1H3AjZ5pc3t3KW9SWeAVbw!2m2!1d35.64631630429163!2d139.7104816011766!3f67.10779649025609!4f-8.62812066316269!5f0.7820865974627469" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             <div id="area_sentence2">
                動く歩道が終わりこの地点まで来ましたら、左側の出口の方へお進みください。
            </div>
             <iframe src="https://www.google.com/maps/embed?pb=!4v1646306196740!6m8!1m7!1smctSg10YYjbOWGp1jO_rzw!2m2!1d35.64350312205682!2d139.7121240020662!3f158.1026596990647!4f3.704781107489822!5f0.7820865974627469" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             <div id="area_sentence2">
                出口を出ましたら、信号を渡らずに右折しアメリカ橋（恵比寿南橋）へお進みください。
            </div>
             <iframe src="https://www.google.com/maps/embed?pb=!4v1646306416528!6m8!1m7!1sCzwieGtIAPmBXCsc1Lfu_g!2m2!1d35.64330851021244!2d139.7122436618207!3f156.1798238528845!4f1.6894829503336268!5f0.7820865974627469" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             <div id="area_sentence2">
                橋を渡り終えましたら、ピンクの建物の手前で右折してください。
            </div>
             <iframe src="https://www.google.com/maps/embed?pb=!4v1646306596216!6m8!1m7!1sXVndzkMDXs_UlRqpR0Y1QA!2m2!1d35.64307030325452!2d139.7119781399314!3f289.2266094817477!4f-1.239938465427116!5f0.7820865974627469" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             <div id="area_sentence2">
                進むと「鶏白湯らーめん」と書かれた建物がありますので、その先の交差点を斜め左後ろへお進みください。
            </div>
             <iframe src="https://www.google.com/maps/embed?pb=!4v1646306764538!6m8!1m7!1sp6rhmtYSVFDUaYXh2_uHtg!2m2!1d35.64337781908966!2d139.7117657156825!3f326.8792953807212!4f1.625492295248847!5f0.7820865974627469" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             <div id="area_sentence2">
                曲がりましたら、すぐの交差点を右折してください。
            </div>
             <iframe src="https://www.google.com/maps/embed?pb=!4v1646306896552!6m8!1m7!1sUwoNgU8bZDjj4uxuKNnylg!2m2!1d35.64342388247407!2d139.7116504645473!3f187.1284094037344!4f5.04685200071512!5f0.7820865974627469" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <div id="area_sentence2">
                右手にAmerica Bashi Galleryがあります。<br>
            </div>
             <iframe src="https://www.google.com/maps/embed?pb=!4v1646306986195!6m8!1m7!1s4CXMZaieOakJmAJXmavqzA!2m2!1d35.6432428055478!2d139.7115255509605!3f278.87744194079494!4f-4.261678409703578!5f0.7820865974627469" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             <div id="area_sentence2">
                恵比寿駅東口から、America Bashi Galleryまでのタイムラプス動画です。<br>
            </div>
            <video id = "goin" src="../img/667998263.546202.mp4" controls loop autoplay muted></video>
             <div class="area_title2" id = "timetable">Shift timetable</div>
 <div id="area_sentence">
        <div id="shift_timetable">
         <div id="timetable_row">
                        <div id="timetable_date">Date</div>
                        <div id="timetable_date">11:00~</div>
                        <div id="timetable_date">12:00~</div>
                        <div id="timetable_date">13:00~</div>
                        <div id="timetable_date">14:00~</div>
                        <div id="timetable_date">15:00~</div>
                        <div id="timetable_date">16:00~</div>
                        <div id="timetable_date">17:00~</div>
                        <div id="timetable_date">18:00~</div>
                    </div>
                    
                                    <?php
                                    foreach($memberNums as $memberNum){ 
                                         ?>
                                          <div id="timetable_row">
                                          <div id="timetable_date">3/<?= $IA ?></div>
                                         <?php
                                        foreach($memberNum as $membergroup){
                                    ?>
                                    <div id="timetable_date"><?php
                                            foreach($membergroup as $member) {
                                                $fontcolor = "#eeeeee";
                                                switch($member){
                                                    case 1:
                                                        $membername = "渡部";
                                                        $membercolor = "#880000";
                                                        break;
                                                    case 2:
                                                        $membername = "矢作";
                                                        $membercolor = "#016e8f";
                                                        break;
                                                    case 3:
                                                        $membername = "川端";
                                                        $membercolor = "#ffffff";
                                                        $fontcolor = "#333333";
                                                        $fontcolor = "#333333";
                                                        break;
                                                    case 4:
                                                        $membername = "小松";
                                                        $membercolor = "#d9c9fe";
                                                        $fontcolor = "#333333";
                                                        $fontcolor = "#333333";
                                                        break;
                                                    case 5:
                                                        $membername = "内田";
                                                        $membercolor = "#333333";
                                                        break;
                                                    case 6:
                                                        $membername = "吉村";
                                                        $membercolor = "#012f7b";
                                                        break;
                                                    case 7:
                                                        $membername = "棚橋";
                                                        $membercolor = "#3a87fe";
                                                        break;
                                                    default:
                                                        $membername = $member;
                                                        $membercolor = "#fd7e00";
                                                }
                                        ?>
                                        <div id="membername" style = "background:<?= $membercolor ?>;color:<?= $fontcolor ?>">
                                            <?= $membername ?></div>
                                        <?php
                                            }
                                            ?></div>
                                    <?php
                                    }
                                        ?>
                                    </div>
                                        <?php
                                        $IA = $IA + 1;
                                    }
                                        
                                        ?>
                                </div>
                    </div>
                </div>
                
                 <div id="footer" style="background:#ccc9">
            <div id="footer_title">ROOM105</div>
            <div id="footer_contents">   
              <div id="fc_title">
                  Menu</div>
                <ul class="menu_footer2">
                  <div id="footer_area2">
                   <li class="footer_b">展示に行く</li>
                    <li onclick="changea('opentime')">ROOM105 開催期間・開館時間</li>
                    <li onclick="changea('access')">会場へのアクセス</li>
                    <li onclick="changea('timetable')">シフト表</li>
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