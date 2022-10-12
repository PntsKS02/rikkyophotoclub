<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="六大学写真展の公式ページです。">
    <link rel="stylesheet" type="text/css" href="../css/bigsixF.css"media="(min-width: 800px)">
    <link href="../css/bigsixF.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <!--
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="focus-on.sakura.ne.jp/" /> 
<meta property="og:title" content="Focus-On:Top" /> 
<meta property="og:description" content="六大学写真展の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/img/camera23.jpg" /> 
   -->
    <title>六大学写真展 2021</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/mousewheel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script>
        /* デザイン整合区間 */
         $(window).on('load',function(){
             var H = $(window).height();
             var W = $(window).width();
             $('#backarea').css({'height':H}); 
             $('#colorsA').css({'height':H/2,'width':W});
             $('#colorsB').css({'top':H/2,'height':H/2,'width':W});
             $('#titlearea').css({'top': H/6+ "px",'height':(H/3)*2});
             $('.toppic').css({'top':((H/2)-((W*0.7)*1.5)/2)-90});
             var AX = $('.toppic').offset();
             var topH = $('.toppic').height();
             var topX = AX.top; 
             $('#titleU').css({'top': topX - 20 + "px",'height':(H/3)*2}); 
             $('#titleC').css({'top': H/2 - 40 + "px",'height':(H/3)*2});
             $('#titleD').css({'top': topX + topH -20 + "px",'height':(H/3)*2}); 
         });
    </script>
    </head>
    <body> 
        <!-- タイトルと背景 --> 
        <div id="backarea">
        <div id="colorsA">
            <div id="universitycolorL" style="background:#570F49;"></div>
            <div id="universitycolorC" style="background:#FF9000;"></div>
            <div id="universitycolorR" style="background:#0080FF;"></div>
        </div>
        <div id="colorsB">
            <div id="universitycolorL" style="background:#C63527;"></div>
            <div id="universitycolorC" style="background:#682A2B;"></div>
            <div id="universitycolorR" style="background:#884898;"></div>
        </div>
        <div id="titlearea">
           <img class="toppic" src="../img/S__22691858.jpg">
        </div>
        <div id="titleU">BIGSIX</div>
            <div id="titleC">PHOTO EXHIBITION</div>
            <div id="titleD">2021</div>
        </div>
        <!-- ここまでタイトルと背景 -->
        <!-- 文章 -->
        <div id="mainsentence">
            出だしの文章
        </div>
        <!--  ここまで文章 -->
        <!-- 作品一覧 -->　
        <div id="workbox" style="border-left:#BB0000 2px solid">
            <img class="">
            <div id="worktitle">合同作品</div>
            <div id="worksentence">近年最大の世界的な事件となり、私たちの生活にも多大な影響を及ぼした「コロナ禍」。<br>コロナが社会に与えた影響、取り戻したいかつての景色など、コロナ下における生活を軸に様々な表現を集めたテーマ展です。</div>
        </div>
        <div id="workbox" style="border-left:#0000BB 2px solid">
            <img class="">
            <div id="worktitle">個人作品</div>
            <div id="worksentence">六大学の写真部員が撮影した写真を展示しています。</div>
        </div>
        <!--  ここまで作品一覧 -->
        <!-- フッター -->
        <div id="footer">
            <div id="footertitle">BIGSIX PHOTOEXHIBITION</div>
            <div id="clickbtn">TOP</div><br>
            <div id="clickbtn">合同作品</div><br>
            <div id="clickbtn">個人作品</div><br>
            <div id="clickbtn">各大学リンク・SNS</div><br>
            <div id="ARR">Copyright (C) 2021 六大学写真展 All Rights Reserved.</div>
        </div>
        <!-- ここまでフッター -->
    </body>
</html>