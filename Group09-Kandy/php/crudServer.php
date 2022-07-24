<?php

session_start();
//initialize variables
$name = "";
$nic = "";
$address = "";
$price = "";
$type = "";
$mobile = "";
$id = 0;
$edit_state = false;

//connect to database
$db = mysqli_connect('localhost', 'root', '', 'crud');

//if save button is clicked
if(isset($_POST['save'])) {
	$name = $_POST['name'];
	$nic = $_POST['nic'];
	$address = $_POST['address'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$mobile = $_POST['mobile'];

	$query = "INSERT INTO giftvouchers (name,nic,address,price,type,mobile) VALUES ('$name','$nic','$address',$price,'$type',$mobile)";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Changes saved";
	header('location: crudTable.php'); //redirect to table page after inserting
}

//update records
if(isset($_POST['update'])) {
		$con=mysqli_connect("localhost", "root", "", "crud");
	   $name = mysqli_real_escape_string($con, $_POST['name']);
	   $nic = mysqli_real_escape_string($con, $_POST['nic']);
	   $address = mysqli_real_escape_string($con, $_POST['address']);
	   $price = mysqli_real_escape_string($con, $_POST['price']);
	   $type = mysqli_real_escape_string($con, $_POST['type']);
	   $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	   $id = mysqli_real_escape_string($con, $_POST['id']);

	   mysqli_query($db, "UPDATE giftvouchers SET name='$name', nic='$nic', address='$address', price=$price, type='$type', mobile=$mobile WHERE id=$id");
	   $_SESSION['msg'] = "Changes updated";
	   header('location: crudTable.php');


}

//delete records
if(isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM giftvouchers WHERE id=$id");
	$_SESSION['msg'] = "Selected data deleted";
	header('location: crudTable.php');
}

//retrieve records
$results = mysqli_query($db, "SELECT * FROM giftvouchers");

?>