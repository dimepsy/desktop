<?php
    include('configure.php');
	$Date= date('Y-m-d');
	
	if(isset($_POST['nop'])&&isset($_POST['description'])&&isset($_POST['email']))
	{
		$nop=$_POST["nop"];
		$description=$_POST["description"];
		$email=$_POST["email"];
		$status=$_POST["status"];
		
		$sql = 'SELECT * FROM upload';
		$retval=mysql_query($sql);
		
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			if($nop==$row['title'])
			{
				$b=1;
				break;
			}
			else
			$b=0;
		}

		if($b==0){
		include('uploadcheck.php');
			$name = upload("project");
			$ok= $name[0];
			$filename=$name[1];
			$files=$filename.'/'.$_FILES["project"]["title"];
			
		if($ok==0)
		{
			if(!empty($_POST["nop"])&&!empty($_POST['email']))
			{ 
				
				echo ("files");
				$query="INSERT INTO upload VALUES('','$nop','$description','$email','$files','$filename','$status','$Date[weekday],$Date[month] $Date[mday],$Date[year]','$email')";
				$query_run=mysql_query($query); 
				echo ("succesful");
				header("Location:portal.php?upload=successful");
			
	
				
			}
			else 
			{
				echo ("fill form");
			header("Location:upload.php?Please Fill the form");
			}
		}
	        else 
			{
				
				$query="INSERT INTO upload VALUES('','$nop','$description','$email','','','$status','$Date','$email')";
				$query_run=mysql_query($query); 
				
				echo ("(error:invalid file format)"); 
				header("Location:portal.php?upload=successful");
				//header("Location:upload.php?invalid file format");
			}
	}
	
	}
			else echo("name already in use.");

	
?>	