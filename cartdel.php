<?php
require "sqlconfig.php";
?>
<?php  
if (isset($_GET['id']) ) {
    $delete=$_GET['id'];
}
$sql="DELETE from cart WHERE id='".$delete."'";
$result=$conn->query($sql);
header("Location: cart.php");

?>
