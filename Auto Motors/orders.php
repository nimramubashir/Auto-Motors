<?php

$fname = $_POST["firstname"] ; 
$lname = $_POST["lastname"] ; 
$ccn = $_POST["ccn"] ; 
$email = $_POST["email"] ; 
$mobile = $_POST["mobile"] ; 
$dob = $_POST["dob"] ; 
$model = $_POST["model"] ; 
$address1 = $_POST["address1"] ; 
$address2 = $_POST["address2"] ;


$con = new mysqli("localhost","root","","order") ; 

$q = "insert into orderdetails(firstname,lastname,email,dob,address1,address2,ccn,mobile,model) values('" . $fname . "','" .$lname."','" . $email . "','" .$dob."','" .$address1."','" .$address2."','" .$ccn."','" .$mobile."','" .$model."')";

	if($con->query($q)==TRUE)
		header ("location:table-ajax.php");
	else
		echo $con->error;

$q = " select * from orderdetails" ; 
$rs = $con->query($q) ; 

while ( $r = $rs->fetch_assoc())
{
	echo $r["id"] ." " . $r["firstname"] . "<br />" ;
}
$con->close();
	
	
?>