<?php
session_start();

//print_r($_SESSION);
// unset($_SESSION['loggedin']);
if(isset($_SESSION['loggedin'])){
  //echo "session is set";
}else{
  header("Location: login.php");
  die();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to Ebuy.lk</title>

</head>


<body>

<center>
    <h1>Welcome to Ebuy.lk</h1>

  <h2>  Welcome to the largest online store. </h2>
  <form >
Username: <input type="text" id="uname" required>
<br>
<br>
Password: <input type="text" id="pwd" required>
<br>
<br>
<input type="submit" value="Log in" >
</form>
  <!-- <a href="login.php"><input type="button" value="Log in"></a> -->
  <!-- &nbsp &nbsp &nbsp -->
  <br>
  Don't have account? Don't worry. Sign up in few seconds.
  <a href="signup.php"><input type="button" value="Sign Up"></a>

</center>

</body>

</html>