<html>
<head>
    <style>
      body {
          background-image: url('images/BG1.jpg');
         }
    </style>
	<link rel="stylesheet" type="text/css" href="css/SpecialOrdersdataRetrive.css">
</head>
<body>

<div class="sodr">
<table  width="100%">
   <tr>
      <th>   ID        </th>
      <th>  Name       </th>
	  <th>  Book Name   </th>
	  <th> Author Name  </th>
    <hr>  
   </tr>
  
  
   <?php
    //connect data base
    include 'config.php';
	
	//get data from table
    $sql = "SELECT snic,sname,book_name,author FROM spodetails"; 
   
    $result = $con -> query($sql);
	
	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			$id = $row["snic"];
			$name = $row["sname"];
			$bkname=$row["book_name"];
			$author=$row["author"];
			
			
			echo "<tr><td>".$id."</td><td>".$name."</td><td>".$bkname."</td><td>".$author."</td>
			<td><button type='submit'><a href='Editrecord.php?id=$id'>Edit</a></button></td>
			<td><button type='submit'><a href='Deleterecord.php?id=$id'>Delete</a></button></td>";
		}
	}
	else
	{
		echo "0 results";
	}
   ?>
   <br>
   
</table>
</div>
</body>
</html>