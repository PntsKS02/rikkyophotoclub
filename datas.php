<?php
try{
        //追加事項の記入
        //PDOの設定
             $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        //PDOの実行
	$Top = 0;
	$sql = "select * from spf2019";
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute();
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $spf2019["id"] = $result["id"];
            $personal = $result["personal"];
		    $spf2019['personal'] = explode(',',$personal);
            $spf2019["picturetitle"] = $result["picturetitle"];
            $picturestyle = $result["picturestyle"];
		    $spf2019['picturestyle'] = explode(',',$picturestyle);
           $file = $result["file"];
		    $spf2019['file'] = explode(',',$file);
            $spf2019["caption"] = $result["caption"];
            $spf2019s[] = $spf2019;
        }
        unset($pdo);
}catch(PDOException $e){
	
}
?>
<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="立教大学写真部の公式ページです。">
   <link rel="stylesheet" type="text/css" href="../css/About.css" media="(min-width: 800px)">
   <link href="../css/AboutM3.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
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
		
		</script>
	</head>
<body>
		<div id="title">Rikkyo Photo Club</div>	
		<div id="bar"></div>
	<img class="menu" src="../img/menu.png" onclick="menu()">
	<ul class="menubar">
	<div id="close" onclick="closed()">✕</div>
		<li><a href="index.php">Top</a></li>
		 
		<li class="activate">History</li>
		<li class="activate2">About Us</li>
		<li>Activities</li>
		<li>Member</li>
		<li>Exhibition</li>
		<li>Portfolio</li>
		<li>SNS/Link</li>
	</ul>
	<!-- Top page area End-->
	<div id="newpage">
	<div id="areatitle" class="area1">SPF2019　写真データ</div>
	<div id = "area" >
   <table id="data">
	   <tr><th>名前</th><th>学部</th><th>学年</th><th>写真名</th>
   <?php
	foreach($spf2019s as $spf2019){
		?>
		<tr><td><?= $spf2019["personal"][0] ?></td><td><?= $spf2019["personal"][1] ?></td><td><?= $spf2019["personal"][2] ?></td><td><?= $spf2019["picturetitle"] ?></td></tr>
		<?php
	}
	   ?>
   </table>
		</div>
	</div>
	</body>
</html>