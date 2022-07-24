
<?php


$data =$_POST;

if  (empty($data['uname']) ||empty($data['pwd']) )
{
	die('please fill all required fields!');
	exit();
}

if ($data['password'] !== $data['password_confirm']) {
   die('Password and Confirm password should match!');   
   exit();
}
header("Location: welcome.html"); 
exit();
?>