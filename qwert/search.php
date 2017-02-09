<html>
<head>

<!--JQuery to Auto post your value for getting suggetions-->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
     $('input#button').attr('disabled','disabled');
     $('input#textbox').keypress(function(){
      if($(this).val() != ''){
     $('input#button').removeAttr('disabled');
            }
     });
  $("input").keyup(function(){
    txt=$("input#textbox").val();
    $.post("post.php",{suggest:txt},function(result){
      $("span").html(result);
    });
  });
});
</script>

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" >
	<img src="sevapic.jpg" style="width:304px;height:228px;padding-left:480px;padding-top:50px;">
	<form id="form" style="padding-left:470px;">
		<input id="textbox" type="text" size="40px" height="100px">
		<a id="src" href="portal.php"><input id="button" type="button" value="Search" size="150px" height="300px">
		
		 </a>
	</form>
</div>
</body>
</html>

