<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM supplier";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>

<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
	</head>
<body>
	<table border=1 padding=00px>
		<tr bgcolor=#4CAF50 font color= white>
			<td>SID</td>
			<td>sFname</td>
			<td>sLname</td>
			<td>sAddress</td>
			<td>sEmail</td>
			<td>Update</td>
			<td>Delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['SID'] ?></td>
			<td><?php echo $row['sFname'] ?></td>
			<td><?php echo $row['sLname'] ?></td>
			<td><?php echo $row['sAddress'] ?></td>
			<td><?php echo $row['sEmail'] ?></td>
			<?php echo "<td><a href =update.php?item_id='".$row['SID']."' > update </a> </td>"?>
			<?php echo "<td><a href =delete.php?item_id='".$row['SID']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			<br><a href="addSupplier.php"><button type="button">Add</button></a>

	
</body>
</html>

