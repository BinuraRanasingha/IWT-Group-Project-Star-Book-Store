<?php include('crudServer.php'); 

	//fetch the record to be updated
if(isset($_GET['edit'])) {
	 $id = $_GET['edit'];
	 $edit_state = true;
	 $rec = mysqli_query($db, "SELECT * FROM giftvouchers WHERE id=$id");
	 $record = mysqli_fetch_array($rec);
	 $name = $record['name'];
	 $nic = $record['nic'];
	 $address = $record['address'];
	 $price = $record['price'];
	 $type = $record['type'];
	 $mobile = $record['mobile'];
	 $id = $record['id'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	<link rel="stylesheet" type="text/css" href="../css/crudStyles.css">
</head>
<body>

<?php  if(isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php
			echo $_SESSION['msg'];
			unset($_SESSION['msg']); 

		?>
	</div>

<?php endif ?>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>NIC</th>
				<th>Address</th>
				<th>Price</th>
				<th>Type</th>
				<th>Mobile</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_array($results)) { ?>
				
				<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['nic']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['mobile']; ?></td>
				<td>
					<a class="edit_btn" href="crudTable.php?edit=<?php echo $row['id']; ?>">Edit</a>
				</td>
				<td>
					<a class="del_btn" href="crudServer.php?del=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>


			

			<?php  }   ?>

			
		</tbody>
	</table>

	<form method="post" action="crudServer.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>

		<div class="input-group">
			<label>NIC</label>
			<input type="text" name="nic" value="<?php echo $nic; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<label>Gift Voucher Price</label>
			<input type="text" name="price" value="<?php echo $price; ?>">
		</div>
		<div class="input-group">
			<label>Gift Voucher Type</label>
			<input type="text" name="type" value="<?php echo $type; ?>">
		</div>
		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" name="mobile" value="<?php echo $mobile; ?>">
		</div>

		<div class="input-group">
			<?php if($edit_state == false):  ?>
				<button type="submit" name="save" class="btn">Save</button>
			<?php else:  ?>
				<button type="submit" name="update" class="btn">Update</button>

			<?php endif  ?>
			
		</div>
	</form>

</body>
</html> 