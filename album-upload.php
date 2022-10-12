<?php
session_start();
?>
<html lang = "ja"> <!--言語設定です-->
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta charset = "utf-8">
        <meta name=”description” content="Portfolio of Train, Nature and more."> 
        <link rel="stylesheet" type="text/css" href="../css/NewTop.css"media="(min-width: 800px)">
        <link href="../css/NewTopM.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
        <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
        <meta name="twitter:card" content="summary_large_image" /> 
        <meta name="twitter:site" content="@Pnts_KS02" /> 
        <meta property="og:url" content="focus-on.sakura.ne.jp/" /> 
        <meta property="og:title" content="FOCUS ON:GALLERY" /> 
        <meta property="og:description" content="The portfolio of Train, Nature and more." /> 
        <meta property="og:image" content="https://focus-on-pic.com/img/GALLERY3.jpg" /> 
        <title>FOCUS ON:My Page</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139853085-1"></script>
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
	/*	$(function(){
			if(!$.cookie("namae")){
				
			}else{
				$("[name = 'namae']").val($.cookie("namae"));
				$("[name = 'faculty']").val($.cookie("faculty"));
				$("[name = 'year']").val($.cookie("year"));
			}

		}); */
	</script>
	</head>
	<body>
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
                    <a href = "exhibition"><li>EXHIBITION</li></a>
                    <a href = "link"><li>SNS/LINK</li></a>
                </ul>
        </div>
        <div id="main_area">
           <div id="main_box">
            <div id="main_title">ALBUM</div>
         <div id="area_mypage">
                <form id="picture_create" action="album-uploadcheck.php" method="post" enctype="multipart/form-data">
				写真:<input type="file" name="picture1[]" multiple = "multiple">
			<input type="submit" src="Login" style="margin-top: 50px; background: #008800;color: white;text-align: center;width: 80%; left: 10%;position: relative;">
			</form>
		</div>             
            </div>
        </div>
    </body>
</html>