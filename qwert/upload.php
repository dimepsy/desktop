<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor responsivefilemanager"
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SEVA Wiki Portal</title>
<link href="CSS/Style Sheet.css"rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#054772">
	<div class="userinterface">
   		<div class="header" style=" background-color: #054772">
       		<br />
            <center class="heading1">Upload your Findings</center></div>
			<div id='menu'>
		
		<div class = "side1">
			<ul class="content">
			<li><a href='index.php'><span>Home</span></a></li>
			  <li><a href="project.php">Published Research</a></li>
			  <li class='active'><a href="upload.php">Upload Here</a></li>
			  <br>
			</ul>
		</div>
		</div>
		<br><br>
		<<div class = "content4">
			<form action='uploadfile.php' method='post' enctype="multipart/form-data"><br><br>
				<b>Name of Research :&nbsp </b><input class='input' type='text' name='nop'> <br><br><br>
				<b>Description  :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><br><br>
				<textarea name="description"></textarea> <br><br>
				<!<b>Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><input class='input' type='email' name='email'> <br><br>
				<input type="hidden" name="status" value="1">
				<input type="file" name="project" size="50"/>
				<input type='submit' value='Upload'>
			 </font>
			</form>
		
	</div>
</body>

</html>