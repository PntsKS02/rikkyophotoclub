<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="立教大学写真部の公式ページです。">
   <link rel="stylesheet" type="text/css" href="../css/room105.css" media="(min-width: 1000px)">
   <link href="../css/room105M.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >
   <link href="../css/room105T.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 999px)" >
   <link rel="stylesheet" href="https://use.typekit.net/xkz2aes.css">
     <meta name="twitter:card" content="summary_large_image" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="ROOM105 | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="../img/キービジュ.png" /> 
    <title>ROOM105 | Rikkyo Photo Club</title>
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
                $('.door_close').css({top:(H2/2)- 170});
                $('.door_open').css({top:(H2/2)- 170});
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
             $('.door_close').css({display:"none"});
             $('.door_open').css({display:"block"});
             $('#loading_bar').css({"width":"100%"}); 
             $('#loading_count').html("WELCOME");
                $('#loading_screen').velocity({
               opacity:0
           },{
            display:"none",
                    delay: 1500
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
                $(this).children('#area_sub').velocity({
                    left:0,
                    width:'100%'
                },{
                    complete:function(){
                        $(this).parent('.area_1').animate(500).css({color:"#eeef"});
                    }
                });
            } 
        });
    });
});
        
        function menu(){
            $('#menuzone').css({"display":"block"});
            $('#menuzone').velocity({
                left:0,
                width:"100%",
                 opacity:1
            },{
                duration:600,
                easing:"easeInOutQuad"
            });
        } 
        function closes(){
            $('#menuzone').css({"display":"block"});
            $('#menuzone').velocity({
                left:"100%",
                width:"100%",
                opacity:0
            },{
                duration:600,
                easing:"easeInOutQuad",
                display:"none"
            });
        }
    </script>
    </head>
    <body>
      <div id="loading_screen">
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
           <div id="menu_list">
               <div id="list_roma">TOP</div>
               <div id="list_ja">ROOM105 トップページ</div>
           </div><div id="menu_list">
               <div id="list_roma">HISTORY</div>
               <div id="list_ja">更新情報</div>
           </div><div id="menu_list">
               <div id="list_roma">SUMMARY</div>
               <div id="list_ja">展示概要</div>
           </div><div id="menu_list">
               <div id="list_roma">GALLERY</div>
               <div id="list_ja">デジタルギャラリー</div>
           </div><div id="menu_list">
               <div id="list_roma">ACCESS</div>
               <div id="list_ja">アクセス･開催期間</div>
           </div><div id="menu_list">
               <div id="list_roma">EXHIBITIOR</div>
               <div id="list_ja">ROOM105 参加者一覧</div>
           </div><div id="menu_list">
               <div id="list_roma">SNS・LINK</div>
               <div id="list_ja">Twitter/Instagram/リンク集</div>
           </div>
       </div>
       <div id="titlezone">
        <div id="titlearea">
            <div id="title">ROOM 105</div>
            <div id="title_sub">Graduate Exhibition 2022</div>
        </div>
        <div id="datearea">
            <div id="date">2022.3.2 wed.>>>3.7 mon.</div>
            <div id="date">AMERICA-BASHI GALLERY , Ebisu , Tokyo</div>
        </div>
        <div id="namearea">
           EMA KAWABATA / ISATO YAHAGI / KANAMI UCHIDA / KEITO WATANABE / MAKO KOMATSU / NORIKA YOSHIMURA / RYUTARO TANAHASHI
        </div>
        </div>
        <div class="area_1">
            <div id="area_title">ABOUT</div>
            <div id="area_sub">ROOM 105開催にあたって</div>
            <div id="area_sentence">
                立教大学写真部、2022年度卒業生有志7名による写真展です。大学4年間で撮影してきた作品を展示致します。<br>
展示タイトル「ROOM 105」は私達の出会いの場所である、立教大学写真部の部室（105号室）に由来しています。<br><br>


一人ひとりの想いが詰まった、個性あふれる「一瞬」の世界をぜひご覧ください。<br><br>

これまでお世話になった方々に感謝を込めて。<br>
皆さまのご来場を心よりお待ちしております。
            </div>
        </div>
          <div class="area_1">
            <div id="area_title">HISTORY</div>
            <div id="area_sub">展示の更新情報</div>
            <div id="history_box">
                <div id="history_date">2021-12-1</div>
                <div id="history_title">ROOM 105公式サイト 始動</div>
                <div id="history_watch">詳しく見る >>></div>
            </div>
        </div>
           <div class="area_1">
            <div id="area_title">ACCESS</div>
            <div id="area_sub">展示場所・アクセス</div>
            <div id="area_sentence2">
                <div id="place">America-Bashi Gallery</div>
                〒150-0022 東京都渋谷区恵比寿南 1-22-3<br><br><br>
                JR山手線・埼京線 恵比寿駅(東口)より徒歩5分<br>
                地下鉄日比谷線 恵比寿駅(1番出口)より徒歩7分<br>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.371790389739!2d139.70963411482606!3d35.64321053966442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b3e2af36673%3A0x3a73b419da46db01!2sAmerica-Bashi%20Gallery!5e0!3m2!1sja!2sjp!4v1637372229793!5m2!1sja!2sjp" width="600" height="300" style="border:0;margin-top:50px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="area_1">
            <div id="area_title">EXHIBITIORS</div>
            <div id="area_sub">ROOM 105参加者一覧</div>
            <div id="exhibitior_box">
                <div id="name_roma">EMA KAWABATA</div>
                <div id="name_ja">川端　恵茉</div>
            </div><div id="exhibitior_box">
                <div id="name_roma">ISATO YAHAGI</div>
                <div id="name_ja">矢作　伊佐斗</div>
            </div><div id="exhibitior_box">
                <div id="name_roma">KANAMI UCHIDA</div>
                <div id="name_ja">内田　果奈美</div>
            </div><div id="exhibitior_box">
                <div id="name_roma">KEITO WATANABE</div>
                <div id="name_ja">渡部　圭登</div>
            </div><div id="exhibitior_box">
                <div id="name_roma">MAKO KOMATSU</div>
                <div id="name_ja">小松　真子</div>
            </div><div id="exhibitior_box">
                <div id="name_roma">NORIKA YOSHIMURA</div>
                <div id="name_ja">吉村　紀香</div>
            </div><div id="exhibitior_box">
                <div id="name_roma">RYUTARO TANAHASHI</div>
                <div id="name_ja">棚橋　隆太郎</div>
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
            <div id="footer_c">Copyright (C)2019-2021 Rikkyo Photo Club All Rights Reserved.</div>
        </div>
    </body>
</html>