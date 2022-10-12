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
	$sql = "select * from historys order by id DESC limit 3";
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $history["id"] = $result["id"];
            $history["title"] = $result["title"];
            $history["date"] = $result["date"];
            $history["sentence"] = $result["sentence"];
            $historys[] = $history;
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
   <link rel="stylesheet" type="text/css" href="../css/NewTop.css" media="(min-width: 1000px)">
   <link href="../css/NewTopM.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >
   <link href="../css/NewTopT.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 999px)" >
   <link rel="stylesheet" href="https://use.typekit.net/dll3oer.css">
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary_large_image"/>  
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="TOP | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://rikkyophotoclub.com/img/キービジュ.png" /> 
    <title>TOP | Rikkyo Photo Club</title>
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
        $(document).ready(function(){
             var H2 = window.innerHeight;
                var W = $(window).width();
                if(W > 800){
                    WH ="Width";
                }else{
                    WH = "Height";
                }
                $.ajax({
               type:"POST",
               url:"index-2.php",
               data:{
                   WH:WH 
               },
               success: function(file){ 
                   file = JSON.parse(file);
                    $('.top_pic_PC').attr('src', '../' + file);
               }
                    });
                $('#loading_bar').css({top:(H2/2)});
                $('#loading_count').css({top:(H2/2)- -20});
                $('#pic_updown').css({top:H2 - 250});
                $('#top_bar').css({margintop:H2/5});
                $('#menubar_PC').css({top:H2/2 - 100});
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
        
        $(window).on('load',function(){
                var H2 = window.innerHeight;
                var W = $(window).width();
                $('#loading_screen').velocity({
               opacity:0
           },{
            display:"none"
           });
            });
        
        function menu(){
			$('.menubar_PC').css({'display':'block'});
			$('.menu').velocity({
				opacity:0
			},{
			duration:1000	
		});
			$('.menubar_PC').velocity({
				opacity:1,
				left:'45%'
		},{
			duration:1000	
		});
		}
        function closed(){
			$('.menu').velocity({
				opacity:1
			},{
			duration:1000	
		});
			$('.menubar_PC').velocity({
				opacity:0,
				left:'100%'
		},{
			duration:1000,
			display:'none'
		});
		}
    </script>
    </head>
    <body>
        <div id="loading_screen">
        <div id="loading_bar"></div>
        <div id="loading_count"></div>
    </div>
        <div id="top_area">
            <div id="top_bar">
               <div id="t_t">
                <div id="top_title">Rikkyo<br>Photo<br>Club</div>
                <div id="top_subtitle">Since 1936</div>
                </div>
                <img class="top_pic_PC" src="">
                <img class="menu" src="../img/menuwhite.png" onclick="menu()">
                <ul class="menubar_PC">
                   <div id="close" onclick="closed()">✕</div>
                    <a href = "index"><li>TOP</li></a>
                    <a href = "history"><li>HISTORY</li></a>
                    <a href = "about"><li>ABOUT US</li></a>
                    <a href = "activities"><li>ACTIVITIES</li></a>
                    <a href = "exhibition"><li>EXHIBITION</li></a>
                    <a href = "link"><li>SNS/LINK</li></a>
                </ul>
            </div>
            <div id="sign_top"><img class="open" src="../img/open.jpg" onclick="opens()"></div>
        </div>
        <div id="main_area">
           <div id="main_box">
            <div id="main_title">What's New</div>
            <div class="main_subtitle">開催中・開催予定の写真展</div>
            <a href="spf2021">
            <div id="exhibition_box">
                <img class="exhibition_pic" src="../img/SPF-card-black2_%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%201.jpg">
                <div id="exhibition_detail">
                <div id="exhibition_title">立教大学写真部SPF展2021</div>
                <div id="exhibition_date">開催期間・・・2021/11/1→11/3</div>
                <div id="exhibition_place">開催場所・・・当サイト内特別ページ（オンラインのみの展示）</div>
                <div id="exhibition_caption">SPF展は、立教大学の学祭である「SPF」と同時に開催されます。<br>2021年の展示は、新型コロナウイルス感染拡大防止のため、学内では行いません。　当サイト特別ページのみでの公開となります。</div>
                </div>
            </div>
               </a>
            <div class="main_subtitle">新着情報</div>
            <?php
                foreach($historys as $history){
                    ?>
            <a href = "history-d?Num=<?= $history["id"]?>">
            <div id="new_info">
               <div id="info_left">
                <div id="info_date"><?= $history["date"] ?></div>
                <div id="info_title"><?= $history["title"] ?></div>
                </div>
                <div id="info_sentence">詳しく見る >>></div>
            </div>
               </a>
            <?php
                }
                    ?>
            </div>
            <div id="main_box">
        <div id="main_title">Contents</div>
            <div class="main_subtitle">ABOUT US・ACTIVITIES</div>
            <img class="info_pic" src="../img/SF2.jpg">
            <div id="info_area">
                <a href = "about"><div id="info_title">立教大学写真部について</div></a>
                <a href = "activities#exhibit"><div id="info_title">SPF展・新人展</div></a>
                <a href = "activities#other"><div id="info_title">その他イベントについて</div></a>
                <a href = "event"><div id="info_title">一年間の活動一覧</div></a>
            </div>
            <div class="main_subtitle" style="margin-top:100px;">EXHIBITION</div>
            <img class="info_pic" src="../img/S1.jpg">
            <div id="info_area">
                <a href = "exhibition#exhibition_now"><div id="info_title">開催中・開催予定の写真展</div></a>
                <a href = "exhibition#exhibition_spf"><div id="info_title">SPF展</div></a>
                <a href = "exhibition#exhibition_newcomer"><div id="info_title">新人展・六大学写真展</div></a>
                <a href = "exhibition#exhibition_volunteer"><div id="info_title">その他の有志による展示</div></a>
                <div id="info_title">展示一覧</div>
            </div>
            <div class="main_subtitle" style="margin-top:100px;">SNS</div>
            <div id="twitter_TL">
            <a class="twitter-timeline" data-height="400" data-width = "300" href="https://twitter.com/rikkyo_photo?ref_src=twsrc%5Etfw">Tweets by rikkyo_photo</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div id="info_SNS">
                <div id="info_title"><img class="sns_pic" src="../img/Twitter_Logo_Blue.png"><div id="info_titleA">Twitter : @rikkyo_photo</div></div>
                <div id="info_title"><img class="sns_pic" src="../img/instagram.png"><div id="info_titleA">Instagram : @rikkyo_photo</div></div>
            </div>
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
                       "><div id="fc_sentence">東京都豊島区西池袋3-34-1<br>立教大学ウィリアムズホール1階</div></a>
            </div>
            <div id="footer_contents">
            <img class="sns_pic" src="../img/Twitter_Logo_Blue.png">
            <img class="sns_pic" src="../img/instagram.png">
            </div>
            <div id="footer_c">Copyright (C)2019-2021 Rikkyo Photo Club All Rights Reserved.</div>
        </div>
    </body>
</html>