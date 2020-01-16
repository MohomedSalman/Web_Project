

<?php
require_once('connect.php');

$sql = "select * from user";
$sql2="insert into user (name,id) values ('kasun',7)";
$result = $connection->query($sql)->fetch_all();
//$first_row = $result->fetch_assoc();
print_r($result);   
?>