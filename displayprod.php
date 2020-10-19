<?php 
include 'sqlconfig.php';

?>
<?php
$from=0;
$to=10;
if (isset($_GET['id']) ) {
    $update=$_GET['id'];
    if ($update==1) {
        $from=0;
        $to=10;

    }
    if ($update==2) {
        $from=10;
        $to=20;

    }
    if ($update==3) {
        $from=20;
        $to=30;

    }
    if ($update==4) {
        $from=30;
        $to=40;
    }
    if ($update==4) {
        $from=40;
        $to=50;

    }
}


$sql1="SELECT * from products limit $from, $to";
$result=$conn->query($sql1);
if ($result->num_rows > 0) {
    while ($data= $result->fetch_assoc()) {
        $dyanmic='<li>';
        $dyanmic.=' <figure>
        <a class="aa-product-img" href="product-detail.php?id='.$data['product_id'] .'"><img src="' . $data['image'] . '" alt="polo shirt img"></a>
        <a class="aa-add-card-btn"href="addtocart.php?id='.$data['product_id'] .'"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
        <figcaption>
        <h4 class="aa-product-title"><a href="#">' . $data['discription'] . '</a></h4>';
        $dyanmic.='<span class="aa-product-price">$' . $data['price'] . '</span>
        <span class="aa-product-price"><del>$45.50</del>
        </span>';
        $dyanmic.=' <p class="aa-product-descrip"></p>
        </figcaption>
        </figure>                         
        <div class="aa-product-hvr-content">
        <a href="product-details.php?id='.$data['product_id'] .'" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
        </div>
        <!-- product badge -->
        <span class="aa-badge aa-sale" href="sale.php?id='.$data['product_id'] .'">SALE!</span>
        </li>';

        echo $dyanmic;

    }
}
?>