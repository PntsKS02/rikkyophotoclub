<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="立教大学写真部の公式ページです。">
   <link rel="stylesheet" type="text/css" href="../css/kk.css" media="(min-width: 800px)">
   <link href="../css/kkM.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Bellefair&display=swap" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophotoclub.com/" /> 
<meta property="og:title" content="記録以上、記憶未満。" /> 
<meta property="og:description" content="川端恵茉、矢作伊佐斗による写真展。" /> 
<meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
    <title>記録以上、記憶未満。 | Rikkyo Photo Club</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/color.js"></script>
    <script src="../js/mousewheel.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139853085-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139853085-2');
</script>
<script>
    function change(area){
        $('.' + area).css({'background':'block'});
    }
    
    window.addEventListener('DOMContentLoaded', function(){
  var igID = '17841424954030774';
  var token = 'EAAZAQqxM4wOkBAGm8e6N2ZB78ZCBiFpZBhDlVHY636ZBkf3pQ6ZAvQaBIpL4qurr4rfXY0MnwhhPUmfcijfC5IZC9seqVH479JeWpo8NJO7XDtsK4dlreofZBorOYk6MWjgBBqfM3gOt2EsTd6eT5EW1nRFyCN8VI679ZB8rZCZBRLlpwZDZD';
  var ulID = 'kirokuijyou_kiokumiman';
  postOutputInsta(igID, token, ulID);
}, false);
 
function postOutputInsta(igID, token, ulID) {
  const num   = 18;
  const XHR   = new XMLHttpRequest();
  const fAPI  = 'https://graph.facebook.com/';
  const query = 'media.limit(' + num + '){caption,like_count,media_url,permalink,timestamp}';
  const gURL   = fAPI + igID + '?fields=' + query + '&access_token=' + token;
  if(XHR){
    XHR.open('GET', gURL, true);
    XHR.send(null);   // nullは省略してもOK
    XHR.onreadystatechange = function(){
      var html = '';
      if(XHR.readyState === 4 && XHR.status === 200){
        var insta = JSON.parse(XHR.responseText);
        if (insta['media']) {
          if (insta['media']['data']) {
            $.each(insta['media']['data'],function(index, elem) {
              //html生成
              html += '<li>';
              html += '<a href="' + elem.permalink + '"><img src="' + elem.media_url + '" alt="" /></a>';
              html += '</li>';
            });
          }
        }
      } else {
        //エラー時の表示
        html += '<li>通信エラー</li>';
      }
      $('#photoarea').html(html);
    };
  }
}
    
    function change(area){
         $('.about,.access,.profile,.photo').velocity({
                    color:'#eeeeee',
				background:'transparent '
                });
        $('#about,#access,#profile,#photo,#twitter').velocity({
				opacity:0
		},{
			duration:500,
            display:"none",
            complete:function(){
                $('#' + area).css({display:'block'});
                $('#' + area).velocity({
                    opacity:1
                },{
			duration:500});
                $('.'+ area).velocity({
                    color:'#111111',
				backgroundColor:"#eeeeee"
                });
            }
		});
		}
    </script>
    </head>
    <body>
        <div id="titlew">記録以上、</div>
        <div id="titleh">記憶未満<span class="font">。</span></div>
        <div id="names">矢作伊佐斗　川端恵茉</div>
        <div id="place">Design Festa Gallery East 102</div>
        <div id="date">2020.2.14 >>> 2.16</div>
        <img class="topP" src="../img/98177.jpg">
        <img class="topD" src="../img/S__8085615.jpg">
        <ul id="menukk">
            <li id = "kkk" onclick="change('about')" class="about">About</li>
            <li id = "kkk" onclick="change('access')" class="access">Access</li>
            <li id = "kkk" onclick="change('profile')" class="profile">Profile</li>
            <li id = "kkk" onclick = "change('photo')"class = "photo">Photo</li>
        </ul>
        <div id="about"> 
			<div id="title2">About</div>
            <div id="sentence1c">「記録以上、記憶未満。」</div>
			<div id="sentence2c">
これは我々の写真に対する解釈の1つです。<br>しかしながら人類学において「写真」は記憶を想起させるメディアの1つとして扱われています。<br>なぜ我々がそれを記憶未満として解釈したか、では記録以上である所以はどこにあるのか。<br>当展示に来て、感じ取り、考えるきっかけ、もしくは答えとなれればと思っています。</div>
		</div><div id="profile"><div id="title2">Profile</div>
		<div id="M1">
		<div id="name" class = "N1">矢作伊佐斗</div>
			<div id="sentence3" class="S31">1999年生　京都府京都市出身<br>立教大学文学部史学科日本史学専修</div>
        </div><div id="M2">
		<div id="name" class = "N2">川端恵茉</div>
			<div id="sentence3" class="S32">1999年生　千葉県松戸市出身<br>立教大学観光学部観光学科</div>
        </div></div>
		<div id="access">
			<div id="title2">Access</div>
			<div id="sentence">Design Festa Gallery East 102</div>
			<div id="sentence2">〒150-0001　東京都渋谷区神宮前3-20-2</div>
			<div id="sentence2">明治神宮前駅　5番出口から徒歩5分</div>
			<div id="sentence2">原宿駅　竹下口から徒歩9分</div>
	        <a href = "https://www.google.co.jp/maps/place/〒150-0001+東京都渋谷区神宮前%EF%BC%93丁目%EF%BC%92%EF%BC%90−%EF%BC%92+デザインフェスタ%EF%BC%A5%EF%BC%A1%EF%BC%B3%EF%BC%B4/@35.6705111,139.7062409,17z/data=!3m1!4b1!4m5!3m4!1s0x60188ca31a6ee503:0x1660b3f36c7e2901!8m2!3d35.6705068!4d139.7084296
                       "><div id="butt">Map >>></div></a>
			<div id="title2">Open</div> 
			<div id="sentence">11:00~20:00</div>
			<div id="sentence2">14日は搬入が終了し次第開場<br>16日は19:00に閉場<br><br>14日の展示開始時刻については、Twitterにて告知します。</div>
        </div>
        <div id="twitter"> 
            <div id="title2">Twitter</div>
            <a class="twitter-timeline" data-height="400" data-width="350"data-theme="light" href="https://twitter.com/kiroku_kioku102?ref_src=twsrc%5Etfw" style="width:100%;">Tweets by kiroku_kioku102</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
        </div>
        <div id="photo">
			<div id="title2">Photo</div>
			<div id="sentence2"></div>
			<div id="photoarea"></div>
			<a href = "spf2019caption"><div id="click" ></div></a>
		</div>
       <div id="share">Share to SNS：<div id="social">
                <a href = "https://twitter.com/intent/tweet?url=https%3A%2F%2Frikkyophotoclub.com%2Fkirokuijyou_kiokumiman&text=記録以上、記憶未満。%20｜%20Rikkyo%20Photo%20Club%0a&via=kiroku_kioku102&related=kiroku_kioku102"><img class = "twitter" src = "../img/Twitter_Logo_Blue.png"></a>
                <a href = "line://msg/text/https%3A%2F%2Frikkyophotoclub.com%2Fkirokuijyou_kiokumiman"><img class = "line" src = "../img/LINE_APP.png"></a>
                <a href = "https://www.facebook.com/rikkyophoto/"><img class = "facebook" src = "../img/f_logo_RGB-Blue_100.png"></a>
		</div></div>
        <div id="footer" style = "margin-top:800px;">
			<div id="title">Rikkyo Photo Club</div>
			<div id="title2">Menu</div>
			<table id="menus">
				<tr>
                    <td><a href = "top">Top</a></td>
                    <td><a href = "history">History</a></td>
					</tr><tr>
                <td><a href = "about">About us</a></td>
                <td><a href = "activities">Activities</a></td>
					</tr><tr>
                <td><a href="member">Member</a></td>
                <td><a href = "exhibition">Exhibition</a></td>
				</tr><tr>
                <td><a href = "Portfolio">Portfolio</a></td>
                <td><a href = "link">SNS/Link</a></td>
				</tr>
			</table>
			<div id="title2">Place</div>
			<a href = "https://www.google.co.jp/maps/place/ウイリアムズホール/@35.7294518,139.7013359,17.54z/data=!4m5!3m4!1s0x60188d59f9f2fdfb:0x7b16098e235b911!8m2!3d35.7293041!4d139.7019023
                       "><div id="sentencearea">東京都豊島区西池袋3-34-1<br>立教大学ウィリアムズホール1階</div></a>
                       <div id="title2">Works</div>
            <div id="sentencearea2">写真撮影をご依頼の際は、<a href = "works">こちら</a>をご一読の上、下記のアドレスまたは立教大学写真部の公式TwitterにDMを送信してください。<br>address : <a href="mailto:rikkyophotoclub@gmail.com" id="ta">rikkyophotoclub.@gmail.com</a>
            </div>
			<div id="title2">SNS</div>
			<div id="social">
                <a href = "https://twitter.com/rikkyo_photo"><img class = "twitter" src = "../img/Twitter_Logo_Blue.png"></a>
                <a href = "https://www.facebook.com/rikkyophoto/"><img class = "facebook" src = "../img/f_logo_RGB-Blue_100.png"></a>
		</div>
		<a href = "login"><div id="loginto">部員ログイン >>></div></a>
			<div id="names2">Copyright (C)2019-2020 Rikkyo Photo Club All Rights Reserved.</div>
		</div>
    </body>
</html>