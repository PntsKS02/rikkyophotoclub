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
        $Num = 1;
		$Top = 5;	
	$sql = "select *from spf2020 LIMIT 30";
        $Number = "pics";
    }else{
$Num = $_GET["Num"];
	$Top = 5;
        $Num2 = (30 * ($Num - 1));
        
	$sql = "select * from spf2020 LIMIT 30 OFFSET $Num2";
        $Number = "pics".$Num;
	}
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $spf2020["id"] = $result["id"];
            $spf2020["firstname"] = $result["firstname"];
            $spf2020["middlename"] = $result["middlename"];
            $spf2020["faculty"] = $result["faculty"];
            $spf2020["title"] = $result["title"];
            $spf2020["grade"] = $result["grade"];
            $spf2020["picturestyle"] = $result["picturestyle"];
            $spf2020["file"] = $result["file"];
            $spf2020["caption"] = $result["caption"];
            $spf2020s[] = $spf2020;
	$file = explode(',',$spf2020['file']);
		if($picturestyle[0] === '組写真'){
			$ff = 5;
		}else{
			$ff = 0;
		}
        }
    $firstname = $spf2020['firstname'];
    $sql = "SELECT * FROM spf2020 WHERE firstname LIKE '%$firstname%'";
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $spf2020p["id"] = $result["id"];
            $spf2020p["firstname"] = $result["firstname"];
            $spf2020p["middlename"] = $result["middlename"];
            $spf2020p["title"] = $result["title"];
            $spf2020p["grade"] = $result["grade"];
            $spf2020p["faculty"] = $result["faculty"];
            $spf2020p["picturestyle"] = $result["picturestyle"];
            $spf2020p["file"] = $result["file"];
            $spf2020p["caption"] = $result["caption"];
            $spf2020ps[] = $spf2020p; 
	$file = explode(',',$spf2020p['file']);
    }
    
     $sql = "SELECT * FROM spf2020comment WHERE pictureid = '$Num'"; 
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $spfcomment["id"] = $result["id"];
            $spfcomment["sentence"] = $result["sentence"];
            $spfcomment["time"] = $result["time"];
        $spfcomments[] = $spfcomment; 
    }
    if(empty($spfcomment)){
        $spfcomment["sentence"] = "まだコメントがありません。";
        $spfcomments[] = $spfcomment;
    }
    
     $sql = "SELECT * FROM spf2020 WHERE id IN($favorites)";
    
    $pstmt = $pdo->prepare($sql);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $spffavorite["id"] = $result["id"];
            $spffavorite["personal"] = $result["personal"];
            $spffavorite["picturetitle"] = $result["picturetitle"];
            $spffavorite["picturestyle"] = $result["picturestyle"];
            $spffavorite["file"] = $result["file"];
            $spffavorite["caption"] = $result["caption"];
            $spffavorites[] = $spffavorite; 
		$fpersonal = explode(',',$spffavorite['personal']); 
		$fpicturestyle = explode(',',$spffavorite['picturestyle']);
	$ffile = explode(',',$spffavorite['file']);

    }
    if(empty($spffavorite)){
        $spffavorite['comment'] = "まだいいねをつけていません。";
    }
  
        unset($pdo);
}catch(PDOException $e){
	
}
?>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="六大学写真展の公式ページです。">
    <link rel="stylesheet" type="text/css" href="../css/bigsixF.css"media="(min-width: 800px)">
    <link href="../css/bigsixF.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'UA-139853085-2');
    
    	$(window).on('load',function(){ 
         var H = $(window).height();
             var W = $(window).width();
             $('.universitycolor').css({'width':W/6}); 
            $.cookie("styles",3);
          
			$('#sentencearea2').css({'display':'block'});
			$('#sentencearea2').velocity({
				opacity:1 
			});

            var s2H = $("#s2020").height();
            $('#footer').css({'top':500 - -s2H});   
			
		 
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
					window.location.assign("https://rikkyophotoclub.com/bigsix-single.php");
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
					window.location.assign("https://rikkyophotoclub.com/bigsix-single-detail.php?Num=" + num);
								   }
		});
		}
    
    function commentsend(num){
        var comment = $('[name="comments"]').val();
        console.log(comment);
        $.ajax({
               type:"POST",
               url:"spf2020-2.php",
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
    
        function change1(){
           styles = $.cookie("styles");
            if(styles == 3){
                 $.cookie("styles",1);
                $('#s2020').velocity({
                    opacity:0
                },{
                    display:"none",
                    complete:function(){
                        $('#s2020single').css({display:'block'});
                        $('#s2020single').velocity({
                            opacity:1 
                        });
                    }
                });
                var s2H = $("#s2020single").height();
            $('#footer').css({'top':500 - -s2H});    
            }else if(styles == 1){ 
                $.cookie("styles",3);
                $('#s2020single').velocity({
                    opacity:0
                },{
                    display:"none",
                    complete:function(){
                        $('#s2020').css({display:'block'});
                        $('#s2020').velocity({
                            opacity:1
                        });
                    }
                    
                });
                var s2H = $("#s2020").height();
            $('#footer').css({'top':500 - -s2H});   
            }
            
        }
          
        function pagechange(direction){
            PNum = <?= $Num ?>;
            if(direction == "back"){
                PNum = PNum - 1;
            }else{
                PNum = PNum - -1;
            }
            if(PNum < 1 || PNum > 2){
                
            }else{
                window.location.assign("https://rikkyophotoclub.com/bigsix-single.php?Num=" + PNum);
            }
        }
    </script>
    </head>
    <body> 
            <!-- 上部アクセント --> 
            <div class="universitycolor" style="background:#570F49;"></div>
            <div class="universitycolor" style="background:#FF9000;"></div>
            <div class="universitycolor" style="background:#0080FF;"></div>
            <div class="universitycolor" style="background:#C63527;"></div>
            <div class="universitycolor" style="background:#682A2B;"></div>
            <div class="universitycolor" style="background:#884898;"></div>
            <div id="Atitle">BIGSIX <br>PHOTOEXHIBITION</div>
            <!--ここまで 上部アクセント --> 
            <!--タイトル -->
            <div id="Btitle">個人作品</div> 
            <!--<div id="Bsentence">各大学のSNS・リンクを掲載しています。</div> -->
             <!--ここまで タイトル --> 
             <div id="sentencearea2">
        <!--<div id="pbar">
            <div id="cont"  class="active" onclick = "contchange('s2020')" name = "s2020">2020</div>
           <div id="cont"  onclick = "contchange('favorite')" name = "favorite">favorite</div> 
        </div> -->
        <div id="button1">スライドショー</div>
        <div id="button1" onclick="change1()">表示レイアウト変更</div>
        <div id="pagenumberarea">
           <div id="lefty" onclick="pagechange('back')">←</div>
            <div id="pagenumber"><?= $Num ?>/2</div>
            <div id="righty" onclick="pagechange('next')">→</div>
        </div>
        <div id="s2020">
        <?php
	foreach($spf2020s as $spf2020){
		$file = explode(',',$spf2020['file']);
		?>
		<img class="sum" src="<?= $file[1] ?>" onclick = "big(<?= $spf2020['id'] ?>)">
		<?php } ?>
            </div>
            <div id="s2020single">
            <?php
	foreach($spf2020s as $spf2020){
		$file = explode(',',$spf2020['file']);
		?>
		<div id="pictureset">
		<img class="sum2" src="<?= $file[0] ?>" onclick = "big(<?= $spf2020['id'] ?>)">
       <div id="names"><?= $spf2020['faculty'] ?>学部 <?= $spf2020['grade'] ?>年　<?= $spf2020['middlename'] ?>  <?= $spf2020['firstname'] ?><br><?= $spf2020['title'] ?></div>
        </div>
		<?php } ?>
     
            </div>
        <div id="favorite">
             <?php
	foreach($spffavorites as $spffavorite){
		$ffile = explode(',',$spffavorite['file']);
		?>
		<img class="sum" src="<?= $ffile[1] ?>" onclick = "big(<?= $spffavorite['id'] ?>)">
		<?php } ?>
        </div>
         <div id="pagenumberarea" style="top:120px;">
            <div id="lefty" onclick="pagechange('back')">←</div>
            <div id="pagenumber"><?= $Num ?>/2</div>
            <div id="righty" onclick="pagechange('next')">→</div>
        </div>
        </div>
        <!-- フッター -->
        <div id="footer" >
            <div id="footertitle">BIGSIX PHOTOEXHIBITION</div>
            <div id="clickbtn">TOP</div><br>
            <div id="clickbtn">合同作品</div><br>
            <div id="clickbtn">個人作品</div><br>
            <div id="clickbtn">各大学リンク・SNS</div><br>
            <div id="ARR">Copyright (C) 2021 六大学写真展 All Rights Reserved.</div>
        </div>
        <!-- ここまで   フッター -->
    </body>
</html>