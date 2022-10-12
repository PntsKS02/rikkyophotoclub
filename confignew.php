<?php

// session_start();
//     if (isset($_SESSION['id'])){
        
//     }else{
//         header("location: login");
//     }

//     $Num =$_GET['Num']; 
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_narrow_1","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
  		   $sql = "select * from citydata where id = ?";
     $pstmt = $pdo->prepare($sql);
    $pstmt->bindParam('1', $Num, PDO::PARAM_STR);
        $pstmt->execute(); 
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
              $city["id"] = $result["id"];
              $city["city"] = $result["city"];
              $city["cityroma"] = $result["cityroma"];
              $city["operator"] = $result["operator"];
              $city["total"] = $result["total"];
              $city["cars"] = $result["cars"];
              $city["fare"] = $result["fare"];
              $city["ride"] = $result["ride"];
              $city["routemap"] = $result["routemap"];
            $citys[] = $city;
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
        <meta name="description" content="">
        <link href="../css/CMSM.css?v=2" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 599px)" >
        <link href="../css/CMST.css?v=2" rel="stylesheet" type="text/css" media="(min-width: 600px) and (max-width: 999px)" >
        <link href="../css/CMS.css?v=2" rel="stylesheet" type="text/css" media="(min-width: 1000px)" >
        <link rel="stylesheet" href="https://use.typekit.net/fnb3eiw.css">
        <meta property="og:url" content="focus-on.sakura.ne.jp/" /> 
        <meta property="og:title" content="" /> 
        <meta property="og:description" content="" /> 
        <meta property="og:image" content="" /> 
        <title>立教大学写真部:管理ページ</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
        <script>
            (function(d) {
    var config = { 
      kitId: 'fwy1gle',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
        </script>
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
                  window.onpageshow = function(event) {
	           if (event.persisted) {
		          window.location.reload();
               }
            };
           $(document).ready(function(){
             var H2 = window.innerHeight;
                var W = $(window).width();
                $('#loading_bar').css({top:(H2/2)});
                $('#loading_count').css({top:(H2/2)- -20});
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
            
            /* 1 */
            $(function(){
                $('.gmenu').hover(function(){
                    console.log("hover");
                    $('#menu_area2').css({'display':'block'});
                    $('#menu_area2').velocity({
                        opacity:1
                    });
                },
                    function(){
                     console.log("no-hover");
                    $('#menu_area2').velocity({
                        opacity:0
                    },{
                        display:"none"
                    });
                });
            });
            
              /* 2 */
            function galleryopen(idNum){
                 $("#loading_screen").css({"display":"block"});
                            $("#loading_bar").css({"display":"none"});
                          $("#loading_count").css({"display":"none"});
                           
                    $("#loading_screen").delay(300).velocity({
                        opacity:1
                    },{
                        duration:"300",
                        complete:function(){
                           window.location = "gallerydetail?Num=" + idNum;
                        }
                    });
            }
            
             /* 3 */
             function menu(){
			$('#menu_area').css({'display':'block'});
			$('#menu_area').velocity({
				opacity:1,
				left:'50%'
		},{
			duration:1000	
		});
		}
        function closed(){
			$('#menu_area').velocity({
				opacity:0,
				left:'100%'
		},{
			duration:1000,
			display:'none'
		});
		}
            
            /* 4 */
             $(function(){
         $(window).on('load',function(){
                var H2 = window.innerHeight;
                var W = $(window).width();
                var imgH = $('.top_pic_PC').height();
             if(W > 700){
              $('#title_area').css({"top":imgH});
             }
             $('#loading_bar').css({"width":"100%"}); 
             $('#loading_count').html("100%");
                $('#loading_screen').velocity({
               opacity:0
           },{ 
            display:"none",
                    delay: 1000
           });
            });
            
             /* 5 */
             $('a').on('click', function(e){
                        e.preventDefault(); // ナビゲートをキャンセル
                        url = $(this).attr('href'); // 遷移先のURLを取得
                        if (url !== '') {
                          $("#loading_screen").css({"display":"block"});
                            $("#loading_bar").css({"display":"none"});
                          $("#loading_count").css({"display":"none"});
                           
                    $("#loading_screen").delay(300).velocity({
                        opacity:1
                    },{
                        duration:"300"
                    });
                          setTimeout(function(){
                            window.location = url;  // 0.8秒後に取得したURLに遷移
                          }, 700);
                        }
                    return false;
  });

  });

    /* 6 */
    function uploadpic(){
        var formdata = new FormData($('#picupload_form').get(0));
        console.log(formdata.get("insertimg"));
        var formpic = formdata.get("insertimg");
        var formpic2 = formpic['name'];
        console.log(formpic2);
        $.ajax({
        url  : "confignew-3.php",
        type : "POST",
        
        data : formdata,
        processData: false,
        contentType: false,
        dataType: 'json'
    }).done(function(data, textStatus, jqXHR){
        $('#insertback').css({'display':'none'});
        $('#insertimg').css({'display':'none'});
    })
    .fail(function(jqXHR, textStatus, errorThrown){
        $('#insertback').css({'display':'none'});
        $('#insertimg').css({'display':'none'});
    });
    }

    /* 7 */
    function insertimg(){
        $('#insertback').css({'display':'block'});
        $('#insertimg').css({'display':'block'});
    }
        </script>
    </head>
    <body>      
              <div id="loading_screen">
        <div id="loading_bar"></div>
        <div id="loading_count"></div>
    </div>      
               <div id="title_area2">
                <div id="title">立教大学写真部</div>
<!--                <div id="subtitle">SUBTITLE</div>-->
            </div><img class="menu_close" src="../img/menu_narrow.jpg" onclick = "menu()">
        <div id="menu_area">
               <img class="menu_close" src="../img/menu_narrowclose.jpg" onclick = "closed()">
                <a href = "mypage"><div id="menu_1">管理ページTOP</div></a>
                <a href = "mypage-galleryconfig"><div id="menu_1" class="gmenu">新着情報の掲載</div></a>
                <a href = "mypage-cityedit1"><div id="menu_1">コンテンツの編集</div></a>
                <a href = "mypage-profileedit1"><div id="menu_1">写真展の情報編集</div></a>
                <a href = "logout"><div id="menu_1">ログアウト</div></a>
            </div>
        <div id="main_area">
            <div id="title_A">新着情報の編集</div>
            <form id="city_edit" name = "citytable" action="confignewcheck.php" method="post" enctype="multipart/form-data">
                <div id="mainsentence">タイトル:</div>
                <input type="text"  name = "title"><div id="mainsentence">本文:</div>
                <textarea name="sentence"><?= nl2br($city['fare']) ?></textarea>
                <div id = "formbtn" onclick = "insertimg()">画像を挿入</div>
                <div id = "formbtn" onclick = "insertlink()">リンクを挿入</div>
                <button id="choose_button">変更を反映</button>
            </form>
        </div>
        <div id = "insertback"></div>
        <div id = "insertimg">
            <div id = "insertsentence">挿入する画像を選択してください</div>
            <div id = "">使用可能なファイル:jpg,jpeg,png</div>
            <form id="picupload_form">
            <input type = "file" name = "insertimg">
            <div id = "uploadbtn" onclick = "uploadpic()">アップロードして挿入</div>
        </form>
        </div>
        <div id = "uploadcomp">アップロードが完了しました。</div>
        <!-- <div id = "insertlink"> -->
     </body>
</html>