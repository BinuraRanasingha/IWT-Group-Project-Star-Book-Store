<?php
   include 'config.php';
?>

<?php
   
   $id  = $POST["id"];
   $name = $_POST["field1"];
   $bkname = $_POST["field2"];
   $author = $_POST["field3"];
   
   $sql = "UPDATE spodetails SET sname='$name',book_name='$bkname',author='$author' WHERE snic ='$id'";
   
   if($con -> query($sql))
   {
	   header("Location:SpecialOrdersdataRetrive.php"); //direct to the nother page
   }
   else
   {
	   echo "<script>alert('Error')</script>";
   }
   $con -> close();
?>