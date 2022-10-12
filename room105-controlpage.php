<?php
session_start();
    if (isset($_SESSION['control'])){
        
    }else{
        header("location: room105-control-login");
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
        <meta name="twitter:card" content="summary" /> 
        <meta name="twitter:site" content="@Pnts_KS02" /> 
        <meta property="og:url" content="rikkyophotoclub.com/" /> 
        <meta property="og:title" content="room105-mypage | Rikkyo Photo Club" /> 
        <meta property="og:description" content="立教大学写真部の公式ページです。" /> 
        <meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
        <title>room105-mypage | Rikkyo Photo Club</title>
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
            /*
             function names(){
                 var PSname = $('[name="firstname"]').val();
                 $.ajax({
               type:"POST",
               url:"spf2021-registername.php",
               data:{
                   firstname:PSname
               }, 
               success: function(result){
                   result = JSON.parse(result); 
                   console.log(result); 
                   let result2 = result;
                   if(result2 == 'yet'){
                       $('[name="firstname"]').css({"background":"#fc8181"});
                        $('#log_IP_N').html("既にこの名前で登録しています！<br>ログインページからログインしてください");
                        input.disabled = "true";
                   }else{
                        input.disabled = "false";
                         $('#log_IP_N').html("");
                    $('[name="firstname"]').css({"background":"#ffffff"});
                      
                   } 
             }
                 });
             } */
            
            function input(){ 
                var PScheck = $('[name="inputsPScheck"]').val();
                var PS = $('[name="inputsPS"]').val();
                if(PScheck == PS){
                    $('#log_IP_W').html("");
                     $('[name="inputsPScheck"]').css({"background":"#ffffff"});
                    $("#button").removeAttr('disabled');
                }else{
                    $('#log_IP_W').html("確認用パスコードが一致しません!");
                    $('[name="inputsPScheck"]').css({"background":"#fc8181"});
                     $("#button").attr('disabled');
                }
            }
            
            function login(){
                window.location.assign("room105-login");
            }
        </script>
    </head> 
    <body> 
            <a href = "room105"><div id="gallery_title" onclick="toppage()">ROOM105</div>
            <div id="gallery_subtitle">Rikkyo Photo Club<br>Graduate Exhibition 2022</div></a>
            <div id="area_mypage" >
                <div id="area_title">コントロールページ</div> </div>
        <a href = "room105-exhibitior2"><div id="button_2">参加者情報確認</div></a>
        <a href = "room105-picinsta"><div id="button_2">Instagram用写真の確認</div></a>
        <a href = "room105-list"><div id="button_2">提出中の作品確認</div></a>
        <a href = "room105-activities"><div id="button_2">アクティビティの確認</div></a>
        <a href = "room105-control-logout"><div id="button_2">ログアウト</div></a>
       </body>
</html>