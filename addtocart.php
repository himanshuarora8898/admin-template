<?php
require "sqlconfig.php";
session_start();
?>
<?php 
$img ='';
$product='';
$price='';
if (isset($_GET['id']) ) {
    $update=$_GET['id'];
}
$sql1="SELECT * from products WHERE  product_id='".$update."'";
$result=$conn->query($sql1);
if ($result->num_rows > 0) {
    while ($row= $result->fetch_assoc()) {
        $img=$row['image'];
        $product=$row['category_id'];
        $price=$row['price'];
    
    }

    $sql2="INSERT INTO `cart` (`image`, `product`, `price`, `quantity`, `totalprice`)
     VALUES ('$img', '$product', '$price', 1, '$price')";

    if ($conn->query($sql2)==true) {
        include 'product.php';

    }
}
?>