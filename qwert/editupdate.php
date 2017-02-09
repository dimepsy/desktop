<?php
    include('configure.php');
	$Date= GETDATE();
	$fid=$_GET['eid'];
	echo $fid;
	
	//if(isset($_POST['nop'])&&isset($_POST['description'])&&isset($_POST['email']))
	{
		$nop=$_POST["nop"];
		$description=$_POST["description"];
		$email=$_POST["email"];
		$status=1;
		//$date=$_POST["Date"];
		$edited=$_POST["email"];
		
		$sql = 'SELECT * FROM upload';
		mysql_select_db('wikidata');
		$retval=mysql_query($sql);
		
		/*while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
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
				$query="UPDATE upload SET title='$nop', description='$description', email='$email', status='$status', lastedit='$edited' WHERE id='$id' ";
				$query_run=mysql_query($query); 
				echo ("succesful");
				//header("Location:portal.php?upload=successful");
			
	
				
			}
			else 
			{
				echo ("fill form");
			//header("Location:upload.php?Please Fill the form");
			}
		}
	        else 
			{ */
				
			   $query="UPDATE upload SET description='$description', email='$email', status='$status', Last_Edited_By='$edited' WHERE id='$fid' ";
			   $query_run=mysql_query($query); 
			   header("Location:sample.php?id=$fid");
			 
				/*echo ("(error:invalid file format)"); 
				//header("Location:upload.php?invalid file format");
			}
		}
	
	}
			else echo("name already in use."); */

}	
?>	