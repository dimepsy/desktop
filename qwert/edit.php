<?php
$count=0;
	include("configure.php");
	$postid=$_GET['eid'];
	//echo $postid;
	
	$sql="SELECT  title, description, email, file, status FROM upload WHERE id='$postid'";
	
	mysql_select_db('wikidata');
	
	$retval= mysql_query($sql);
	if(! $retval)
	{
		die('Could not get data : ' .mysql_error());	
	}
	
	$row = mysql_fetch_array($retval, MYSQL_ASSOC);
	
	
		$b= $row['title'];
		$c = $row['description'];
		$d = $row['email'];
		
		$count++;	
	
	
	
?>
<html>
<head>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});
</script>
</head>
<body onLoad="iFrameOn();">
<div class = "content4" >
			<form id="myform" action="editupdate.php?eid=<?php echo $postid?>" align="center" method='post' enctype="multipart/form-data"><br><br>
				<?php echo "<b>Researched Topic :&nbsp </b><input class='input' type='text' enable='false' name='nop' value='$b'> <br><br><br>";?>
				
				<br>
				<?php echo "<b>Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><input class='input' type='email' name='email' value='$d'> <br><br>";?>
				<br>
				<input type="hidden" name <b>Description  :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><br><br>
				<textarea name="description" >   <?php echo $c?></textarea> <br><br>
				
				<input type="file" name="project" size="50"/>
				<input type='submit' value='Update'>
			 
			</form>
</div>
</body>
</html>
This is just the change. //There should be comment in this line
