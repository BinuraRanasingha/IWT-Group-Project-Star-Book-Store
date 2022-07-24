<?php
include_once "config.php";

	$Name =$_POST("name");
	$Username =$_POST("uname");
	$nic =$_POST("NIC");
	$mobile =$_POST("Mobile");
	$Email =$_POST("email");
	$Address =$_POST("address");
	$Password =$_POST("pwd");
	
	$sql = "insert into user(Name,User_name,NIC,Mobile_Number,Email,Address,password)values('$Name','$Username','$nic','$mobile','$Email','$Address','$Password')";
		
	if(mysqli_query($conn,$sql)){
		header("Location:login.php");
	}
	else{
		echo "<script>alert ('Error in insertinh records')</script>";
	}
	
	mysqli_close($conn);
	
?>