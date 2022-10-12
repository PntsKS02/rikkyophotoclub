<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
 <meta name="description" content="立教大学写真部の活動に関しての情報です。">
   <link rel="stylesheet" type="text/css" href="../css/NewTop.css" media="(min-width: 1000px)">
   <link href="../css/NewTopM.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >
   <link href="../css/NewTopT.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 999px)" >
   <link rel="stylesheet" href="https://use.typekit.net/dll3oer.css">
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
     <meta name="twitter:card" content="summary_large_image" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="立教大学写真部|ACTIVITIES" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="../img/キービジュ.png" /> 
    <title>立教大学写真部|ACTIVITIES</title>
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
        <div id="title_area">
               <div id="t_t">
                <a href = "index"><div id="top_title2">Rikkyo Photo Club</div></a>
                </div>
                <img class="menu" src="../img/menuwhite.png" onclick="menu()">
                <ul class="menubar_PC">
                   <div id="close" onclick="closed()">✕</div>
                    <a href = "index"><li>TOP</li></a>
                    <a href = "history"><li>HISTORY</li></a>
                    <a href = "about"><li>ABOUT US</li></a>
                    <a href = "activities"><li>ACTIVITIES</li></a>
                    <a href = "album"><li>ALBUM</li></a>  
                    <a href = "exhibition"><li>EXHIBITION</li></a>
                    <a href = "link"><li>SNS/LINK</li></a>
                </ul>
        </div>
        <div id="main_area">
           <div id="main_box">
            <div id="main_title">ACTIVITIES</div>
              <div id="notice">
                  <div id="notice_title">ご注意</div>
                  <div id="notice_sentence">2022年の写真部におけるイベントの実施については、新型コロナウイルスの感染の状況や社会情勢によって中止になることもあります。</div>
              </div>
               <div class="main_subtitle" id="meeting">部会</div>
            <div id="new_history">
                <div id="history_sentence">
		<div id="info_area">
		<div id="title3">部会</div>
       <img class="info_pic" src="../img/S__112885762.jpg">
       <div id="info_sentence">
           部会を毎週土曜日の13：00～に行っています。<br>
           【部会の主な内容】<br>
1． 連絡事項<br>
写真部の活動および行事予定の説明があります。<br>
主に、SPF・新人展等写真の締め切り、写真部によるイベントの告知などが行われます。<br>
2． 写真のセレクト<br>
写真部では、SPFや新人展等に写真を出す際に、セレクトが必要となっています。<br>
セレクトは、写真を出し合って皆で意見を交換する場としています。<br>
           
       </div>
        </div>
                </div>
               </div>
            <div class="main_subtitle" id="exhibit">展示</div>
            <div id="new_history">
                <div id="history_sentence">
		<div id="info_area">
		<div id="title3">SPF展</div>
       <img class="info_pic" src="../img/G4.jpg">
       <div id="info_sentence">
           SPF展は、11月に立教大学が行う学祭「SPF」に合わせて写真部が行う最大の展示です。<br>
           また、対外的に実施するため多くの人に写真を見てもらう機会となります。<br>
           部員の個性的な作品をお楽しみください。<br><br>
           例年は、1号館（レンガ校舎）の教室で展示を行っていますが、2020年と2021年は新型コロナウイルス感染拡大防止のため当サイトでのオンライン展示となりました。<br>
           
       </div>
        </div>
           <div id="info_area">
		<div id="title3">新人展</div>
       <img class="info_pic" src="../img/KJ.jpg">
       <div id="info_sentence">
           新人展は、写真部の新入部員が経験する初めての展示となります。<br>
           2020年からフィルムとデジタルの両方で展示を行っています。<br>
           フィルムでは、部室にある暗室を利用した自家現像を通じて技術の伝承を図っています。<br><br>
           2022年は、5号館の廊下で展示を行います。<br>
           
       </div>
        </div> 
        <div id="info_area">
		<div id="title3">有志による展示</div>
       <img class="info_pic" src="../img/gar1.jpeg">
       <div id="info_sentence">
           立教大学写真部では、有志による展示も行っています。<br>
           2021年度は、4年生の部員による「卒展」と「Garden.」の2展示を行いました。<br>
           これらの展示に関しての情報は、EXHIBITIONのページをご覧ください。
       </div>
        </div>

               <div id="info_area">
		<div id="title3">六大学写真展</div>
       <img class="info_pic" src="../img/キャプチャ4.jpeg">
       <div id="info_sentence">
        例年、3月の頭に行っています。<br>
        東京六大学（立教、明治、法政、早稲田、慶應、東京）の写真部による展示です。<br>
        2018年は渋谷のギャラリールデコにて開催し、2020年はオンライン上で開催しました。
       </div>

        </div>
                </div>
               </div>
            <div class="main_subtitle" id="other">レクリエーション・その他</div>
            <div id="new_history">
                <div id="history_sentence">
		<div id="info_area">
		<div id="title3">撮影会</div>
       <img class="info_pic" src="../img/SDIM0007a.jpg">
       <div id="info_sentence">
           不定期で実施しています。<br>
           部員を3，4人程度のグループで分けそれぞれ行き先を設定し撮影を行います。<br>
           また、この撮影会での写真は「ALBUM」にも掲載しておりますのでそちらも併せてご覧ください。<br>
       </div>
        </div><div id="info_area">
		<div id="title3">合宿</div>
       <img class="info_pic" src="../img/G1.jpg">
       <div id="info_sentence">
           例年9月の頭に実施しています。<br>
           2019年は2泊3日で、群馬県の尾瀬で行いました。<br>
           部員同士、ぐっと仲良くなれるイベントです。　また、思い思いに写真を撮れる機会でもあります。<br>
       </div>
        </div><div id="info_area">
		<div id="title3">バーベキュー</div>
       <img class="info_pic" src="../img/B1.jpg">
       <div id="info_sentence">
       例年5月頃に荒川沿いで行なっています。<br>
       部員みんなで食べるお肉は格別に美味しいですよ～<br>
       新入部員と既存部員の親睦も深まるイベントの1つです！<br><br>
       </div>
        </div><div id="info_area">
		<div id="title3">三送会</div>
       <img class="info_pic" src="../img/K1.jpg">
       <div id="info_sentence">
        例年、年末にバーを貸し切ってパーティを行います。<br>
        ここでは、部活を引退する三年生を盛大に送り出す回として部員全員で盛り上がります。。<br>
       </div>
        </div>
               </div>
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