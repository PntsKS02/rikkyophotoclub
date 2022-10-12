<?php
$favorites = $_COOKIE["favorites"];
$firstname = $_GET["s_name"];
$grade = $_GET["grade"];
$category= $_GET["category"];
if(!($_GET["firstname"])){
    $firstname = "";
    $resultfirst = "";
}else{
    $resultfirst = "Name:".$firstname;
}
if(!($_GET["grade"])){
    $grade = "";
    $resultgrade = "";
}else{
    $resultgrade = "Grade:".$grade;
}
if(!($_GET["category"])){
    $category = "";
    $resultcategory = "";
}else{
    $resultcategory = "Category:".$category;
}
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        //PDOの実行
	$sql = "select * from spf2021 where firstname LIKE  '%$firstname%' AND grade LIKE '%$grade%' AND category LIKE '%$category%'";
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
            $spf2020["squarefile"] = $result["squarefile"];
            $spf2020["caption"] = $result["caption"];
            $spf2020s[] = $spf2020;
        $file2 = json_decode($spf2020["file"]);
        $squarefile = json_decode($spf2020["squarefile"]);
        
        }
     
    $sql = "select count(*) as cnt from spf2021 where firstname LIKE  '%$firstname%' AND grade LIKE '%$grade%' AND category LIKE '%$category%'";
    $pstmt = $pdo->prepare($sql); 
        $pstmt->execute();
         $rs = $pstmt->fetchall();
    foreach($rs as $result){
    $count= $result["cnt"];
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
        <link rel="stylesheet" type="text/css" href="../css/spf2021.css" media="(min-width: 1000px)">
        <link href="../css/spf2021M.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >
        <link href="../css/spf2021T.css" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 999px)" >
        <link rel="stylesheet" href="https://use.typekit.net/dll3oer.css">
        <meta name="twitter:card" content="summary" /> 
        <meta name="twitter:site" content="@Pnts_KS02" /> 
        <meta property="og:url" content="rikkyophotoclub.com/" /> 
        <meta property="og:title" content="SPF 2021 | Rikkyo Photo Club" /> 
        <meta property="og:description" content="立教大学写真部の公式ページです。" /> 
        <meta property="og:image" content="https://focus-on-pic.com/rikkyophotoclub/logoR1.jpg" /> 
        <title>SPF 2021 | Rikkyo Photo Club</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
            <script src="../js/easing.js"></script>
            <script src="../js/color.js"></script>
            <script src="../js/mousewheel.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139853085-2"></script>
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
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-139853085-2');
        </script>
        <script>
            
            window.onpageshow = function(event) {
	           if (event.persisted) {
		          window.location.reload();
               }
            };
        
            $(document).ready(function(){
                /*if(!($.cookie("picture"))){
                    $.cookie("picture",1);
                }else{
                } */
                $.cookie("pictures",1);
                var H2 = window.innerHeight;
                var W = $(window).width();
                $('#loading_bar').css({top:(H2/2)});
                $('#loading_count').css({top:(H2/2)- -20});
                $('#pic_updown').css({top:H2 - 250});
                var all_img = $("img"); //すべての画像
                var img_len = all_img.length; //画像の総数
                var loaded_counter = 0; //読み込み完了の数値
                for (var i = 0; i < img_len; i++) {
                    all_img[i].addEventListener("load", loadFunc);
                }
	           function loadFunc() { //読み込み画像のカウント
		          loaded_counter++;
                    count_num = loaded_counter / img_len;
                    count_num = Math.floor(count_num * 100); 
                   $('#loading_count').html(count_num + "%");  
                   $('#loading_bar').css({"width":count_num + "%"});  
               }
            });
            
            $(window).on('load',function(){
                w_num = $.cookie("watched"); 
                $('#loading_screen').velocity({
               opacity:0
           },{
            display:"none"
           });
            });
                
            function rowchange(num){
                if(num == '3rows'){
                    $("#pic_1row").velocity({
                        opacity:0
                    },{
                        display:"none",
                        duration:500,
                        complete:function(){
                            $("#pic_3rows").css({"display":"block"});
                            $("#pic_3rows").velocity({
                        opacity:1
                    });
                            $("#threelogo").css({"border-bottom-color": "rgb(187,187,187)"});
                            $("#onelogo").css({"border-bottom-color": "rgb(187,187,187,0)"});
                        }
                    });
                }else{
                    $("#pic_3rows").velocity({
                        opacity:0
                    },{
                        display:"none",
                        duration:500,
                        complete:function(){
                            $("#pic_1row").css({"display":"block"});
                            $("#pic_1row").velocity({
                        opacity:1
                    });
                            $("#threelogo").css({"border-bottom-color": "rgb(187,187,187,0)"});
                            $("#onelogo").css({"border-bottom-color": "rgb(187,187,187)"});
                        }
                    });
                }
            }
            
            function big(num){
            $('div').velocity({
				opacity:0
			},{
				complete:function(){
					window.location.assign("https://rikkyophotoclub.com/spf2021-detail?Num=" + num);
								   }
		});
		}
            function toppage(){
            $('div').velocity({
				opacity:0
			},{
				complete:function(){
					window.location.assign("https://rikkyophotoclub.com/spf2021");
								   }
		});
		}
            
            function picupdown(dist){
                pictures = $.cookie("pictures"); 
                if(dist == "up"){
                    pictures = pictures - 1;
                }else{
                    pictures = pictures - -1;
                }
                     pic_now = $('#P' + pictures).offset().top;
                /*    $('html').velocity({
                        scrollTop:pic_now + "px"
                    },{
                        duration:1000
                    }); */
                $("html,body").animate({scrollTop:pic_now - 150});
                $("#pic_num").html(pictures);
                    $.cookie("pictures",pictures);
                } 
            
            
            $(window).scroll(function(){
                row = $.cookie("row"); 
                if(row == 3){
                }else{
                 pictures = $.cookie("pictures");
                var ES = $(window).scrollTop();
                bpictures = pictures - 1;
                if(bpictures < 1){
                    bpictures = 1;
                }
                apictures = pictures - -1;
                if(apictures > <?= $count ?>){
                   apictures = <?= $count ?>;
                   }
                var before_pic = $('#P' + bpictures).offset().top;
                var before_pic_height = $('#P' + bpictures).height();
                var after_pic = $('#P' + apictures).offset().top;
                console.log(pictures,before_pic,after_pic,ES);
                if(ES <= before_pic - -(before_pic_height) - 250){
                    pictures = bpictures; 
                    $.cookie("pictures",pictures);
                }else if(ES >= after_pic -250){
                   pictures = apictures;
                    $.cookie("pictures",pictures);
                   }else{
                       
                   }
                $("#pic_num").html(pictures);
                }
            });
            
            function searchto(){
                $("#search_box").css({"display":"block"});
                            $("#search_box").velocity({
                        opacity:1
                    });
            }
        </script>
    </head>
    <body>
    <div id="loading_screen">
        <div id="loading_bar"></div>
        <div id="loading_count"></div>
    </div>
    <div id="indiv">
    <div id="gallery_title" onclick="toppage()">SPF</div>
    <div id="gallery_subtitle">Rikkyo Photo Club Exhibition 2021</div>
    <div id="row_change">
        <img class="row_logo"  id = "onelogo" src="../img/%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B31%E5%88%97_%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%201.png" onclick="rowchange('1row')">
        <img class="row_logo" id = "threelogo" src="../img/%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B33%E5%88%97_%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%201.png" onclick="rowchange('3rows')">
    </div>
         <div id="search_button" onclick="searchto()" style="cursor:pointer;">写真を検索...</div>
         <div id="search_button" style="top:25px;border:none;"><?= $resultcategory ?> <?= $resultgrade ?> <?= $resultname ?></div>
         <div id="pic_3rows">
            <?php
	           foreach($spf2020s as $spf2020){
		      $file2 = json_decode($spf2020["file"]);
        $squarefile = json_decode($spf2020["squarefile"]);
		?>
		        <img class="sum" src="<?= $squarefile[0] ?>" onclick = "big(<?= $spf2020['id'] ?>)">
		     <?php } ?>
        </div>
        <div id="pic_1row">
        <div id="pic_updown">
            <img class="updown_icon" src="../img/%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3%E4%B8%8A_%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%201.png" onclick="picupdown('up')">
            <img class="updown_icon" src="../img/%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3%E4%B8%8B_%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%201.png" onclick="picupdown('down')">
            <div id="pic_num">1</div> 
        </div>
        <?php
	           foreach($spf2020s as $spf2020){
                   $file2 = json_decode($spf2020["file"]);
        $squarefile = json_decode($spf2020["squarefile"]); 
                $pictures2 = 'pics'.$spf2020['id'];
                   if(($_COOKIE["$pictures2"])){
                     $onoffA = "none"; 
                     $onoffB = "block";
		   }else{
                    $onoffB = "none";
                     $onoffA = "block";
                   }
		?>
            <div class="pic_1" id = "P<?= $spf2020['id'] ?>">
		          <img class="pic_row" src="<?= $file2[0] ?>" onclick = "big(<?= $spf2020['id'] ?>)">
                       <div id="pic_meta">
                        <div id="pic_title" onclick = "big(<?= $spf2020['id'] ?>)"><?= $spf2020['title'] ?></div>
                        <div id="pic_grade" onclick = "big(<?= $spf2020['id'] ?>)">Grade  <?= $spf2020['grade'] ?></div>
                        <div id="pic_name" onclick = "big(<?= $spf2020['id'] ?>)"><?= $spf2020['middlename'] ?> <?= $spf2020['firstname'] ?></div>
                        <div id="favoritebtn">
                            <img class="f_icon" id = "f<?= $spf2020['id'] ?>"src="../img/favorite_noactivate.png" onclick="favorite(<?= $spf2020['id'] ?>)" style = "display:<?= $onoffA ?>">
                            <img class="f_icon_activate" id = "fa<?= $spf2020['id'] ?>"src="../img/favorite_activate.png" style = "display:<?= $onoffB ?>">
                            <!-- <img class="c_icon" src="../img/comment.png"> -->
                        </div>
                       </div>
            </div>
		     <?php 
               $Nums = $Nums - -1;
               } ?>
        </div>
        <div id="search_box">
           <form id="search_console" method="get" action="../gallery22">
            <div id="search_title">ジャンルで絞り込む</div>
            <select name="category">
    			    <option value="">---ジャンルを選択してください---</option>
    			    <option value="monochrome">monochrome</option>
    			    <option value="city">city</option>
    			    <option value="nature">nature</option>
    			    <option value="snap">snap</option>
    			    <option value="portrait">portrait</option>
    			    <option value="animal">animal</option>
    			    <option value="flower">flower</option>
    			    <option value="train">train</option>
    			    <option value="dark">dark</option>
                </select>
            <div id="search_title">学年で絞り込む</div>
            <select name="grade">
    			    <option value="">---学年を選択してください---</option>
    			    <option value="1">Grade1</option>
    			    <option value="2">Grade2</option>
    			    <option value="3">Grade3</option>
    			    <option value="4">Grade4</option>
                </select>
            <div id="search_title">名前で検索する</div>
            <input type="text" name="name" oninput="snames()">
            <input type = "hidden" name="s_name" oninput="snames()">
            <div id="search_sentence">候補：</div>
            <div id="name_koho">
                
            </div>
            <button type="submit">検索</button>
            </form>
        </div>
        <div id="boox"></div> 
        </div>
    </body>
</html>