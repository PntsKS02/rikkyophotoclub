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
        
        function ordersubmit(){
            $('.orderform').submit();
        } 
        
        function inputto(type){
            $('#' + type).prop('checked', true);
        }
        
        $(function(){
            $('.productpersonal').change(function(){
                $.cookie("personalname",$('#personalname').val());
                $.cookie("personaltel",$('#personaltel').val());
                $.cookie("personalmail",$('#personalmail').val());
                $.cookie("personalpostcode",$('#personalpostcode').val());
                $.cookie("personaladdress",$('#personaladdress').val());
                console.log($.cookie("personalname"));
            });
        });
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
                    <div id="area_title">Shop</div>
                    <div id="area_sentence">
                        <div id="shop_wrap">
                           <div id="shop_left">
                               <img class="shop_imgH" src="../img/%E8%A1%A8%E7%B4%99.jpg"></div> 
                            <div id="shop_right">
                                <div id = "shop_title">Prayer for the dying / Isato Yahagi</div>
                                <div id = "shop_fare">2,800 yen</div> 
                               
                            </div>
                        </div> <div id="shop_wrap">
                           <div id="shop_left">
                               <img class="shop_imgH" src="../img/LINE_ALBUM_%E5%9B%B3%E9%9D%A2A_220226_0.jpg"></div>
                            <div id="shop_right">
                                <div id = "shop_title">B0 プリント-A / Isato Yahagi</div>
                                <div id = "shop_fare">10,000 yen</div>
                  
                            </div>
                        </div><div id="shop_wrap">
                           <div id="shop_left">
                               <img class="shop_imgH" src="../img/LINE_ALBUM_%E5%9B%B3%E9%9D%A2A_220226_1.jpg"></div>
                            <div id="shop_right">
                                <div id = "shop_title">B0 プリント-B / Isato Yahagi</div>
                                <div id = "shop_fare">10,000 yen</div>
                  
                            </div>
                        </div><div id="shop_wrap">
                           <div id="shop_left">
                               <img class="shop_img" src="../img/LINE_ALBUM_%E5%9B%B3%E9%9D%A2B_220226_0.jpg"></div>
                            <div id="shop_right">
                                <div id = "shop_title">B0 プリント-C / Ema Kawabata</div>
                                <div id = "shop_fare">10,000 yen</div>
                  
                            </div>
                        </div><div id="shop_wrap">
                           <div id="shop_left">
                               <img class="shop_img" src="../img/LINE_ALBUM_%E5%9B%B3%E9%9D%A2B_220226_1.jpg"></div>
                            <div id="shop_right">
                                <div id = "shop_title">B0 プリント-D / Ema Kawabata</div>
                                <div id = "shop_fare">10,000 yen</div>
                     
                  
                            </div>
                        </div>
                    </div>
        </div> 
          <div id = "area_1">
                    <div id="area_title">注文フォーム</div>
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdtpKBrV9jMom5iXgIMeVLVMq3SK9xfNl0VfZeE-nNsjSfIog/viewform?embedded=true" width="80%" height="720" frameborder="0" marginheight="0" marginwidth="0" class="orderform">読み込んでいます…</iframe>
<!--
                    <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdtpKBrV9jMom5iXgIMeVLVMq3SK9xfNl0VfZeE-nNsjSfIog/formResponse" target="_self" method="POST" id="mG61Hd" jsmodel="TOfxwf Q91hve CEkLOc" data-draft-response="%.@.&quot;&quot;,1646495462417,1646495465199,null,&quot;3042648860138945896&quot;,null,[[null,null,[],false,null,null,518962865]]]" data-shuffle-seed="3042648860138945896" data-response="%.@.[]]" data-first-entry="0" data-last-entry="7" data-is-first-page="true" class = "orderform">
                       <div id="form_wrap">
                        <div id = "form_sentence">
                            購入希望作品を選択してください。
                        </div>
                        <input type="checkbox" class="producttypes" id="B0_A" name="entry.518962865"><div id="form_label">B0プリント-A</div>
                        <input type="checkbox" class="producttypes" id="B0_B" name="entry.518962865"><div id="form_label">B0プリント-B</div>
                        <input type="checkbox" class="producttypes" id="B0_C" name="entry.518962865"><div id="form_label">B0プリント-C</div>
                        <input type="checkbox" class="producttypes" id="B0_D" name="entry.518962865"><div id="form_label">B0プリント-D</div>
                        <input type="checkbox" class="producttypes" id="Prayerforthedying" name="entry.518962865"><div id="form_label">写真集"Prayer for the dying"</div>
                        
                        </div> <div id="form_wrap">
                        <div id = "form_sentence">
                        </div>
                        <div id="form_label2">お名前:</div><input type="text" class="productpersonal" id="personalname" name="entry.748007431">
                        <div id="form_label2">電話番号:</div><input type="text" class="productpersonal" id="personaltel" name = "entry.1500281939">
                        <div id="form_label2">メールアドレス:</div><input type="text" class="productpersonal" id="personalmail" name="entry.3004513">
                        <div id="form_label2">郵便番号:</div><input type="text" class="productpersonal" id="personalpostcode" name="entry.885902678">
                        <div id="form_label2">住所:</div><input type="text" class="productpersonal" id="personaladdress" name="entry.53612801">
                        <div id="form_label2">備考:</div><textarea class="productpersonaltext" id="personalbikou" name="entry.944544179"></textarea>
                        <div id="form_button" onclick="ordersubmit()">注文する</div>
                        </div></form>
                        <div id="ordercheck">
                            <div id="producttypescheck"></div>
                        </div>
-->
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