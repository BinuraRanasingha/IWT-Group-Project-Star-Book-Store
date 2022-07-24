<?php
include 'config.php'

?>


<!--Delete from here to add content-->
<table border="1"width ="50%">
<tr>
	<th>Delivary Number</th>
	<th>Customer Name</th>
	<th>Customer Address</th>
	<th>Customer Mobilenumber</th>
	<th>Details about Delivary</th>
	<th>Edit</th>
	<th>Delete</th>

</tr>
<!-- get data add from the table-->
<?php
	$sql= "SELECT* FROM details";
	$result=$conn->query($sql);
	
	if($result->num_rows>0)
	{
		while ($row=$result-> fetch_assoc())
		{
			$Number=$row["Delivary_number"];
			$Nmae=$row["customer_name"];
			echo "<tr>
					<td>".$Number."</td><td>";
					$Name=$row["customer_name"]</td><td>;
					$row["Customer_address"]."</td><td>"
					$row["Customer_mobilenumber"].</td><td>
					$row["Details_of_delivary"].</td>
					<td><button type='submit'><a href='Editrecord.php?Number=$Number'>
					Edit</a></button></td>";
					<td><button type='submit'><a href='Deleterecord.php?Number=$Number'>
					Delelte</a></button></td>";				;
		};
		}
	}
	else
	{
		echo "no results to read";
		
	}


?>
