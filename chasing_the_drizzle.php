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
    <title>にわか雨を追いかけて</title>
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
     $(document).ready(function(){
                var H2 = $(window).height();
                var W = $(window).width();
                $.cookie('K',1);
     });
    
     $(window).on('load',function(){
                         AK = 1;
                         setInterval(top_imgslide,3000,AK);
                     });
                        
                         const top_imgslide = function(AK){ 
                            var H2 = $(window).height();
                            var W = $(window).width();
                        if(W > 800){
                            var type1 = "#t";
                         }else{
                            var type1 = "#m";
                         }
                              var K = Number($.cookie('K'));
                             console.log(K);
                        if(K > 8){
                            var properties = {
                                opacity:0
                                };
                            var options = {
                                queue:"a",
                                duration:1000
                               };
                            $(type1 + 'img_9').velocity(properties, options);
                            $(type1 + 'img_1').css({"display":"block"});
                            var _properties = {
                                opacity:1
                            };
                            var _options = {
                                queue:"b",
                                duration:1000
                            };
                            
                            $(type1 + 'img_1').velocity(_properties, _options);
                            
                             $(type1 + 'img_9').dequeue("a");
                             $(type1 + 'img_1').dequeue("b");
                             K = 1;
                             console.log(K);
                             $.cookie('K',K);
                        }else{
                           var properties = {
                                opacity:0
                                };
                            var options = {
                                queue:"a",
                                duration:1000
                               };
                            $(type1 + 'img_' + K).velocity(properties, options);
                               K2 = K - -1;
                            $(type1 + 'img_' + K2).css({"display":"block"});
                            var _properties = {
                                opacity:1
                            };
                            var _options = {
                                queue:"b",
                                duration:1000
                            };
                            
                            $(type1 + 'img_' + K2).velocity(_properties, _options);
                            
                             $(type1 + 'img_' + K).dequeue("a");
                             $(type1 + 'img_' + K2).dequeue("b");
                                                  
                             console.log(K2);
                             $.cookie('K',K2);
                        }
                    }
                           
                    
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
            
    </script>
    </head>
    <body style="background:#333;">
       <div id="title_area">
           <div id="title">にわか雨を追いかけて</div></div>
           <img class="menu_icon" src="../img/Menuicon2.png" onclick = "menu()">
           <img class="close_icon" src="../img/Closeicon2.png" onclick = "closes()">
           <div id="menu_area">
               <a href = "chasing_the_drizzle-about"><li>ABOUT</li></a>
               <a href = "chasing_the_drizzle-biography"><li>BIOGRAPHY</li></a>
               <a href = "chasing_the_drizzle-gallery"><li>GALLERY</li></a>
               <a href = "chasing_the_drizzle-access"><li>ACCESS</li></a>
           </div>
       
        <img class="sannin_imgP" id="timg_1" src = "../img/IMG_6515.jpeg">
        <img class="sannin_imgP" id="timg_2" src = "../img/IMG_6519.jpeg">
        <img class="sannin_imgP" id="timg_3" src = "../img/IMG_6520.jpeg">
        <img class="sannin_imgP" id="timg_4" src = "../img/IMG_6521.jpeg">
        <img class="sannin_imgP" id="timg_5" src = "../img/IMG_6522.jpeg">
        <img class="sannin_imgP" id="timg_6" src = "../img/IMG_6523.jpeg">
        <img class="sannin_imgP" id="timg_7" src = "../img/A3B6855C-9014-4797-92E7-A207B9B5B259.jpeg">
        <img class="sannin_imgP" id="timg_8" src = "../img/54B4BFA7-0F97-4F54-A599-613D5BCCC9AF.jpeg">
        <img class="sannin_imgP" id="timg_9" src = "../img/A8BEF773-9139-48E7-82C2-2FA7F6F0389B.jpeg">

        <img class="sannin_imgM" id="mimg_1" src = "../img/IMG_6516.jpeg">
        <img class="sannin_imgM" id="mimg_2" src = "../img/IMG_6517.jpeg">
        <img class="sannin_imgM" id="mimg_3" src = "../img/IMG_6518.jpeg">
        <img class="sannin_imgM" id="mimg_4" src = "../img/IMG_6524.jpeg">
        <img class="sannin_imgM" id="mimg_5" src = "../img/IMG_6525.jpeg">
        <img class="sannin_imgM" id="mimg_6" src = "../img/IMG_6526.jpeg">
        <img class="sannin_imgM" id="mimg_7" src = "../img/E486930F-D261-4D5F-8328-017C2CF48419.jpeg">
        <img class="sannin_imgM" id="mimg_8" src = "../img/712B7DCB-026B-4D0E-A7A7-0EDB928C5284.jpeg">
        <img class="sannin_imgM" id="mimg_9" src = "../img/5B90F3A2-4166-4509-9060-4287218A5B6F.jpeg">
    </body>
</html>