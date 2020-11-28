<?php 
include '../includes/config.php';
$product_id = x($db , $_POST['product_id']);
getRows($db , "sell_product WHERE product_id = $product_id AND is_selected = 1 ");
 
?>