<?php
header("Content type: application/json");
include('includes/db.php');
include('product/ProductClass.php');
$pid = $_GET['pid'];
$product = new Product($pid);
echo json_encode($product->get_info());
?>
