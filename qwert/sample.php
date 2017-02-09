<?php
$count=0;
	include("configure.php");
	$postid=$_GET['id'];
	//$date=$_GET['Date'];
	//echo $postid;
	
	$sql="SELECT  * FROM upload WHERE id='$postid'";
	
	mysql_select_db('wikidata');
	
	$retval= mysql_query($sql);
	if(! $retval)
	{
		die('Could not get data : ' .mysql_error());	
	}
	
	$row = mysql_fetch_array($retval, MYSQL_ASSOC);
	
	/*for($i=0;$row = mysql_fetch_array($retval, MYSQL_ASSOC); $i++)
	{
		
		$b[$i]= $row['name'];
		$c[$i] = $row['description'];
		
		$count++;	
	}*/
	
?>
<div id="other">
			<!-- Articles -->
			<div class="row">
				<article class="col-xs-12">
					<h2><?php echo $row['title'];?> </h2>
					<?php echo " <a href='edit.php?eid=$postid'><button id='edit'>Edit</button></a> ";?>
					<p><?php echo $row['description'];?><br>
						
                    </p>
					<b>Published Date:</b> <?php echo $row['Date'];?><br>
					<b>Last Edited By:</b> <?php echo $row['Last_Edited_By'];?><br>
				</article>
			</div>