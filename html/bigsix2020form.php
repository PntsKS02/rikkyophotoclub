<!DOCTYPE html>
<html lang = "ja"> <!--言語設定です-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset = "utf-8">
  <meta name=”description” content="立教大学写真部の公式ページです。">
   <link rel="stylesheet" type="text/css" href="../css/spf-CP.css" media="(min-width: 800px)">
   <link href="../css/spf-CP.css" rel="stylesheet" type="text/css" media="(min-width: 160px) and (max-width: 799px)" >
    <link href="https://fonts.googleapis.com/css?family=Saira:100" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300&amp;subset=japanese" rel="stylesheet"> 
    <meta name="twitter:card" content="summary" /> 
<meta name="twitter:site" content="@Pnts_KS02" /> 
<meta property="og:url" content="rikkyophoto.com/" /> 
<meta property="og:title" content="六大学写真展　フォーム" /> 
<meta property="og:description" content="六大学写真展出展者用フォーム" /> 
<meta property="og:image" content="https://focus-on-pic.com/gazou2.png" /> 
    <title>六大学写真展　フォーム</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.js"></script>
    <script src="../js/easing.js"></script>
    <script src="../js/color.js"></script>
    <script src="../js/mousewheel.js"></script>
    <script>
	/*	$(function(){
			if(!$.cookie("namae")){
				
			}else{
				$("[name = 'namae']").val($.cookie("namae"));
				$("[name = 'faculty']").val($.cookie("faculty"));
				$("[name = 'year']").val($.cookie("year"));
			}

		}); */
	
		function clicks(){
			var Asentence = "";
			if($("input[name='lastname']").val() == ""){
				Asentence = Asentence + "名前,";
				$("input[name='lastname']").css({"background":"pink"});
			}if($("input[name='firstname']").val() == ""){
				Asentence = Asentence + "名前,";
				$("input[name='firstname']").css({"background":"pink"});
			}
			if($("select[name='university']").val() == "未選択"){
				Asentence = Asentence + "大学,";
				$("select[name='university']").css({"background":"pink"});
			}
			if($("select[name='year']").val() == "未選択"){
				Asentence = Asentence + "学年,";
				$("select[name='year']").css({"background":"pink"});
			}
			if($("input[name='title']").val() == ""){
				Asentence = Asentence + "写真タイトル,";
				$("input[name='title']").css({"background":"pink"});
			}
			
			if(Asentence == ""){
					$('#sform').submit();
					
		}else{
			Asentence = Asentence + "が記入されていません。";
			alert(Asentence);
		}
		}
		
	</script>
	</head>
	<body>
<div id="title">六大学写真展  2020</div>

	<ul class="menubar">
	<div id="close" onclick="closed()">✕</div>
		<li><a href="index.php">Top</a></li>
		 
		<li class="activate2">History</li> 
		<li><a href="about.php">About Us</a></li>
		<li>Activities</li>
		<li class="activate">Member</li>
		<li>Exhibition</li> 
		<li>Portfolio</li>
		<li>SNS/Link</li>
	</ul>
		<div id="caption3">
			<div id="title2">Form</div>
			<form id="sform" method="post" enctype="multipart/form-data" action="bigsix2020formcheck.php">
				名字:<input type="text" name="lastname">
				名前:<input type="text" name="firstname">
				所属大学:<select name="university">
    			<option value="未選択">---大学を選択してください。---</option>
    			<option value="立教">立教</option>
    			<option value="早稲田">早稲田</option>
    			<option value="慶應">慶應</option>
   				<option value="明治">明治</option>
   				<option value="法政">法政</option>
   				<option value="東京">東京</option>
				</select>
				学年:<select name="year">
    			<option value="未選択">---学年を選択してください。---</option>
    			<option value="1年">1年</option>
    			<option value="2年">2年</option>
    			<option value="3年">3年</option>
   				<option value="4年">4年</option>
   				<option value="院生">院生</option>
				</select>
				写真タイトル:<input type="text" name="title">
				続けて写真を登録する際には下のチェックボタンを押してください。<br>
				続ける:<input type="checkbox" class="check"> 
			</form>
			<button id="button" onclick="clicks()">送信</button>
		</div>
	</body>
</html>