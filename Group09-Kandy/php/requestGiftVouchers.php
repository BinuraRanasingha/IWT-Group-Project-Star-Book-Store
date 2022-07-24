<?php

$customerName=$_POST['cname'];
$NIC=$_POST['nic'];
$address=$_POST['adrss'];
$giftVoucherPrice=$_POST['gvp'];
$giftVoucherType=$_POST['gvt'];
$mobileNumber=$_POST['mno'];

	//database connection
    $conn=new mysqli('localhost','root','','starbookstore');
    if($conn->connect_error)
    {
    	die('connection failed! :'.$conn->connect_error);
    }
    else
    {
    	$stmt=$conn->prepare("INSERT into giftVoucherRequests(customerName,NIC,address,giftVoucherPrice,giftVoucherType,mobileNumber) values(?,?,?,?,?,?)");
    	$stmt->bind_param("sssisi",$customerName,$NIC,$address,$giftVoucherPrice,$giftVoucherType,$mobileNumber);
    	$stmt->execute();
    	echo "Request submission successful...";
    	$stmt->close();
    	$conn->close();
    }



?>


