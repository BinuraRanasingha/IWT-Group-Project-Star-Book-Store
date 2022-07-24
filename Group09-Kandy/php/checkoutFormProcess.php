<?php

include 'config.php';


 $nic = $_POST['cusID'];
 $name = $_POST['fname'];
 $email  = $_POST['email'];
 $address = $_POST['adr'];
 $city = $_POST['city'];
 $state = $_POST['state'];
 $zip = $_POST['zip'];
 $nameOnCard = $_POST['cname'];
 $creditCardNo = $_POST['ccnum'];
 $exMonth = $_POST['expmonth'];
 $exYear = $_POST['expyear'];
 $cvv = $_POST['cvv'];


 $sql = "INSERT INTO cdetails(cnic,fname,email,address,city,state,zip,name_onCard,cardno,exp_month,exp_year,cvv) VALUES ('$nic','$name','$email','$address','$city','$state','$zip','$nameOnCard','$creditCardNo','$exMonth','$exYear','$cvv' )";


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