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
<body height="700px">


<div id="main" >
  <img src="/Applications/XAMPP/xamppfiles/htdocs/wiki/sevapic.jpg" style="width:304px;height:228px;padding-left:480px;padding-top:50px;">
 
 <form id="form" style="padding-left:470px;">
    <form name="form1" method="post" action="">
  <input id='textbox' class="li1"value=""/>
      <a id="button" href="portal.php"> 
      <input id="button" type="submit" class="button1" value="SEARCH">
      </a>
  </form>
    
     </a>
  </form>
</div>
<br>
<br>
<br>
<br>


<div id="footer" align="center" style="top:400px;">
Copyright @ 2016, Seva Development
</div>
</body>
<!-- you can modify this form to post data to your search page
  <form name="form1" method="post" action="">
  <input id='textbox' class="li1"value=""/>
      <input id="button" type="submit" class="button1" value="SEARCH">
  </form>
  <!-- DO NOT REMOVE <SPAN> TAG. THIS TAG CREATE DROPDOWN SUGGETIONS -->
    <span></span> 
</div>
</body>
</html>

