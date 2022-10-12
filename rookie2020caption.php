<?php
$favorites = $_COOKIE["favorites"];
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        //PDOの実行
	if(empty($_GET["Num"])){
		$Top = 5;	
	$sql = "select *from rookie2020";
        $Number = "pics";
    }else{
$Num = $_GET["Num"];
	$Top = 0;
	$sql = "select * from rookie2020 where id = '$Num'";
        $Number = "pics".$Num;
	}
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $rookie2020["id"] = $result["id"];
            $rookie2020["firstname"] = $result["firstname"];
            $rookie2020["middlename"] = $result["middlename"];
            $rookie2020["faculty"] = $result["faculty"];
            $rookie2020["title"] = $result["title"];
            $rookie2020["grade"] = $result["grade"];
            $rookie2020["file"] = $result["file"];
            $rookie2020["caption"] = $result["caption"];
            $rookie2020s[] = $rookie2020;
	$file = explode(',',$rookie2020['file']);
		if($picturestyle[0] === '組写真'){
			$ff = 5;
		}else{
			$ff = 0;
		}
        }
    $firstname = $rookie2020['firstname'];
    $sql = "SELECT * FROM rookie2020 WHERE firstname LIKE '%$firstname%'";
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $rookie2020p["id"] = $result["id"];
            $rookie2020p["firstname"] = $result["firstname"];
            $rookie2020p["middlename"] = $result["middlename"];
            $rookie2020p["title"] = $result["title"];
            $rookie2020p["grade"] = $result["grade"];
            $rookie2020p["faculty"] = $result["faculty"];
            $rookie2020p["file"] = $result["file"];
            $rookie2020p["caption"] = $result["caption"];
            $rookie2020ps[] = $rookie2020p; 
	$file = explode(',',$rookie2020p['file']);
    }
    
     $sql = "SELECT * FROM rookie2020comment WHERE pictureid = '$Num'"; 
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $rookiecomment["id"] = $result["id"];
            $rookiecomment["sentence"] = $result["sentence"];
            $rookiecomment["time"] = $result["time"];
        $rookiecomments[] = $rookiecomment; 
    }
    if(empty($rookiecomment)){
        $rookiecomment["sentence"] = "まだコメントがありません。";
        $rookiecomments[] = $rookiecomment;
    }
    
     $sql = "SELECT * FROM rookie2020 WHERE id IN($favorites)";
    
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $rookiefavorite["id"] = $result["id"];
            $rookiefavorite["personal"] = $result["personal"];
            $rookiefavorite["picturetitle"] = $result["picturetitle"];
            $rookiefavorite["picturestyle"] = $result["picturestyle"];
            $rookiefavorite["file"] = $result["file"];
            $rookiefavorite["caption"] = $result["caption"];
            $rookiefavorites[] = $rookiefavorite; 
		$fpersonal = explode(',',$rookiefavorite['personal']); 
		$fpicturestyle = explode(',',$rookiefavorite['picturestyle']);
	$ffile = explode(',',$rookiefavorite['file']);

    }
    if(empty($rookiefavorite)){
        $rookiefavorites[] = $rookiefavorite;
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
   <link rel="stylesheet" type="text/css" href="../css/rookie2020.css" media="(min-width: 800px)">
   <link href="../css/rookie2020M.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophotoclub.com/" /> 
<meta property="og:title" content="rookie 2020 | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
    <title>rookie 2020 | Rikkyo Photo Club</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <!--<script src="../js/easing.js"></script>-->
    <script src="../js/color.js"></script>
    <!--<script src="../js/mousewheel.js"></script>-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139853085-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139853085-2');
    
    	$(window).on('load',function(){ 
            var H = $(window).height();
		    var W = $(window).width();
            $.cookie("pnumber",1);
			if(<?= $Top ?> == 5){ 
			$('#sentencearea2').css({'display':'block'});
			$('#sentencearea2').velocity({
				opacity:1 
			});
				
			}else{
				if(<?= $ff ?>==5){
                    if(W > 800){
                        
                    }else{
					$('.pics2').css({'display':'block'});
                    }
		   }else{
                }
                var picture = '<?= $Number ?>';
                var pics = $.cookie(picture);
                if(pics == "true"){
                     $("#favoritebtn" ).addClass('activate');
		   }
	$('#caption').css({'display':'block'});
			$('#caption').velocity({
				opacity:1
			});
} 
		});
		
		function directory(){
			if(<?= $Top ?> == 5){
			$('#caption').velocity({
				opacity:0
			},{
				complete:function(){
					$('#sentencearea2').css({'display':'block'});
					$('#sentencearea2').velocity({
				opacity:1
			});
								   },
				display:"none"			});
		}else{
			$('#caption').velocity({
				opacity:0
			},{
				complete:function(){
					window.location.assign("https://rikkyophotoclub.com/rookie2020caption.php");
								   }
		});
		}
		} 
    function comment(){
        $('#writebox').css({'display':'block'});
        $('#writebox').velocity({
				opacity:1
		});
    }
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
    function big(num){
            $('#sentencearea2').velocity({
				opacity:0
			},{
				complete:function(){
					window.location.assign("https://rikkyophotoclub.com/rookie2020caption.php?Num=" + num);
								   }
		});
		}
    
    function commentsend(num){
        var comment = $('[name="comments"]').val();
        console.log(comment);
        $.ajax({
               type:"POST",
               url:"rookie2020-2.php",
               data:{
                   data:num,
                   sentence:comment
               },
               success: function(data_arr){
                   window.location.reload();
    }
    });
    }
    
    function favorite(num){
        $("#favoritebtn" ).addClass('activate');
        var favorites = $.cookie("favorites");
        if(!(favorites)){
            favorites =num;
        }else{
        favorites = favorites + ',' + num;
        }
        $.cookie("favorites",favorites,{expires:30});
        $.cookie("pics" + num,true,{expires:30});
    }
    
    function contchange(type){
  $("[name='s2020']" ).removeClass('active');
  $("[name='s2019']" ).removeClass('active');
  $("[name='favorite']" ).removeClass('active');
  $("[name='" + type +"']" ).addClass('active');
        $('#s2020,#s2019,#favorite').velocity({
            opacity:0
        },{
            display:'none',
            complete:function(){ 
                 $('#' + type).css({'display':'block'});
                $('#' + type).velocity({
            opacity:1
        }); 
            }
        });
    }
    
    function changepic(types){
        picnumber = $.cookie("pnumber");
        $('.pics' + picnumber).velocity({
            opacity:0
            
        },{
            display:"none",
            complete:function(){
                if(types == "next"){
                    picnumber = picnumber - -1;
                }else{
                    picnumber = picnumber - 1;
                }
                $.cookie("pnumber",picnumber);
                $('.pics' + picnumber).css({'display':'block'});
                $('.pics' + picnumber).velocity({
            opacity:1
                });
        }
                });
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
       <div id="ct"></div>
        <div id="csub">Rikkyo Photo Club Exhibition</div>
        <div id="ctitle">Rookie Exhibition 2020</div>
        <div id="sentencearea2">
        <div id="stitle">Photo</div>
        <div id="pbar">
            <div id="cont"  class="active" onclick = "contchange('s2020')" name = "s2020">2020</div>
           <div id="cont"  onclick = "contchange('favorite')" name = "favorite">favorite</div> 
        </div>
        <div id="s2020">
        <?php
	foreach($rookie2020s as $rookie2020){
		$file = explode(',',$rookie2020['file']);
		?>
		<img class="sum" src="<?= $file[1] ?>" onclick = "big(<?= $rookie2020['id'] ?>)">
		<?php } ?>
            </div>
        <div id="favorite">
             <?php
	foreach($rookiefavorites as $rookiefavorite){
		$ffile = explode(',',$rookiefavorite['file']);
		?>
		<img class="sum" src="<?= $ffile[2] ?>" onclick = "big(<?= $rookiefavorite['id'] ?>)">
		<?php } ?>
        </div>
        </div>
        <div id="caption">
        <div id="picturearea">
        <div id="picsbar">
            <div id="picsback" onclick="changepic('back')">←</div>
            <div id="picsnext" onclick="changepic('next')">→</div>
        </div>
		<img class="pics1" src="<?= $file[0] ?>"> 
		<img class="pics2" src="<?= $file[2] ?>">
		<img class="pics3" src="<?= $file[4] ?>">
		<img class="pics4" src="<?= $file[6] ?>">
		<img class="pics5" src="<?= $file[8] ?>">
            </div>
            <div id="captionarea">
			<div id="stitle" style="width:90%;"><?= $rookie2020['title'] ?></div>
			<div id="sentence2"><?= $rookie2020['faculty'] ?>学部 <?= $rookie2020['grade'] ?>年　<?= $rookie2020['middlename'] ?>  <?= $rookie2020['firstname'] ?></div>
			<div id="favoritebtn" onclick="favorite(<?= $rookie2020['id'] ?>)">♡  いいね！</div>
			<div id="sentence2"><?= $rookie2020['caption'] ?></div>
			<div id="stitle">Comment</div>
			<div id="back" onclick="comment()">コメントを記入</div>
			<div id="writebox">
           <div id="sentence2">コメントを入力してください。<br>
               このコメントは≪<?= $rookie2020['id'] ?>. <?= $rookie2020['title'] ?>≫に送信されます</div>
                <!--<div id="sentence2">名前：</div>
                <input type="text" name = "namae" style="margin-bottom:20px;"> -->
			    <textarea name="comments" rows="5" cols="30" class="writebox"></textarea>
			    <div id="back" onclick="commentsend(<?= $rookie2020['id'] ?>)">送信　→</div>
			</div>
              <?php
               foreach($rookiecomments as $rookiecomment){
                   ?>
                   <div id="commentbox">
                <div id = "sentence2"><?= $rookiecomment['sentence'] ?></div>
                <div id = "sentence2" style = "font-size:10px;"><?= $rookiecomment['time'] ?></div></div> 
                <?php
               }
             ?>
			<div id="back" onclick="directory()">←　Directory</div>
		<div id="stitle">Share</div>
       <div id="social">
                <a href = "https://twitter.com/intent/tweet?url=https%3A%2F%2Frikkyophotoclub.com%2Frookie2020caption%3FNum=<?= $rookie2020['id'] ?>&text=<?= $rookie2020['id'] ?>%29%20<?= $rookie2020['picturetitle'] ?>%20｜%20St.Paul's%20Festival%202020%0a&via=rikkyo_photo&related=rikkyo_photo"><img class = "twitter" src = "../img/Twitter_Logo_Blue.png"></a>
                <a href = "line://msg/text/https%3A%2F%2Frikkyophotoclub.com%2Frookie2020caption%3FNum=<?= $rookie2020['id'] ?>"><img class = "line" src = "../img/LINE_APP.png"></a>
                <a href = "https://www.facebook.com/rikkyophoto/"><img class = "facebook" src = "../img/f_logo_RGB-Blue_100.png"></a>
		</div>
        <div id="stitle">Other</div>
        <div id = "sentence2"><?= $rookie2020['middlename'] ?> <?= $rookie2020['firstname'] ?></div>
        <?php
	foreach($rookie2020ps as $rookie2020p){
		$file = explode(',',$rookie2020p['file']);
		?>
		<img class="sum" style = "top:30px;"src="<?= $file[1] ?>" onclick = "big(<?= $rookie2020p['id'] ?>)">
		<?php } ?>
            </div>
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