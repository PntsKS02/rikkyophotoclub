<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="立教大学写真部の公式ページです。">
   <link rel="stylesheet" type="text/css" href="../css/About.css" media="(min-width: 800px)">
   <link href="../css/AboutM2.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="Top | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg"  /> 
    <title>Activites | Rikkyo Photo Club</title>
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
		$(window).on('load',function(){
				var H = $(window).height();
		var W = $(window).width();
			if(W > 800){
		$('#newpage,#newpage2,#newpage3,#schedule,#schedule2').velocity({
				opacity:1
		},{
			duration:1000	
		});
			$('.menubar').velocity({
				opacity:1,
				left:'85%'
		},{
			duration:1000,
			complete:function(){
				$(".activate").velocity({
			color:'#111111',
				backgroundColor:"#eeeeee"
		},{
			duration:1000
		});
			}
		});
		}else{
			$('#newpage,#newpage2,#newpage3').velocity({
				opacity:1
		},{
			duration:1000	
		});
			Bflg = 1;
	       $.cookie('Bflg',1);
			$('.area1').velocity({
				opacity:1,
				top:'100px',
				left:'5%',
				paddingLeft:'3%',
				width:'85%'
			},{
				duration:500,
				easing:'linear',
			});
			
				$('.area1').velocity({
				paddingTop:'10px',
				paddingBottom:'1px',
				height:'30px'
			},{
				duration:200,
				easing:'linear'
					});
			
			$('.area1').velocity({
				color:'#eeeeee'
			},{
				duration:400,
				easing:'linear'
					});
			$('#area').velocity({
				left:'5%',
				opacity:1
			},{
				delay:300,
				duration:400
					});
			$('#schedule,#schedule2').velocity({
				left:'10%',
				opacity:1
			},{
				delay:300,
				duration:400
					});
			}
				});
		$(window).scroll(function(){
				var H = $(window).height();
		var W = $(window).width();
			if(W < 800){
			 Aflg = $.cookie('Bflg');
		 
		 var ES = $(window).scrollTop();
		 console.log(ES);
			if(ES > 500){
				
						 Bflg = 1;
	       $.cookie('Bflg',1);
			$('.area2').velocity({
				left:'5%',
				paddingLeft:'3%',
				width:'85%'
			},{
				duration:500,
				easing:'linear',
			});
			
				$('.area2').velocity({
				paddingTop:'10px',
				paddingBottom:'1px',
				height:'30px'
			},{
				duration:200,
				easing:'linear'
					});
			
			$('.area2').velocity({
				color:'#eeeeee'
			},{
				duration:400,
				easing:'linear'
					});
			$('#areab').velocity({
				left:'0',
				opacity:1
			},{
				delay:300,
				duration:400
					});
				}
			}
				});
		
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
		
		function areas(areaa){
			$('#schedule,#schedule2,#confrence,#newSPF').velocity({
				opacity:0
			},{
			duration:400,
				display:'none',
				complete:function(){if(areaa == "newpage"){
				areaa = "#schedule,#schedule2";
			}else{
				areaa = "#" + areaa;
			}
			$(areaa).css({'display':'block'}); 
			$(areaa).velocity({
				opacity:1
			},{
				duration:400
			});
		}
			});
		}
	</script>
	</head>
	<body>
		<div id="title">Rikkyo Photo Club</div>	
		<div id="bar"></div>
	<img class="menu" src="../img/menu.png" onclick="menu()">
	<ul class="menubar">
	<div id="close" onclick="closed()">✕</div>
		<a href="index.php"><li>Top</li></a>
		<a href="index.php"> </a>
		<a href="history.php"><li>History</li></a>
		<a href="about.php"><li>About Us</li></a>
		<li class="activate">Activities</li>
		<a href="member.php"><li>Member</li></a>
		<a href="exhibition.php"><li>Exhibition</li></a>
		<a href="Portfolio.php"><li>Portfolio</li></a>
		<a href="link.php"><li>SNS/Link</li></a>
	</ul>
	<!-- Top page area End-->
	<div id="newpage">
	<div id="areatitle" class="area1">Activities</div>
	<div id="area3">
	<div id="areaselect">
		<div id="a1" class="select1" onclick="areas('newpage')">年間行事</div>
		<div id="a2" class="select1" onclick="areas('confrence')">部会</div>
		<div id="a3" class="select1" onclick="areas('newSPF')">新人展/SPF</div>
	</div>
		</div>
		<div id="schedule">
			<div id="month" class="apill">
				<div id = "rist" class="a1">4</div>
				<div id="risttitle">新歓展</div>
				<div id="ristsentence">新たに入部する学生向けに、写真の展示を行います。</div>
				<div id="risttitle">ピクニック</div>
				<div id="ristsentence">写真部の新歓の一環として撮影を兼ねてピクニックを行います。</div>
			</div><div id="month" class="May">
				<div id = "rist" class="a1">5</div>
				<div id="risttitle">バーベキュー</div>
				<div id="ristsentence">新入部員と既存部員との親睦を図るため、毎年実施しています。</div>
				<div id="risttitle">新人展講習会</div>
				<div id="ristsentence">カメラ初心者向けに、写真撮影の基本を身に着ける講習を行っています。</div>
			</div><div id="month" class="June">
				<div id = "rist" class="a1">6</div>
				<div id="risttitle">OB会</div>
				<div id="ristsentence">ーーーーーーーーーーー</div>
			</div><div id="month" class="June">
				<div id = "rist" class="a1">7</div>
				<div id="risttitle">学外展</div>
				<div id="ristsentence">フォトギャラリーを貸し切り、展示を行います。</div>
				<div id="risttitle">上半期納会</div>
				<div id="ristsentence">夏休みの初めに行っています。</div>
			</div><div id="month" class="June">
				<div id = "rist" class="a1">8</div>
				<div id="risttitle">　</div>
				<div id="ristsentence">　</div>
			</div><div id="month" class="June">
				<div id = "rist" class="a1">9</div>
				<div id="risttitle">合宿</div>
				<div id="ristsentence">写真部最大のイベント、合宿は毎年夏休みの終わりに行います。</div>
			</div>
		</div>
		<div id="schedule2">
			<div id="month" class="apill">
				<div id = "rist" class="a1">10</div>
				<div id="risttitle">新人展</div>
				<div id="ristsentence">新入部員による初展示を行います。</div>
			</div><div id="month" class="May">
				<div id = "rist" class="a1">11</div>
				<div id="risttitle">SPF展</div>
				<div id="ristsentence">立教大学の学祭にあわせて展示を行います。</div>
			</div><div id="month" class="June">
				<div id = "rist" class="a1">12</div>
				<div id="risttitle">三送会・納会</div>
				<div id="ristsentence">引退する3年生を送る会を毎年12月末に行っています。</div>
			</div><div id="month" class="June">
				<div id = "rist" class="a1">1</div>
				<div id="risttitle">　</div>
				<div id="ristsentence">　</div>
			</div><div id="month" class="June">
				<div id = "rist" class="a1">2</div>
				<div id="risttitle">　</div>
				<div id="ristsentence">　</div>
			</div><div id="month" class="June">
				<div id = "rist" class="a1">3</div>
				<div id="risttitle">六大学写真展</div>
				<div id="ristsentence">六大学の各写真部が写真を持ち寄り、ギャラリーを貸し切って展示します。</div>
				<div id="risttitle">卒展</div>
				<div id="ristsentence">卒業する部員による最後の展示となります。</div>
			</div>
		</div>
		<div id="confrence">
			<div id="mainsentence">
				部会は、毎週土曜日の13：00～に行われます。
				<br><br><br>
				【部会の主な内容】
				<div id = "titleinmain">1．  連絡事項</div>
				写真部の活動および行事予定はここで話されます。<br>主に、SPF・新人展等写真の締め切り、写真部によるイベントの告知などが行われます。<br><br>
				<div id = "titleinmain">2．  写真のセレクト</div>
				写真部では、SPFや新人展等に写真を出す際に、セレクトが必要となっています。<br>セレクトは、写真を出し合って皆で意見を交換する場としています。<br>セレクトの進行方法については、「SPF/新人展」に詳細に記してありますので、そちらをご覧ください。
				<br><br><br>
				なお部会は、テスト期間前とテスト期間中（7月と1月）には実施いたしません。　<br>
				新歓期間中、および新歓期間後およそ1ヶ月の間は、写真部有志による初心者向けの写真講座を行うことがあります。（参加自由）
			</div>
		</div>
		<div id="newSPF">
		<div id = "mainsentence">
		現在、当ページは編集中です。<br>恐れ入りますが、他のページをご覧ください。
			<!--<div id = "titleinmain">【新人展について】</div>
			新人展は、写真部の在籍年数が1年未満の方による写真展です。<br>
			春学期に入部した方はその年の秋に、秋学期に入部した方は翌年の秋に新人展に出展することになります。<br><br><br>
			<div id = "titleinmain">【新人展の流れ】</div>
			新人展では、出展する2～3人につき1人の写真経験者が付き、撮影・印刷・現像のアドバイスを受けながら作品を完成させていきます。<br>
			<div id = "box">
			1. 写真を撮影する（フィルム・デジタル共通）<br>
			新人展にて展示する写真を撮影します。　写真 
			</div> -->
			</div>
			</div>
		</div>
			<div id="footer" style="margin-top:1500px;">
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
			<div id="names">Copyright (C)2019-2020 Rikkyo Photo Club All Rights Reserved.</div>
		</div>
	</body>
</html>