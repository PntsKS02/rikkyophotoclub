<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="立教大学写真部の公式ページです。">
   <link rel="stylesheet" type="text/css" href="../css/NewTop.css" media="(min-width: 800px)">
   <link href="../css/NewTopM.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
   <link rel="stylesheet" href="https://use.typekit.net/dll3oer.css">
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="Top | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
    <title>Top | Rikkyo Photo Club</title>
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
                $('#loading_bar').css({top:(H2/2)});
                $('#loading_count').css({top:(H2/2)- -20});
                $('#pic_updown').css({top:H2 - 250});
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
    </script>
    </head>
    <body>
       <div id="loading_screen">
        <div id="loading_bar"></div>
        <div id="loading_count"></div>
    </div>
        <div id="title_area">
               <div id="t_t">
                <div id="top_title2">Rikkyo Photo Club</div>
                </div>
                <ul class="menubar_PC">
                    <a href = ""><li>TOP</li></a>
                    <a href = "history"><li>HISTORY</li></a>
                    <a href = "about"><li>ABOUT US</li></a>
                    <a href = "activities"><li>ACTIVITIES</li></a>
                    <a href = "exhibition"><li>EXHIBITION</li></a>
                    <a href = "link"><li>SNS/LINK</li></a>
                </ul>
        </div>
        <div id="main_area">
           <div id="main_box">
            <div id="main_title">EXHIBITION</div>
             <div class="main_subtitle" id="exhibition_now">開催中・開催予定の写真展</div>
              <a href = "spf2021">
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
            <div class="main_subtitle" id="exhibition_spf">SPF展</div>
            <a href = "spf2021">
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
                <a href = "spf2020">
            <div id="exhibition_box">
                <img class="exhibition_pic" src="../img/S20.jpeg">
                <div id="exhibition_detail">
                <div id="exhibition_title">立教大学写真部SPF展2020</div>
                <div id="exhibition_date">開催期間・・・2020/11/2→11/4</div>
                <div id="exhibition_place">開催場所・・・当サイト内特別ページ（オンラインのみの展示）</div>
                <div id="exhibition_caption">SPF展は、立教大学の学祭である「SPF」と同時に開催されます。<br>2020年の展示は、新型コロナウイルス感染拡大防止のため、学内では行いません。　当サイト特別ページのみでの公開となります。<br>特別ページは引き続きこちらでご覧いただけます。</div>
                </div>
            </div>
               </a>
                <a href = "spf2019">
               <div id="exhibition_box">
                <img class="exhibition_pic" src="../img/S19.jpeg">
                <div id="exhibition_detail">
                <div id="exhibition_title">立教大学写真部SPF展2019</div>
                <div id="exhibition_date">開催期間・・・2019/11/3→11/5</div>
                <div id="exhibition_place">開催場所・・・立教大学池袋キャンパス　1201</div>
                <div id="exhibition_caption">SPF展は、立教大学の学祭である「SPF」と同時に開催されます。<br>2019年の展示は、1号館（レンガ校舎）の2階、1201教室で行いました。　<br>展示は終了しましたが、特別ページは引き続きこちらでご覧いただけます。</div>
                </div>
            </div>
               </a>
            <div class="main_subtitle" id="exhibition_newcomer">新人展・六大学写真展</div>
             <a href = "https://bigsix-photoexhibition.com">
            <div id="exhibition_box">
                <img class="exhibition_pic" src="../img/%E3%82%B5%E3%83%A0%E3%83%8D%E3%82%A4%E3%83%AB.jpg">
                <div id="exhibition_detail">
                <div id="exhibition_title">六大学写真展2021</div>
                <div id="exhibition_date">開催期間・・・2021/3/1→3/9</div>
                <div id="exhibition_place">開催場所・・・特別サイト（オンラインのみの展示）</div>
                <div id="exhibition_caption">六大学写真展は、東京六大学（立教、明治、法政、早稲田、慶應、東京）の合同写真展です。<br>2021年の展示は、新型コロナウイルス感染拡大防止のため、特別サイトのみでの公開となります。</div>
                </div>
            </div>
               </a>
               <a href = "rookie2020">
               <div id="exhibition_box">
                <img class="exhibition_pic" src="../img/R20.jpeg">
                <div id="exhibition_detail">
                <div id="exhibition_title">立教大学写真部新人展2020</div>
                <div id="exhibition_date">開催期間・・・2020/11/2→11/4</div>
                <div id="exhibition_place">開催場所・・・特別サイト（オンラインのみの展示）</div>
                <div id="exhibition_caption">新人展は、写真部の新入部員が経験する初めての展示です。<br>2020年の展示は、新型コロナウイルス感染拡大防止のため、学内では行いません。　当サイト特別ページのみでの公開となります。<br>特別ページは引き続きこちらでご覧いただけます。</div>
                </div>
            </div>
               </a>
             <div class="main_subtitle" id="exhibition_volunteer">その他有志による展示</div>
              <a href = "kirokuijyou_kiokumiman">
            <div id="exhibition_box">
                <img class="exhibition_pic" src="../img/kirokukioku.jpg">
                <div id="exhibition_detail">
                <div id="exhibition_title">記録以上、記憶未満。</div>
                <div id="exhibition_date">開催期間・・・2020/2/24→2/26</div>
                <div id="exhibition_place">開催場所・・・DESIGN FESTA GALLERY</div>
                <div id="exhibition_caption">写真部部員、矢作伊佐斗と川端恵茉による2人展です。<br>アナログでの展示は終了しましたが、特設ページは公開いたします。</div>
                </div>
            </div>
               </a>
        </div>
        </div>
         <div id="footer">
            <div id="footer_title">Rikkyo Photo Club</div>
            <div id="footer_contents">
              <div id="fc_title">
                  Menu</div>
                <ul class="menu_footer">
                    <a href = "" class = "footer_a"><li>TOP</li></a>
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