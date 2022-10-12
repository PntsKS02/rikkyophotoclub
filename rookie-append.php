
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
<meta property="og:title" content="Top | Rikkyo Photo Club" /> 
<meta property="og:description" content="立教大学写真部の公式ページです。" /> 
<meta property="og:image" content="https://focus-on-pic.com/img/camera23.jpg" /> 
    <title>About us | Rikkyo Photo Club</title>
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
$(window).on('load',function(){ 
            if(!($.cookie("firstname"))){
                firstname = "";
                middlename = "";
                faculty = "";
                grade = "";
                title= "";
                mainsentence = "";
            }else{
                firstname =  $.cookie("firstname");
                middlename = $.cookie("middlename");
                faculty = $.cookie("faculty");  
                grade =  $.cookie("grade");
                title = $.cookie("title");
                mainsentence = $.cookie("mainsentence");
            }
            console.log(firstname);
            $("input[name='firstname']").val(firstname);
            $("input[name='middlename']").val(middlename);
            $("input[name='faculty']").val(faculty);            
            $("input[name='grade']").val(grade);
            $("input[name='title']").val(title);
            $("input[textarea='faculty']").val(mainsentence);
        });
		function clicks(){
			var Asentence = "";
			if($("input[name='firstname']").val() == ""){
				Asentence = Asentence + "苗字,";
				$("input[name='firstname']").css({"background":"pink"});
			}if($("input[name='middlename']").val() == ""){
				Asentence = Asentence + "名前,";
				$("input[name='middlename']").css({"background":"pink"});
			}
			if($("input[name='faculty']").val() == ""){
				Asentence = Asentence + "学部,";
				$("input[name='faculty']").css({"background":"pink"});
			}
			if($("select[name='year']").val() == "未選択"){
				Asentence = Asentence + "学年,";
				$("select[name='year']").css({"background":"pink"});
			}
			if($("input[name='title']").val() == ""){
				Asentence = Asentence + "写真タイトル,";
				$("input[name='title']").css({"background":"pink"});
			}
			if($("input[name='picture']:checked").val() == "未選択"){
				Asentence = Asentence + "写真の枚数,";
				$("input[name='picture']").css({"background":"pink"});
			}
			if($("input[name='picture']:checked").val() == "組写真" && $("input[name='math']").val() == "" ){
				Asentence = Asentence + "組写真の枚数指定,";
				$("input[name='math']").css({"background":"pink"});
			}
			if($("input[name='style']:checked").val() == "未選択"){
				Asentence = Asentence + "展示方法,";
				$("input[name='style']").css({"background":"pink"});
			}
			if($("input[name='style']:checked").val() == "その他" && $("input[name='tenji']").val() == "" ){
				Asentence = Asentence + "その他の展示方法,";
				$("input[name='tenji']").css({"background":"pink"});
			}
			if($("select[name='size']").val() == "未選択"){
				Asentence = Asentence + "サイズ,";
				$("select[name='size']").css({"background":"pink"});
			}
			if($("textarea").val() == ""){
				Asentence = Asentence + "説明文,";
				$("textarea").css({"background":"pink"});
			}
			
			if(Asentence == ""){
					$('#sform').submit();
					
		}else{
			Asentence = Asentence + "が記入されていません。";
			alert(Asentence);
		}
            $.cookie("firstname",$("input[name='firstname']").val() ,{expires:30});
            $.cookie("middlename",$("input[name='middlename']").val() ,{expires:30});
            $.cookie("faculty",$("input[name='faculty']").val() ,{expires:30});
		}
		

        function appends(ids){
            CC = $.cookie("CC");
            WH = $('.SM' + ids).attr('id');
           files = $('.SM' + ids).attr('name');
           thumbnailfiles = $('.SM' + ids).attr('src');
            var addText = "../" + files;
            var idse = "picture" + CC;
            var idst = "thumbnailpicture" + CC;
            console.log(ids);
            console.log(idse);
    $('.' + idse).val(addText);
    $('.' + idst).val(thumbnailfiles);
            console.log();
             $('#pictureback').css({'display':'none'});
        $('#pictures').css({'display':'none'});
        }
        function choose(CC){
             if(!($("input[name='firstname']").val())){
                 alert("苗字・名前を入力してから選択してください。")
             }else{
            $.cookie("CC",CC ,{expires:30});
            firstname = $("input[name='firstname']").val();
            middlename = $("input[name='middlename']").val();
            idNum = 2; 
            $('#pictures').html(' <div id="sen"> 写真を選択してください。</div>');
        $('#pictureback').css({'display':'block'}); 
        $('#pictures').css({'display':'block'});
            $.ajax(
      { type: "POST",
            url: "spf2020-append2.php",
            data: {
                "firstname": firstname,
                "middlename":middlename
            },
				success: function(data_arr){
				data_arr2 = JSON.parse(data_arr);
                    $.each(data_arr2,function(index,val){
                       var str = "<img class='sum SM" +val.id  + "' src = '../" + val.squarefile +"' onclick = 'appends(" + val.id  + ")'   name =  '" + val.file + "' id = '" + val.WH  +"'>";
           $(str).appendTo('#pictures');
       });
                }
      });
        }
        }
        function uploads(){
            $.cookie("firstname",$("input[name='firstname']").val() ,{expires:30});
            $.cookie("middlename",$("input[name='middlename']").val() ,{expires:30});
            $.cookie("faculty",$("input[name='faculty']").val() ,{expires:30});
            $.cookie("title",$("input[name='title']").val() ,{expires:30});
            $.cookie("grade",$("input[name='grade']").val() ,{expires:30});
            $.cookie("mainsentence",$("input[textarea='mainsentence']").val() ,{expires:30});
            window.open('spf2020-picture-upload.php');
        }
	</script>
	</head>
	<body>
<div id="title">Append to ROOKIE2020</div>
		<div id="caption3">
			<div id="title2">Form</div>
			<form id="sform" method="post" enctype="multipart/form-data" action="rookie-append-check.php">
			　苗字:<input type="text" name="middlename">
			　名前:<input type="text" name="firstname">
			　学部(学部の名前のみ記入してください　例：文学部→文):<input type="text" name="faculty">
			　学年(学年の数字のみ記入してください　例：2年→2):<input type="text" name="grade">
				キャプション:<input type="text" name="title">
                説明:<textarea name = "mainsentence" cols = "40" rows="10"></textarea>
				単写真/組写真:<input type="radio" value="単写真" class = "check"	 name = "picture">単写真　<input type="radio" value="組写真" class = "check" name = "picture"	>組写真<input type="radio" value="未選択" class = "check" name = "picture" style = "display:none;" checked = "checked"><br>
				組写真のときはその組の枚数を記入してください。:<input type="text" name="math">
                <div id="click" onclick = "uploads()">写真をアップロード</div>
                写真1:<input type="text" name="picture1" id="theme" class = "picture1">
                写真1(サムネイル):<input type="text" name="thumbnailpicture1" id="theme" class = "thumbnailpicture1">
                <div id="click" onclick="choose('1')" >写真を選択</div>
                写真2:<input type="text" name="picture2" id="theme" class = "picture2">
                写真2(サムネイル):<input type="text" name="thumbnailpicture2" id="theme" class = "thumbnailpicture2">
                <div id="click" onclick="choose('2')" >写真を選択</div>
                写真3:<input type="text" name="picture3" id="theme" class = "picture3">
                写真3(サムネイル):<input type="text" name="thumbnailpicture3" id="theme" class = "thumbnailpicture3">
                <div id="click" onclick="choose('3')" >写真を選択</div>
                写真4:<input type="text" name="picture4" id="theme" class = "picture4">
                写真4(サムネイル):<input type="text" name="thumbnailpicture4" id="theme" class = "thumbnailpicture4">
                <div id="click" onclick="choose('4')" >写真を選択</div>
                写真5:<input type="text" name="picture5" id="theme" class = "picture5">
                写真5(サムネイル):<input type="text" name="thumbnailpicture5" id="theme" class = "thumbnailpicture5">
                <div id="click" onclick="choose('5')" >写真を選択</div>
			</form>
			<button id="button" onclick="clicks()">送信</button>
		</div>
        <div id="pictureback"></div>
		<div id="pictures">
        <div id="sen">
            写真を選択してください。</div>
		   
		</div>
	</body>
</html>