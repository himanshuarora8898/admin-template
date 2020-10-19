<?php
require "sqlconfig.php";
?>
<?php 
session_start();
if (isset($_GET['id']) ) {
    $up=$_GET['id'];
    $sql="UPDATE cart 
    SET quantity=quantity + 1, totalprice=(totalprice/(quantity-1))*quantity WHERE id='".$up."'";
    if ($conn->query($sql)==true) {
        header("Location: cart.php");
    }
    else {
        echo $conn;
    }
}
?>







