<?php
$idNum = $_GET['Num'];
       try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
          $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        //PDOの実行
		   $sql = "select * from albums where id = ?";
     $pstmt = $pdo->prepare($sql);
          $pstmt->bindParam('1', $idNum, PDO::PARAM_STR);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
              $album["id"] = $result["id"];
              $album["title"] = $result["title"];
              $album["tablename"] = $result["tablename"];
        $tablename = $album["tablename"];
              $album["top_pic"] = $result["top_pic"];
              $album["final_pic"] = $result["final_pic"];
            $albums[] = $album;
        }
           
            $sql = "select * from $tablename";
           $tstmt = $pdo->prepare($sql);
        $tstmt->execute(); 
         $rs = $tstmt->fetchall();
	foreach($rs as $result){
              $album2["id"] = $result["id"];
              $album2["file"] = $result["file"];
              $album2["squarefile"] = $result["squarefile"];
              $album2["type"] = $result["type"];
            $album2s[] = $album2;
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
     <meta name="twitter:card" content="summary_large_image" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="ALBUM | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="../img/キービジュ.png" /> 
    <title>ALBUM | Rikkyo Photo Club</title>
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
            url: 'album-2.php',
            data: {
                "Num": idNum,
                "table":"<?= $tablename ?>"
            },
				success: function(data_arr){
				data_arr2 = JSON.parse(data_arr);
                console.log(data_arr2);
                    if(idNum < 2){
                        $('#detail_back').css({"display":"none"});
                        $('#detail_next').css({"display":"block"});
                        $('#pic_next').attr('src',data_arr2[1]['squarefile']);
                        $('.detail_pic').attr('src',data_arr2[0]['file']);
                        $('#detail_title').html(data_arr2[0]['caption']); 
                        $('#detail_name').html(data_arr2[0]['name']);
                        var WH = data_arr2[0]['type'];
                        $.cookie('picNum', data_arr2[0]['id']);	
                    }else if(idNum > 22){
                        $('#detail_next').css({"display":"none"});
                        $('#detail_back').css({"display":"block"});
                        $('#pic_back').attr('src',data_arr2[0]['squarefile']);
                        $('.detail_pic').attr('src',data_arr2[1]['file']);
                        $('#detail_title').html(data_arr2[1]['caption']); 
                        $('#detail_name').html(data_arr2[1]['name']);
                        var WH = data_arr2[1]['type'];
                        $.cookie('picNum', data_arr2[1]['id']);	
                    }else{
                        $('#detail_back').css({"display":"block"});
                        $('#detail_next').css({"display":"block"});
                        $('#pic_back').attr('src',data_arr2[0]['squarefile']);
                        $('#pic_next').attr('src',data_arr2[2]['squarefile']); 
                        $('.detail_pic').attr('src',data_arr2[1]['file']);
                        $('#detail_title').html(data_arr2[1]['caption']);
                        $('#detail_name').html(data_arr2[1]['name']);
                        var WH = data_arr2[1]['type'];
                        $.cookie('picNum', data_arr2[1]['id']);	
                    }
                    console.log(WH);
                    if(WH == "Height"){ 
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
        
        function galleryback(){
            $('#gallery_detail').velocity({
                opacity:0
            },{
                duration:1300,
                easing:"easeInOutQuart",
                display:"none"
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
            <div id="main_title">ALBUM - <?= $album['title']?></div>
            <?php
						foreach($album2s as $album2){
						?>
                 <img class="album_rowpic" src="../<?= $album2['squarefile']?>" onclick="details(<?= $album2['id']?>)">
                  <?php 
                        }
						?>                
            </div>
        </div>
        <div id="gallery_detail">
            <div id="detail_left">
               <div id="gallery_back" onclick="galleryback()">◀ Gallery</div>
               <div id="detail_back" class = "deneba">
                   <div>◀</div>
                    <img class="detail_pic2" id = "pic_back" src="" onclick = "details('back')">
               </div>
                  <div id="detail_next" class = "deneba">
                      <div>▶</div>
                    <img class="detail_pic2" id = "pic_next"  src="" onclick = "details('next')">
               </div>
                <img class="detail_pic" src="">
            </div>
            <div id="detail_right">
                <div id="detail_title"></div>
                <div id="detail_name"><?= $album['title']?></div>
                <!--<div id="detail_caption">Picture Caption</div>-->
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