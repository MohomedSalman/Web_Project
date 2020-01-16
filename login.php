<?php require_once('connect.php'); ?>


<!DOCTYPE html>
<html>
<head>
<title>Welcome to Ebuy.lk</title>

</head>
<body>

<?php 
session_start();
//$query = mysqli_query($connection,"select * from user"); 
if(isset($_POST['login'])) {
    //print_r($_POST);

$uname=$_POST['uname'];

$pwd=$_POST['pwd'];

$sql="select * from user where name='" . $uname . "' and pwd = '" . $pwd . "'";

//echo $sql;

$result=$connection->query($sql);

print_r($result);

if($result->num_rows){
    echo "user found";
    $_SESSION['loggedin']=1;
    header("Location: welcome.php");
    die();
}

}

?>    

<h1>Welcome to Ebuy.lk</h1>
<form method="post" action="login.php">
Username: <input type="text" id="uname" name='uname' required>
<br>
<br>
Password: <input type="text" id="pwd" name='pwd'required>
<br>
<br>
<input type="submit" value="Log in" name="login" required>
</form>


</body>

</html>