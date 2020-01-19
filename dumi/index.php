<?php require_once('connect.php'); ?>
<!doctype html>
<html>
    <head>
        <title>
            Title Goes Here.
        </title>
        <link rel="stylesheet" type="text/CSS" href="style.css">
        <script type="text/javascript" src="demo_script_src.js" ></script>
        
    </head>
    <body bgcolor="#E6E6FA">
        <?php include('navbar.php');?>

        <img class="promoimg" src="./img/promo.jpg" alt="">


        <?php
        $path='./img/';
        $ex='.jpg';
        $sql="SELECT * FROM items";

        $result=$connection->query($sql);

        ?>


        <div class="row">
            <div class="column">
                <div class="item">
                <h3>Card 1</h3>
                <p><?php echo "<img class='itemimg' src=".$path."1".$ex.">"; ?></p>
                <p>Some text</p>
                </div>
            </div>

            <div class="column">
                <div class="item">
                <h3>Blue Blouse</h3>
                <p><img class="itemimg" src="./img/003.jpg" alt=""></p>
                <p>Womens</p>
                </div>
            </div>

            <div class="column">
                <div class="item">
                <h3>Frock</h3>
                <p><img class="itemimg" src="./img/002.jpg" alt=""></p>
                <p>Womens</p>
                </div>
            </div>
            

            <div class="column">
                <div class="item">
                <h3>Card 1</h3>
                <?php 
                
                $img='1';
                
                //echo 'img src="'.$path.$img.$jpg'"';
                ?>
                <p><?php echo "<img src=".$path.$img.$ex.">"; ?></p>
                <p>Some text</p>
                </div>
            </div>
        </div>
        
        <!-- <div class="row"> -->
            <?php
            
            $count=0;
            while($row=$result->fetch_assoc()){
                if($count%4==0){
                    echo "
                    <div class='row'>
                    ";
                }


                $id=(string)$row['id'];
                $name=$row['name'];
                $cat=$row['cat'];
                $count++;
                $button="<a href='item.php?id=".$id."'><button value='ddfa' >asdasd</button></a>";
                //echo $name;
                echo "<div class='column'><div class='item'><h3>".$name."</h3>
                <p><img class='itemimg' src='".$path.$id.$ex."'></p><p>".$cat.$count."<br>".$button."</p></div></div>";
                
                //echo "$count";

                if($count%4==0){
                    echo "</div>";
                }
            }


?>
                        
        </div>
        










        
        
    </body>
</html>