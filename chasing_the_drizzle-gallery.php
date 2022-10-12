<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name="description" content="畠山龍、二瓶航、齋藤樹一による三人展「にわか雨を追いかけて」特設ページ">
   <link rel="stylesheet" type="text/css" href="../css/sanninten.css" media="(min-width: 1000px)">
   <link href="../css/sannintenM.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 999px)" >
   <!-- <link href="../css/sannintenT.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 999px)" > -->
   <link rel="stylesheet" href="https://use.typekit.net/dll3oer.css">
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary_large_image"/>  
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophotoclub.com/chasing_the_drizzle" /> 
<meta property="og:title" content="にわか雨を追いかけて" /> 
<meta property="og:description" content="畠山龍、二瓶航、齋藤樹一による三人展「にわか雨を追いかけて」特設ページ" /> 
<meta property="og:image" content="https://rikkyophotoclub.com/img/DMtop.jpg" /> 
    <title>GALLERY | にわか雨を追いかけて</title>
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
  (function(d) {
    var config = {
      kitId: 'bum6awv',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<link rel="stylesheet" href="https://use.typekit.net/nno7hai.css">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139853085-2');
</script>
<script>
    function menu(){
                        $('#menu_area').css({"display":"block"});
                        $('#menu_area').velocity({
                            top:"55px",
                            opacity:1
                        },{
                            duration:1000,
                            easing:"easeOutCubic",
                            complete:function(){
                                $('.close_icon').css({"display":"block"});
                                $('.menu_icon').css({"display":"none"});
                            }
                        });
                    }

                    function closes(){
                        $('#menu_area').velocity({
                            top:"-145px",
                            opacity:0
                        },{
                            duration:1000,
                            easing:"easeInCubic",
                            display:"none",
                            complete:function(){
                                $('.menu_icon').css({"display":"block"});
                                $('.close_icon').css({"display":"none"});
                            }
                        });
                    }

                    function nameclick(name){
                        $(window).scrollTop($('#' + name).position().top);
                        // $("html,body").animate({scrollTop:$('#' + name).offset().top});
                    }
                    
    </script>

    </head>
    <body>
    <div id="title_area">
           <a href = "chasing_the_drizzle"><div id="title">にわか雨を追いかけて</div></a></div>
           <img class="menu_icon" src="../img/Menuicon2.png" onclick = "menu()">
           <img class="close_icon" src="../img/Closeicon2.png" onclick = "closes()">
           <div id="menu_area">
               <a href = "chasing_the_drizzle-about"><li>ABOUT</li></a>
               <a href = "chasing_the_drizzle-biography"><li>BIOGRAPHY</li></a>
               <a href = "chasing_the_drizzle-gallery"><li>GALLERY</li></a>
               <a href = "chasing_the_drizzle-access"><li>ACCESS</li></a>
           </div>
         
        <div id="main_area">
            <div id="main_title">GALLERY</div>
            <div id="main_sentence">
                <div id = "name_select">
                    <div id = "name_s" onclick = "nameclick('hatakeyamaryu')">RYU HATAKEYAMA</div>
                    <div id = "name_s" onclick = "nameclick('niheiwataru')">WATARU NIHEI</div>
                    <div id = "name_s" onclick = "nameclick('saitokiichi')">KIICHI SAITO</div>
                </div>   
                <div class = "gallery_box" id = "hatakeyamaryu">
                    <div id = "gallery_name">RYU HATAKEYAMA</div>
                    <div id = "gallery_theme">Diary</div>
                    <div id = "theme_sentence"></div>
                        <img id = "gallery-W" src = "../img/LINE_ALBUM_diary_220826_0.jpg">
                        <img id = "gallery-W" src = "../img/LINE_ALBUM_diary_220826_1.jpg">
                        <img id = "gallery-W" src = "../img/LINE_ALBUM_diary_220826_2.jpg">
                        <img id = "gallery-W" src = "../img/LINE_ALBUM_diary_220826_3.jpg">
                        <img id = "gallery-W" src = "../img/LINE_ALBUM_diary_220826_4.jpg">
                        <img id = "gallery-W" src = "../img/LINE_ALBUM_diary_220826_5.jpg">
                </div>
                <div class = "gallery_box" id = "niheiwataru">
                    <div id = "gallery_name">WATARU NIHEI</div>
                    <div id = "gallery_theme">human lost</div>
                    <div id = "theme_sentence"></div>
                    
                        <img id = "gallery-W" src = "../img/2021-09-20_06-43-18_000.jpg">
                        <img id = "gallery-W" src = "../img/2021-06-15_14-49-10_690.jpg">
                        <img id = "gallery-H" src = "../img/2021-03-03_18-05-13_700.jpg">
                        <img id = "gallery-W" src = "../img/2021-11-28_21-32-03_340.jpg">
                        <img id = "gallery-W" src = "../img/2022-05-24_22-44-24_004.jpg">
                        <img id = "gallery-W" src = "../img/DSCF3257.jpg">
                
                </div> 
                <div class = "gallery_box" id = "saitokiichi">
                    <div id = "gallery_name">KIICHI SAITO</div>
                    <div id = "gallery_theme">スキゾ・キッズ</div>
                    <div id = "theme_sentence"></div>
                        <img id = "gallery-H" src = "../img/LINE_ALBUM_スキゾ・キッズ_220826_0.jpg">
                        <img id = "gallery-H" src = "../img/LINE_ALBUM_スキゾ・キッズ_220826_1.jpg">
                        <img id = "gallery-H" src = "../img/LINE_ALBUM_スキゾ・キッズ_220826_2.jpg">
                        <img id = "gallery-H" src = "../img/LINE_ALBUM_スキゾ・キッズ_220826_3.jpg">
                        <img id = "gallery-W" src = "../img/LINE_ALBUM_スキゾ・キッズ_220826_4.jpg">
                        <img id = "gallery-H" src = "../img/LINE_ALBUM_スキゾ・キッズ_220826_5.jpg">
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