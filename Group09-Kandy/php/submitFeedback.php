<?php
include 'config.php';

?>

<!DOCTYPE.html>
<html>
<head>
	<style>
		.edit_details
		{
			padding-top:10px;
			padding-bottom:10px;
			padding-left:20px;
			padding-right:20px;
			font-size:15px;
			font-weight:bold;
			background:blue;
			color:white;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			cursor:pointer;
		}
		
		.delete_details
		{
			padding-top:10px;
			padding-bottom:10px;
			padding-left:20px;
			padding-right:20px;
			font-size:15px;
			font-weight:bold;
			background:red;
			color:white;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			cursor:pointer;
		}
		
		a.feedback_edit
		{
			color:white;
		}
	</style>
</head>
	<body>
		<?php
			include_once 'config.php';
		?>
		<p><h2>Dear <?php echo $_POST["Name"];?>, thankyou for providing us your feedback. We will take a quick action regarding your feedback.</h2></p>
		<p><h2>Your email address is <?php echo $_POST["email"];?>. If there are any offers you will be notified through your email.</h2></p>
		<p><h2>Please make sure that the entered email address and the name provided are the same details that were provided when you registered to our system. If incorrect click on the edit button and edit the details.</h2></p>
		
		<button class="edit_details"><a class="feedback_edit" href="../feedbackEdit.html">Edit details</a></button> &nbsp &nbsp
		<button class= "delete_details">Delete details</button> &nbsp &nbsp
		<input type="submit" name="submit" value ="Submit details" class="edit_details">
		
		<?php
			$name = $_POST["Name"];
			$email = $_POST["email"] ;
			$ftype =  $_POST["feedback_type"];
			$des =  $_POST["Feedback"];
			
			$sql = "insert into feedback(Feedback_no,Name,Email,Feedback_type,Description) values('','$name','$email','$ftype','$des')";
			
			if(mysqli_query($conn,$sql))
			{
				echo"<script>alert('Record inserted successfully')</script>";
				header("Location:feedbacks.html");
			}
			else
			{
				echo"<script>alert('Error inserting record')</script>";
			}
			
			mysqli_close($conn);
		?>
		
	</body>
</html>