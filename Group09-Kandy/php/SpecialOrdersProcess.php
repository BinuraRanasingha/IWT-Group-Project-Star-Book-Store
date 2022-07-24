<?php

 include 'config.php';

  $nic = $_POST['nid'];
  $name = $_POST['pname'];
  $pno = $_POST['mobile'];
  $email  = $_POST['email'];
  $address = $_POST['address'];
  $book = $_POST['bn'];
  $auth = $_POST['an'];



 $sql = "INSERT INTO spodetails(snic,sname,tp_no,email,address,book_name,author) VALUES('$nic','$name','$pno','$email','$address','$book','$auth')";


 if($con->query($sql))
 {
	 echo "inserted successfully";
 }
 
 else
 {
     echo "Error inserting".$con->error;
 
 }
 $con->close();
 
?>