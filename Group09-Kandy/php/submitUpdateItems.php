<?php
include 'config.php';




?>

<?php


$Number=$_POST["Number"];
$name=$_POST["field1"];
$Address=$_POST["field2"];
$Mobilenumber=$_POST["field3"];
$details=$_POST["field4"];


$sql="update item SET Delivary_number ='$Number',Details_ofdelivary =$details, Customer_Address=$Address,
Customer_mobilenumber=$Mobilenumber WHERE Delivary_number='$number'"

if($conn->query($sql))
{
	header("Location:delivary.php");
}
else
{
	echo "<script>alert('error')</script>"
}


?>