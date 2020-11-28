<?php 
include '../includes/config.php';
$condition = x($db , $_POST['cond']);
getPrice($db , "sell_product $condition ");
?>