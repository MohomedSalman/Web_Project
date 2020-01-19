<?php require_once('conect.php'); ?>

<html>
	<head>
		<title>Add_Supplier</title>
		<link rel="stylesheet" href="../css/addsupplier.css">
	</head>
	<body>
		<div class="loginbox">
			<h1>Add New Supplier</h1>
			<form action="addsupplier.php" method="POST">
				<p>Supplier ID : </p>
				<input type="text" name="sid"/><br />
				<p>First Name : </p>
				<input type="text" name="fname" placeholder="Enter the first name"/><br />
				<p>Last Name :  </p>
				<input type="text" name="lname" placeholder="Enter the last name"/><br />
				<p>Adress :  <p>
				<input type="text" name="address" placeholder="Enter the address"/><br />
				<p>Email :  </p>
				<input type="text" name="email" placeholder="Enter the email address"/><br />
				<p>Telephone :  </p>
				<input type="text" name="telephone" placeholder="Enter the telephone no"/><br />
				<div class="center">
					<input type="submit" class="button" name="submit" value="Submit"><input type="reset" class="button" name="reset" value="Cancle">
					<a href="viewSupplier.php"><button type="button" class="button">View</button></a>
				</div>
			</form>
		</div>
	</body>
</html>

<?php
	require_once('conect.php');
	if(isset($_POST['submit'])){

	$sql = "INSERT INTO `supplier`(`SID`, `sFname`, `sLname`, `sAddress`, `sEmail`) values ('".$_POST['sid']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['address']."','".$_POST['email']."')";
	echo $sql;
	//$result = mysqli_query($connection,$sql);
	$result=$connection->query($sql);
print_r($result);
	if($result){
	echo "<script> alert('Registered Sucessfully') </script>";die();}
	else{
	echo "failed";die();}

	}

?>
