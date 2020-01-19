<html>
	<head>
		<title>Add New Product</title>
		<link rel="stylesheet" type="text/css" href="../css/addproduct.css">
	</head>
	<body>
		<div class="loginbox">
		<h1>Add New Product</h1>
		<form>
			<p>Product ID : </p><br />
			<p>Supplier ID : <select>
  						
					</select>
			</p><br />
			<p>Product Name : </p>
			<input type="text" name="pname" placeholder="Enter the Product Name"/><br />
			<p>Product Category: <select>
  						
					</select>	
			</p><br />
			<p>Product Sub Category: <select>
  						
					</select>	
			</p><br />
			<p>Product Title : </p>
			<input type="text" name="ptitle" placeholder="Enter the Product Title"/><br />
			<p>Product Price : </p>
			<input type="text" name="pprice" placeholder="Enter the Price"/><br />
			<p>Quantity on hand : </p>
			<input type="text" name="qty" placeholder="Enter the Quantity"/><br />
			<p>Product-image : </p><br />
			<input type="file" name="image" id="image"><br/><br />
			<div class="center">
				<input type="submit" class=button name="submit" value="Add"> <input type="reset" class=button name="reset" value="Cancle"><br />
			</div>
			</form>
		</div>
	</body>
</html>