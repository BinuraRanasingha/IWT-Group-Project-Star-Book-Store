<?php
   include 'config.php';
?>

<?php
   
   $id  = $GET["id"];
   
   
   $sql = "DELETE FROM spodetails WHERE snic='$id'";
   
   if($con -> query($sql))
   {
	   header("Location:SpecialOrdersdataRetrive.php"); //direct to the nother page
   }
   else
   {
	   echo "<script>alert('Error')</script>";
   }
   
   mysqli_close($con);
?>