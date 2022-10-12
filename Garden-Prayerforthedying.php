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
    <script src="../js/EXIF.js"></script>
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
        function closes(){
            $('#menuzone').velocity({
                opacity:0
            },{
                duration:1300,
                easing:"easeInOutQuart",
                display:"none"
            });
        }
     
        
        function tobook(){
            $('#hyoushi').velocity({
                opacity:0
            },{
                display:"none",
                complete:function(){
                    $.cookie("pagenumber",1);
                     progress = (1 / 65)*100;
                   $('#progress_book').css({"width": progress + "%"});
                    $('#bookarea').css({'display':'block'});
                    $('#bookarea').velocity({
                        opacity:1
                    });
                }
            });
        }
        function tobookmobile(){
            $('#hyoushi_1').velocity({
                opacity:0
            },{
                display:"none",
                complete:function(){
                    $('#hyoushi_2').css({'display':'block'});
                    $('#hyoushi_2').velocity({
                        opacity:1
                    });
                }
            });
        }
        function tobookmobile2(){
            $('#hyoushi_2').velocity({
                opacity:0
            },{
                display:"none",
                complete:function(){
                     $.cookie("pagenumber",1);
                     progress = (1 / 65)*100;
                   $('#progress_bookmobile').css({"width": progress + "%"});
                    $('#hyoushi_1').css({'display':'none'});
                    $('#bookareamobile').css({'display':'block'});
                    $('#bookareamobile').velocity({
                        opacity:1
                    });
                }
            });
        }
        function tobookmobile3(){
            $('#urahyoushi_2').velocity({
                opacity:0
            },{
                display:"none",
                complete:function(){
                    $('#urahyoushi_1').css({'display':'block'});
                    $('#urahyoushi_1').velocity({
                        opacity:1
                    });
                }
            });
        }
        
        function book(distination){
            pagenumber = $.cookie("pagenumber");
            if(distination == "next"){
                pagenumber = pagenumber - -2;
            }else{
                 pagenumber = pagenumber - 2;
            }
            $.cookie("pagenumber",pagenumber);
            console.log(pagenumber);
            if(pagenumber > 66){
                 $('#bookarea').velocity({
                opacity:0
            },{
                     display:"none",
                complete:function(){
                     $('#urahyoushi').css({"display":"block"});
                     $('#urahyoushi').velocity({
                opacity:1
            });
            }
                 });
            }else{
            $('#bookareaon').velocity({ 
                opacity:0
            },{
                complete:function(){
                    $.ajax({
               type:"POST",
               url:"Garden-Prayforthedying-2.php",
               data:{
                   data:pagenumber
               },
               success: function(data_arr){
				data_arr2 = JSON.parse(data_arr);
                   console.log(data_arr2);
                   progress = (pagenumber / 65)*100;
                   $('#progress_book').css({"width": progress + "%"});
                   $('#book_left').html("<img class='book_pic_" + data_arr2[0]['type'] + "' id = 'pic_left' src = '../" + data_arr2[0]['file'] + "'>");
                   $('#book_right').html("<img class='book_pic_" + data_arr2[1]['type'] + "' id = 'pic_right' src = '../" + data_arr2[1]['file'] + "'>");
                   if(pagenumber == 66){
                       $('#book_right').css({display:"none"});
                   }
                    $('#bookareaon').velocity({
                opacity:1
            });
				}
           });
        }
            });
        }  
        }
        
        function bookmobile(distination){
            pagenumber = $.cookie("pagenumber");
            if(distination == "next"){
                pagenumber = pagenumber - -1;
            }else{
                 pagenumber = pagenumber - 1;
            }
            $.cookie("pagenumber",pagenumber);
            console.log(pagenumber);
            if(pagenumber > 65){
                 $('#bookareamobile').velocity({
                opacity:0
            },{
                     display:"none",
                complete:function(){
                     $('#urahyoushi_2').css({"display":"block"});
                     $('#urahyoushi_2').velocity({
                opacity:1
            });
            }
                 });
            }else{
            $('#book_1').velocity({
                opacity:0
            },{
                complete:function(){
                    $.ajax({
               type:"POST",
               url:"Garden-Prayforthedying-3.php",
               data:{
                   data:pagenumber
               },
               success: function(data_arr){
				data_arr2 = JSON.parse(data_arr);
                   console.log(data_arr2);
                   progress = (pagenumber / 65)*100;
                   $('#progress_bookmobile').css({"width": progress + "%"});
                   $('#book_1').html("<img class='book_pic_" + data_arr2[0]['type'] + "' id = 'pic_left' src = '../" + data_arr2[0]['file'] + "'>");
                    $('#book_1').velocity({
                opacity:1
            });
				}
           });
        }
            });
        } 
        }
        function toback(){
            window.location.assign("Garden-gallery");
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
<!--
               <div id="titlearea-2">
                   <div id="subtitle-2">Photo Exhibition</div>
                     <div id="title-2">Garden.</div>
               </div>
-->
            <div id="book_main_PC">
               <div id="hyoushi">
              <div id="going_right" onclick="tobook()">▶</div>
                   <img class="book_hyoushi" src="../img/%E8%A1%A8%E7%B4%99.jpg">
                   <div id="book_sentence">
                       「花を飾る行為は、祈りに似ている。」<br><br>
                       なんて言っていた君に、<br>
                       僕の祈りはどのように映るのだろうか。
                   </div>
               </div>
               <div id="bookarea">
               <div id="progress_book"></div>
                <div id="going_left" onclick="book('back')">◀</div>
                <div id="going_right" onclick="book('next')">▶</div>
                <div id="bookareaon">
                <div id="book_left">
                    <img class="book_pic_Height" id = "pic_left" src="../img/R1.jpg">
                </div>
                   <div id="book_right">
                    <img class="book_pic_Width" id = "pic_right" src="../img/R2.jpg">
                    </div></div>
                </div>
                 <div id="urahyoushi">
              <div id="going_left" onclick="toback()">◀ Gallery</div>
                   <div id="book_urasentence">
                       いつか人は死ぬ。<br>
                       今日生まれた子供は死に向かって生き続ける。<br>
                       夜は怖い。<br>
                       静寂は死を連想させる。<br>
                       死の世界を知るものは亡者だけ。<br>
                       僕達は死と対話できない。<br><br><br>
                       僕はいつも死が怖かった。<br>
                       どこにでもいる、ありふれた自分。<br>
                       生きている証が、生きていた証が欲しい。<br>
                       だから写真を撮り続ける。<br>
                       記録し続ける。　記憶を作り続ける。<br><br><br>
                       これは、花の死の記録。<br>
                       ありふれた、何の変哲も無い、花。<br>
                       僕がこの本を燃やしてしまえば、きっと忘れ去られてしまう。<br>
                       だから撮り続けた。<br>
                       これは、花の生の記録。<br><br><br>
                       矢作　伊佐斗
                   </div>
                   <img class="book_urahyoushi" src="../img/%E8%A3%8F%E8%A1%A8%E7%B4%99.jpg">
               </div>
            </div>
            <div id="book_main_mobile">
                   <div id="hyoushi_1">
              <div id="going_right" onclick="tobookmobile()">▶</div>
                   <img class="book_hyoushi" src="../img/%E8%A1%A8%E7%B4%99.jpg">
                   </div>
                   <div id="hyoushi_2">
                   <div id="going_right" onclick="tobookmobile2()">▶</div>
                   <div id="book_sentence">
                       「花を飾る行為は、祈りに似ている。」<br><br>
                       なんて言っていた君に、<br>
                       僕の祈りはどのように映るのだろうか。
                       </div></div>
               <div id="bookareamobile">
                <div id="progress_bookmobile"></div>
                <div id="going_left" onclick="bookmobile('back')">◀</div>
                <div id="going_right" onclick="bookmobile('next')">▶</div>
                <div id="book_1">
                    <img class="book_pic_Height" id = "pic_book" src="../img/R1.jpg">
                </div>
                </div>
                 <div id="urahyoushi_2">
              <div id="going_right" onclick="tobookmobile3()">▶</div>
                   <div id="book_urasentence">
                       いつか人は死ぬ。<br>
                       今日生まれた子供は死に向かって生き続ける。<br>
                       夜は怖い。<br>
                       静寂は死を連想させる。<br>
                       死の世界を知るものは亡者だけ。<br>
                       僕達は死と対話できない。<br><br><br>
                       僕はいつも死が怖かった。<br>
                       どこにでもいる、ありふれた自分。<br>
                       生きている証が、生きていた証が欲しい。<br>
                       だから写真を撮り続ける。<br>
                       記録し続ける。　記憶を作り続ける。<br><br><br>
                       これは、花の死の記録。<br>
                       ありふれた、何の変哲も無い、花。<br>
                       僕がこの本を燃やしてしまえば、きっと忘れ去られてしまう。<br>
                       だから撮り続けた。<br>
                       これは、花の生の記録。<br><br><br>
                       矢作　伊佐斗
                     </div></div>
                   <div id="urahyoushi_1">
                   <div id="going_left" onclick="toback()">◀ Gallery</div>
                   <img class="book_urahyoushi" src="../img/%E8%A3%8F%E8%A1%A8%E7%B4%99.jpg">
               </div>
            </div>
    </body>
</html>