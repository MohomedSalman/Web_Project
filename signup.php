<?php
require_once('connect.php');
?>

<!doctype html>

<html>
<head>
<title>Sign Up</title>
</head>
<body>


<?php
    if(isset($_POST['uname'])){
        $aaa=$_POST['uname'];
       // echo $aaa;

        $uname=$_POST['uname'];
        $pwd=$_POST['pwd'];

        $sql="INSERT INTO user(name,pwd) VALUES ('".$uname."','".$pwd."')";

        $result=$connection->query($sql);

        print_r($result);

        header("Location: welcome.php");





    }

?>
<form action="signup.php" method="post">

Username
<input type="text" name="uname" id="">
<br> <br>
Password
<input type="text" name="pwd" id="">
<br>
<!-- First name:
<input type="text"  id="fname" name="fname" required>
<br>
Last name:
<input type="text"  id="lname" required>
<br>
Address:
<input type="text"  id="adl1" placeholder="Line 1" name="add1" required>
<br>
<input type="text" placeholder="Line 2" id="adl2" required>
<br>
<input type="text" placeholder="City" id="city" required>
<br>
<input type="text" placeholder="Province" id="" required> -->

<input type="submit" value="Sign Up" name="sign up">
</form>
    

</body>
</html>