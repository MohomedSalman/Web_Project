<!doctype html>
<?php
    require_once('connect.php');
    if(isset($_GET['fname'])){
        echo "Done";

    }
    header( 'Location:thanks.php');

?>
<html>
    <head>
        <title>
            Title Goes Here.
        </title>
        <style>
        input[type=text] {
            width: 45%;
            height: 20%
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type=email] {
            width: 45%;
            height: 20%
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        </style>
        <link rel="stylesheet" type="text/CSS" href="style.css">
        <script type="text/javascript" src="script.js" ></script>

    </head>
    <body>
        <?php include('navbar.php');?>

        <div class="coutcontainer" style="margin-bottom:20px">
        <?php
            $path='./img/';
            $ex='.jpg';
            $src=$path.$_GET['id'].$ex;
            echo "<img src='".$src."' class='checkoutimg' >";
            echo "<div class='coutdes'>";
            echo "<br>";
            echo "<h1>Title</h1>";
            echo "<h2 class='coutprice'>$ Price</h2>";
            echo "</div>";


        ?>
        </div>

        <div class="coutcontainer">
        <form action="checkout.php?id= <?php echo $_GET['id'] ?> ">
        <h2>Billing Address</h2>
        <label for="fname">First Name</label>
        <input type="text" name="fname" required placeholder="Mark" >
        <br>
        <br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" required placeholder="Anthoney">
        <br>
        <br>
        <label for="email">E-mail</label>
        <input type="email" name="email" required placeholder="example@domain.com" >
        <br>
        <br>
        <label for="address">Address Line 1</label>
        <input type="text" name="address1" required placeholder="No.35, Haward avenue" >
        <br>
        <br>
        <label for="address">Address Line 2(optional)</label>
        <input type="text" name="address2" placeholder="2nd cross street">
        <br>
        <br>
        <label for="city">City</label>
        <input type="text" name="city" required placeholder="Washington">
        <br>
        <br>
        <label for="zip">City</label>
        <input type="text" name="zip" required placeholder="50000">


        <h2>Payment</h2>
        <input type="radio" name="pmet" value="card" id="card" checked onchange="radiob()"> Card
        <br>
        <input type="radio" name="pmet" value="cod" id="cod" onclick="radiob()"> Cash on Delivery
        <br>
        <div id="crddetails" style="display:block;" >
        <br>
            <label for="cardname">Name on card</label>
            <input type="text" name="cardname" placeholder="M. Anthoney">
            <br>
            <br><label for="cnumber">Credit Card Number</label>
            <input type="text" name="cardno" placeholder="1111-2222-3333-4444">
            <br>
            <br>
            <label for="city">Expire date</label>
            <input type="number" name="exmo" placeholder="MM" class="cdatem" ><b style="font-size:25px"> /</b>
            <input type="number" name="exyr" placeholder="YYYY" class="cdatey">
            <br>
            <br>
        </div>
        <input type="submit" value="Pay Now" class="buynowbutton">
        </form>
        </div>
        
    </body>
</html>