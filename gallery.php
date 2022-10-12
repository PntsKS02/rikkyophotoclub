  <?php
  $idStr =$_POST['data'];
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
                $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
	$sql = "select * from welcome2020 LIMIT 24";
	$pstmt = $pdo->prepare($sql);
        $pstmt->execute();
         $rs = $pstmt->fetchall();
	foreach($rs as $result){
            $welcome2020["id"] = $result["id"];
            $welcome2020["title"] = $result["title"];
            $welcome2020["year"] = $result["year"];
            $welcome2020["name"] = $result["name"];
            $welcome2020["file"] = $result["file"];
            $welcome2020["squarefile"] = $result["squarefile"];
		$welcome2020s[] = $welcome2020;
       unset($pdo);
   }}catch(PDOException $e){
	
} 
     ?>
<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="Portfolio of Train, Nature and more.">
   <link rel="stylesheet" type="text/css" href="../css/TopF.css"media="(min-width: 800px)">
   <link href="../css/TopMF.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="focus-on.sakura.ne.jp/" /> 
<meta property="og:title" content="Focus-On:Top" /> 
<meta property="og:description" content="The portfolio of Train, Nature and more." /> 
<meta property="og:image" content="https://focus-on-pic.com/gazou2.png" /> 
    <title>Focus-On:Top</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/mousewheel.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139853085-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139853085-1');
</script>
   <script>
       $(window).on('load',function(){
		var H = $(window).height();
		var W = $(window).width();
       if(W >= 800){
			 var script = $('<script>').attr({
    'type': 'text/css',
    'src': 'Top.css'
  });
  $('body')[0].appendChild(script[0]);
		$('html,body').css({'background-image': "url('../img/DSC_0521.jpeg')",'background-size':"cover"});
		$('#loading1').css({'top':0,'height':H/2,'width':W});
			$('#menu,#menu2').css({'display':"none"});
		$('#loading2').css({'top':H/2,'height':H/2,'width':W});
		$('#backtitle').css({'top':(H/2)-50 + "px",'width':W/3,'left':W/3,'text-align':"center",'opacity':0});
		$('#backline1').css({'top':(H/2)-2.5 + "px",'width':W,'left':0,'text-align':"center",'opacity':1});
		$('#backline2').css({'top':H/2,'width':W,'left':0,'text-align':"center",'opacity':1});
		$('#backe1').css({'top':(H/2)-2.5 + "px",'width':W/2,'height':(H/2)-2.5 + "px",'left':0,'text-align':"center",'opacity':1});
		$('#backe2').css({'top':(H/2)-2.5 + "px",'width':W/2,'height':(H/2)-2.5 + "px",'left':W/2,'text-align':"center",'opacity':1});
		$('.camera1').css({'top':(H/2)-150+ "px",'width':W/3,'left':(W/3)-10 + "px",'text-align':"center"});
		$('.camera2').css({'top':(H/2)-150+ "px",'width':W/3,'left':(W/3)-10 + "px",'text-align':"center"});
		$('#title').css({'top':H-190 + "px"});
			$('#top').css({'width':W,'height':H});
			$('.topphoto').css({'display':"none"});
			$('.moreback').css({'display':"none"});
		$('#subtitle').css({'top':H-130 + "px"});
		$('#go').css({'top':H-90 + "px"});
		$('ul').css({'top':H-110 + "px"});
		}else{
				 var script = $('<script>').attr({
    'type': 'text/css',
    'src': 'TopM.css'
  });
        }
       });
       
       function menu(){
           $('#menu').css({'display':"block"});
           $('#menu').velocity({
			opacity:1},{
			duration:500
		});
           $('.menu').velocity({
			opacity:0},{
			duration:500,
               display:"none"
		});
       }
       
       function closed(){
           $('#menu').velocity({
			opacity:0},{
			duration:500,
               display:"none"
		});
           $('.menu').css({'display':"block"});
           $('.menu').velocity({
			opacity:1},{
			duration:500
		});
       }
       
       function picopen(number){
           $.ajax({
               type:"POST",
               url:"gallery-2.php",
               data:{
                   data:number
               },
               success: function(data_arr){
				data_arr2 = JSON.parse(data_arr);
                   alert(data_arr2['id'] + data_arr2['name']);
           }
           });
       }
       
       function filter(){
            $('#filter,#filterout').css({'display':"block"});
           $('#filter').velocity({
			opacity:1},{
			duration:500
		});
           $('#filterout').velocity({
			opacity:0.8},{
			duration:500
		});
       }function closes(){
           $('#filter,#filterout').velocity({
			opacity:0},{
			duration:500,
               display:none
		});
       }
    </script>
    </head>
    <body>
    <div id="menu">
       <img class="menuc" src="../img/closeF.jpg" onclick="closed()">
        <div id="title">FOCUS ON</div>
        <div id="titleb"></div>
        <div id="menubar">
            <ul class="menubar">
                <li>TOP</li>
                <li>HISTORY</li>
                <li>POST</li>
                <li>JOURNEY</li>
                <li  style="border-left:2px solid #880000;">GALLERY</li>
                <li>PROFILE</li>
                <li>LINKS</li>
            </ul>
        </div>
        <div id="pictitle"></div>
        <div id="sns">
            twitter : <a href="https://twitter.com/Pnts_KS02">@Pnts_KS02</a><br>
            instagram : <a href="https://twitter.com/Pnts_KS02">@peanuts_rail</a><br><br>
            <a href="mailto:tadami.kiha40.2085@gmail.com" id="ta">tadami.kiha40.2085@gmail.com</a>
        </div>
       </div>
        <div id = "top">
        <img class="menu" src="../img/menuF.jpg" onclick="menu()">
        <div id="titleA">FOCUS ON</div>
        <div id="profmain">
         <div id="topixtitleb"></div> 
            <div id="topixtitle">GALLERY</div>
            </div>
            <div id="galleryarea">
               <div id="filterbtn" onclick="filter()">FILTER →</div>
                <div id="row">
                    <?php
       foreach($welcome2020s as $welcome2020){ 
           ?>
           <img class="gallerypic" src="rikkyophotoclub/<?= $welcome2020['squarefile']?>" onclick = "picopen('<?= $welcome2020['id'] ?>')">
           <?php
       }
       ?>
<div id="more" onclick="more()"> ↓ More Photo</div>
                </div>
                <div id="filterout"></div>
                <div id="filter">
                    <div id="filtertitle">FILTER</div>
                    <div id="area1" class="seasons">Seasons:</div>
                    <select name="seasons">
    			<option value="未選択">指定なし</option>
    			<option value="spring">Spring</option>
    			<option value="summer">Summer</option>
    			<option value="autumn">Autumn</option>
    			<option value="winter">Winter</option>
                    </select>
                    <div id="area1" class="type">Type:</div>
                    <select name="types">
    			<option value="未選択">指定なし</option>
    			<option value="railway">Railway</option>
    			<option value="nature">Nature</option>
    			<option value="portrait">Portrait</option>
    			<option value="ruins">Ruins</option>
    			<option value="other">Other</option>
                    </select>
                    <div id="closes" onclick="search()">SEARCH</div>
                    <div id="closes" onclick="closes()">CLOSE</div>
                </div>
            </div>
            <div id="galleryone">
                <div id = "picone"></div>
                <div id="gpictitle">雪ふる里</div>
                <div id="gpicday">2018-12-30</div>
                <div id="gpicarea">福島県会津若松市</div>
            </div>
        </div>
    </body>
</html>