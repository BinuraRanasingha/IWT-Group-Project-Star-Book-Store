<?php
    include_once 'config.php';
?>
<?php

$itemNumber=$_POST['iNO'];
$itemQuantity=$_POST['iQT'];

	//database connection
    $conn=new mysqli('localhost','root','','crud');
    if($conn->connect_error)
    {
    	die('connection failed! :'.$conn->connect_error);
    }
    else
    {
    	$stmt=$conn->prepare("INSERT into cart(itemNumber,itemQuantity) values(?,?)");
    	$stmt->bind_param("si",$itemNumber,$itemQuantity);
    	$stmt->execute();
    	echo "Added to cart successfully...";
    	$stmt->close();
    	$conn->close();
    }



?>


