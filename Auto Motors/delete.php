<?php
	
	$con = new mysqli("localhost","root","","order");
	
	$q = "delete from  orderdetails where id = " .$_GET["id"];
	      
	if($con->query($q)==TRUE)
	{
		$con->close();
		header("location:table-ajax.php");
	}
	else
		echo("query not successull");
		
	$con->close();
	
?>