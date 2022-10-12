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
    <title>About us | Rikkyo Photo Club</title>
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
		
		function send(){
		var data = {memberid:$('#loginarea [name=memberid]').val() , password:$('#loginarea [name=password]').val()};
		console.log($('#loginarea [name=password]').val());
		$.ajax({
			type: "POST",
			url:'login2.php',
			data:data,
		success: function(iv){
			if(iv == "Valid"){
				$.cookie("CH", "Vaild");
				window.location.href = 'config.php';
			}else if(iv == "Invalid"){
				$('#fall').html("パスワードが違います。入力し直してください。");
			}else if(iv == "notfound"){
				$('#fall').html("そのメンバーIDは存在しません。入力し直してください。");
			}else{
				$('#fall').html("パスワードが入力されていません。");
			}
			console.log(iv);
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
		<li><a href="index.php">Top</a></li>
		 
		<li class="activate2">History</li>
		<li class="activate">About Us</li>
		<li>Activities</li>
		<li>Member</li> 
		<li>Exhibition</li> 
		<li>Portfolio</li>
		<li>SNS/Link</li>
	</ul>
	<!-- Top page area End-->
	<div id="newpage">
	<div id="areatitle" class="area1">Login</div>
	<div id = "area" >
	<form id="loginarea" method = "post" >
				ID:<input type="text" name= "memberid">
				　PASS:<input type="password" name = "password">
				　<br>
				　<div id="fall"></div>
				　<input type="button" onclick="send()" value="Login >>>">
		</form>
		</div>
		</div>
	</body>
</html>