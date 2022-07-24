<?php
include 'config.php'

?>


<!--Delete from here to add content-->
<?php
	$recordNumber=$_GET['Number'];
	
	$sql="SELECT* FROM Details where Delivary_Number=$recordNumber";
	
	$result =$conn->query($sql);
	
	if ($result -> num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			<label>Delivary_Number </label> <br>
			$Number=$row["Delivary_Number"];
			$Name=$row["Customer_Name"];
			$Address=$rrow["Customer_Address"];
			$Mobilenumber=$row["Customer_mobilenumber"];
			$details=$row["details_ofdelivary"];
	
		
	}
	else
	{
		echo"no results";
	}
<?
<form method="POST"action="submitUpdateItems.php">
	<label>Delivary_Number </label> <br>
	<input type="text" name="Number" value=<?php echo $Number;?>read only><br>
	
	<label>Customer_Name </label> <br>
	<input type="text" name="field1" value=<?php echo $Name;?>read only><br>
	
	<label>Customer_Address </label> <br>
	<input type="text" name="field2" value=<?php echo $Address;?>read only><br>
	
	<label>customer_mobilenumber </label> <br>
	<input type="text" name="field3" value=<?php echo $Mobilenumber;?>read only><br>
	
	<label>Details_ofdelivary </label> <br>
	<textarea name="field4"> <?php echo $details; ?> </textarea>	
	<br> <br>
	<input type ="submit" value="update">
	
	
	
	
	
	

