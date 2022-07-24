<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
.btn-group .button {
  background-color: #ffff33; /* shadow */
  border: black;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
}

.btn-group .button:hover {
  background-color:#48D1CC;
}
body {
  background-color: #E6E6FA;
}
</style>
</head>
<body>

<script src="js/newspaper.js">
</script>
<center>
<div class="btn-group">
  <button class="button"onclick="document.location='sinnews.html'"><a href="sinnews.html">sinhala</a></button>
  <button class="button"onclick="document.location='engnews.html'"><a href="engnews.html">English</a></button>
  <button class="button"onclick="document.location='tamnews.html'"><a href="tamnews.html">Tamil</a></button>


</div>
</center>
<!--create a slide show-->
<br>
<br>
<style>table,th,td{border:1px solid black;}</style>
<table border="1" width=100%>
<tr>
	<th>Newspaper No</th>
	<th>Newspaper Name</th>
	<th>Link</th>
	<th>Edit</th>
	<th>Update</th>
</tr>

<!--get data from the table-->

<?php

		$sql="SELECT* FROM sinhala_newspaper";

		$result=$conn->query($sql);

		if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$newspaperNo =$row["Newspaper_No"];
			$Name =$row["Newspaper_Name"];
			echo"<tr>
				<td>".$newspaperNo."</td><td>";
				$Name."</td></td
				$row["Link"]."</td><td>".
				<td><button type='submit'><a href=";
		}
	}
	else
	{
		echo "0 results";
	}
?>


<form method ="post" action="deleteUpdateItems.php">
	<input type ="text" name="No" value=<?php echo $no ?>disabled >
	<input type ="text" name="No" value=<?php echo $no ?>disabled >
	<input type ="text" name="No" value=<?php echo $no ?>disabled >
	<input type ="text" name="No" value=<?php echo $no ?>disabled >
	
	
</form>































 




</body>
</html>
