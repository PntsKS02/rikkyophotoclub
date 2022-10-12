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
<meta property="og:image" content="https://focus-on-pic.com/gazou2.png" /> 
    <title>Portfolio | Rikkyo Photo Club</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/color.js"></script>
    <script src="../js/mousewheel.js"></script>
    <script>
			$(window).on('load',function(){
				var H = $(window).height();
		var W = $(window).width();
		$('#newpage,#newpage2,#newpage3').velocity({
				opacity:1
		},{
			duration:1000	
		});
		if(W > 800){
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
		}
				if(W < 800){
			Bflg = 1;
	       $.cookie('Bflg',1);
			$('.area1').velocity({
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
				}
				});
		$(window).scroll(function(){
			 Aflg = $.cookie('Bflg');
		 var H = $(window).height();
		var W = $(window).width();
		 var ES = $(window).scrollTop();
		 console.log(ES);
			if(W < 800){
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
				$('#schedule').velocity({
				left:'10%',
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
		<a href="activities.php"><li>Activities</li></a>
		<a href="member.php"><li>Member</li></a>
		<a href="exhibition.php"><li>Exhibition</li></a>
		<li class="activate">Portfolio</li>
		<a href="link.php"><li>SNS/Link</li></a>
		</ul>
	<!-- Top page area End-->
	<div id="newpage">
	<div id="areatitle" class="area1">Portfolio</div>
	<div id="mainsentence">当ページは編集中です。<br>公開は12月頃を見込んでいます。<br>恐れ入りますが、他のページをご覧ください。
		</div>
		</div><div id="footer">
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