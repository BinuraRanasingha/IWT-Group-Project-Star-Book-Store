<?php
	include_once 'config.php';
	
		$no = $_POST["it_no"];
		$des = $_POST["it_de"] ;
		$price =  $_POST["price"];
		
			
		$sql = "insert into feedback(Item_no,Item_description,Price) values('$no','$des','$price')";
			
		if(mysqli_query($conn,$sql))
		{
			echo"<script>alert('Record inserted successfully')</script>";
			header("Location:addItem.html");
		}
		else
		{
			echo"<script>alert('Error inserting record')</script>";
		}
			
		mysqli_close($conn);
?>