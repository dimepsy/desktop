<?php
function upload($filez)
{
		$upload_dir = 'project/';
		$dir = 1;
		while(file_exists($upload_dir.$dir) and is_dir($upload_dir.$dir)) {
    	$dir++;
		}
		mkdir($upload_dir.$dir);
		


		$allowedExts = array("pdf", "doc", "docx","xls","xlsx");
		$temp = explode(".", $_FILES["$filez"]["name"]);
		$extension = end($temp);
		if (($_FILES["$filez"]["type"] == "application/pdf") ||
			($_FILES["$filez"]["type"] == "application/msword")||
			($_FILES["$filez"]["type"] == "application/vnd.ms-excel")||
			($_FILES["$filez"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")||
			($_FILES["$filez"]["type"] == "application/vnd.openxmlformats-officedocument.presentationml.presentation")||
			($_FILES["$filez"]["size"] < 40000000)&& in_array($extension, $allowedExts))
		{
			if ($_FILES["$filez"]["error"] > 0 )
			{
				echo "Error: " . $_FILES["$filez"]["error"] . "<br>";
			}
			else
			{
				move_uploaded_file($_FILES["$filez"]["tmp_name"],$upload_dir.$dir.'/'.$_FILES["$filez"]["name"]);
				$name=$upload_dir.$dir;
				$ok=0;
				return array($ok, $name);

			}
			
		}
		else
		{

			echo "file upload failed";
				$name=$upload_dir.$dir;
				$ok=1;
				return array($ok, $name);


		}
}
?>		