<?php
    include_once 'config.php';
?>
<?php

$con=new PDO("mysql:host=localhost;dbname=crud",'root','');
if (isset($_POST["submit"])) {
	$str=$_POST["search"];
	$sth=$con->prepare("SELECT*FROM 'stock' WHERE BookName='$str'");

	$sth->setFetchMode(PDO::FETCH_OBJ);
	$sth->execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Item No</th>
				<th>Book Name</th>
				<th>Author Name</th>
				<th>Price(Rs)</th>
				<th>Genre</th>
				<th>Quantity Available</th>
				<th>Discount(%)</th>
				<th>ISBN</th>
			</tr>

			<tr>
				<td><?php echo $row->itemNo; ?></td>
				<td><?php echo $row->bookName; ?></td>
				<td><?php echo $row->authorName; ?></td>
				<td><?php echo $row->price; ?></td>
				<td><?php echo $row->genre; ?></td>
				<td><?php echo $row->quantityAvailable; ?></td>
				<td><?php echo $row->discount; ?></td>
				<td><?php echo $row->isbn; ?></td>
		</table>
<?php
	}
	else{
	echo "Book does not exist!";
}

}

?>