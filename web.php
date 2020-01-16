<?php require_once('connect.php'); ?>


<!DOCTYPE html>
<html>
<head>
<title>Welcome to Ebuy.lk</title>
<script>
function check(){
    //alert('Dumi');
    var uname=document.getElementById("uname").value;
    var pwdd=document.getElementById("pwd").value;
    if(!uname)alert('Please Enter the Username.');
    if(!pwdd)alert('Please Enter the Password.');

}
</script>
</head>
<body>

<?php 
$query = mysqli_query($connection,"select * from user"); 

?>    


<h1>Welcome to Ebuy.lk</h1>
<form action="web.php" method="post">

Username: <input type="text" id="uname" >
<br>
<br>
Password: <input type="text" id="pwd" >
<br>
<br>
<input type="button" value="Log in" onclick="check()">

<?php 
while($row1=mysqli_fetch_assoc($query)){
    if($row1['name']==$_POST['uname'])
    echo "sucess";
}

 ?>
</body>

</html>