<?php 
include 'sqlconfig.php';
?>
<?php 

echo "<h2>The products table</h2> ";
echo "<table>";
echo "<tr><th><input class='check-all' type='checkbox' /></th><th>Product id</th>
<th>Product Name</th><th>Product Price</th>
<th>Product Tag</th><th>Product Discription</th>
<th>Category_id</th><th>image</th><th>Action</th></tr>";
$sql1="SELECT * from products ";
$result=$conn->query($sql1);

if ($result->num_rows > 0) {
while ($row= $result->fetch_assoc()) {
    echo '<tr><td><input type="checkbox" /></td>';
    echo "<td>".$row["product_id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["price"]."</td>";
    echo "<td>".$row["tags"]."</td>";
    echo "<td>".$row["discription"]."</td>";
    echo "<td>".$row["category_id"]."</td>";
    echo "<td>".$row["image"]."</td>";
    echo'<td>
     <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
     <a href="managedel.php?id='.$row['product_id'].'" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
     <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
</td></tr>';
}
}
echo'</table>';


?>