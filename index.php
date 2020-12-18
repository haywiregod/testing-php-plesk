<?php
$pid = $_GET['pid'];
$product = new Product($pid);
echo json_encode($product->get_info());
?>
