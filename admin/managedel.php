<?php
require "sqlconfig.php";
?>
<?php  
if (isset($_GET['id']) ) {
    $del=$_GET['id'];
    echo $del;
    $sql="DELETE from products WHERE product_id='".$del."'";
    $result=$conn->query($sql);
    header("Location: products.php");
}
?>
