<!doctype html>
<html>
    <head>
        
        <title>
            Title Goes Here.
        </title>
        <link rel="stylesheet" type="text/CSS" href="style.css">
        <script type="text/javascript" src="demo_script_src.js" ></script>

    </head>
    <body>
        <?php include('navbar.php');
        
        $path='./img/';
        $ex='.jpg';
        $src=$path.$_GET['id'].$ex;
        echo "<img class='preview' src='".$src."' alt=''>";
        $pid=$_GET['id'];
        $pathh='checkout.php?id='.$pid;
        ?>

        <div class="viewtitle">
        Title
        <div class="viewdescription">
            <p style="margin-left:100px">
            Description goes here
            </p>
            <?php
            
            echo "<a href='".$pathh."'><input type='button' Value='Checkout' class='buynowbutton'></a>";
            ?>
            
        </div>
        </div>


        <img src='".$src."' alt="">
        
    </body>
</html>