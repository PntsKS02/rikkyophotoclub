<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="立教大学写真部の公式ページです。">
   <link rel="stylesheet" type="text/css" href="../css/rookie2020.css" media="(min-width: 800px)">
   <link href="../css/rookie2020M.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophotoclub.com/" /> 
<meta property="og:title" content="SPF 2020 | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
    <title>SPF 2020 | Rikkyo Photo Club</title>
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
    
    function menu(){
			$('.menubar').css({'display':'block'});
			$('.menu').velocity({
				opacity:0
			},{
			duration:1000	
		});
			$('.menubar').velocity({
				opacity:1,
				marginLeft:'55%'
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
			$('.menubar').velocity({
				opacity:0,
				marginLeft:'100%'
		},{
			duration:1000,
			display:'none'
		});
		}
    
     function photo(){
        window.location.assign("rookie2020caption.php");
    }
    function another(){
        window.location.assign("spf2020.php");
    }
</script>
    </head>
    <body> 
	<img class="menu" src="../img/menuwhite.png" onclick="menu()">
      <ul class="menubar">
	<div id="close" onclick="closed()">✕</div>
          <a href="index.php"><li>Top</li></a>
		<a href="history.php"><li>History</li></a>
		<a href="about.php"><li>About Us</li></a>
		<a href="activities.php"><li>Activities</li></a>
		<a href="member.php"><li>Member</li></a>
		<a href="exhibition.php"><li class="activate">Exhibition</li></a>
		<a href="Portfolio.php"><li>Portfolio</li></a>
		<a href="link.php"><li>SNS/Link</li></a>
		</ul>
       <div id="titlearea">
        <div id="title">Rookie Exhibition 2020</div>
        <div id="subtitle">Rikkyo Photo Club Exhibition</div>
        </div>
        <img class="toppic" src = "../img/RS__88367108.jpg">
        <img class="toppicM" src = "../img/RS__1335311.jpg">
        <div id="phototitle">---</div>
        <div id="sentencearea">
            <div id="stitle">About</div>
            <div id="sentence">この度は、私たち立教大学写真部の展示にアクセスしていただき 誠にありがとうございます。

<br><br>
写真部では、デジタル写真やフィルム写真での撮影、暗室作業などの活動を行なっております。<br>
また 作品を持ち寄り、部員同士で評価し合うことで、写真技術の向上を目指しています。

<br><br>
例年、学園祭での展示は 立教大学池袋キャンパス本館にて行なっておりましたが、今年は新型コロナウイルスの影響でオンラインサイトでの開催となりました。
<br>
インターネット上での展示ということで、対面での意見交換がしにくい分、「いいね」や「公開コメント」機能を実装し工夫いたしました。
<br>

また 本来10月には、学内にて新入部員による「新人展」を開催する予定でしたが、こちらも新型コロナウイルスの影響を受け、学園祭期間のオンライン展示と同時開催となりました。
<br>
8月からようやく対面での部活動が再開し、暗室も利用禁止という制約付きの中でしたが、23名の新入部員が思い思いに作品づくりを行ないました。
そちらも合わせてご覧ください。
<br><br>

今回の展示は、共通するテーマを持たないため、部員1人ひとりの個性が発揮されものとなっております。
是非あなたのお気に入りの一枚を見つけてみてください。
            </div></div><div id="sentencearea">
            <div id="stitle">History</div>
            <div id="sentence">現在、更新情報がありません。</div>
        </div><div id="sentencearea">
            <div id="stitle">Photo</div>
            <div id="sentence">写真はこちらのページからご覧いただけます。</div>
            <div id="back" onclick="photo()">Rookie2020 Photo　→</div>
        </div><div id="sentencearea">
            <div id="stitle">Share</div>
            <div id="social">
                <a href = "https://twitter.com/intent/tweet?url=https%3A%2F%2Frikkyophotoclub.com%2Fspf2019&text=SPF2019%20｜%20Rikkyo%20Photo%20Club%0a&via=rikkyo_photo&related=rikkyo_photo"><img class = "twitter" src = "../img/Twitter_Logo_Blue.png"></a>
                <a href = "line://msg/text/https%3A%2F%2Frikkyophotoclub.com%2Fspf2019"><img class = "line" src = "../img/LINE_APP.png"></a>
                <a href = "https://www.facebook.com/rikkyophoto/"><img class = "facebook" src = "../img/f_logo_RGB-Blue_100.png"></a>
		</div>
            <div id="sentence"></div>
        </div>
        <div id="another" onclick="another()">
            <div id="asub">Rikkyo Photo Club Exhibition</div>
            <div id="asentence">St.Paul's Festival 2020</div>
        </div>
        	<div id="footer" style = "margin-top:200px;">
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
                       <div id="sentencearea2">写真撮影をご依頼の際は、<a href = "works">こちら</a>をご一読の上、下記のアドレスまたは立教大学写真部の公式TwitterにDMを送信してください。<br>address : <a href="mailto:rikkyophotoclub@gmail.com" id="ta">rikkyophotoclub@gmail.com</a>
            </div>
			<div id="title2">SNS</div>
			<div id="social">
                <a href = "https://twitter.com/rikkyo_photo"><img class = "twitter" src = "../img/Twitter_Logo_Blue.png"></a>
                <a href = "https://www.facebook.com/rikkyophoto/"><img class = "facebook" src = "../img/f_logo_RGB-Blue_100.png"></a>
		</div>
		<a href = "login"><div id="loginto">部員ログイン >>></div></a>
			<div id="names">Copyright (C)2019-2020 Rikkyo Photo Club All Rights Reserved.</div>
		</div>
    </body>
</html>