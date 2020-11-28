<?php
include '../includes/config.php';
$product_id  = x($db , $_POST['product_id']);
$price = x($db , $_POST['price']);
if(empty($product_id) || empty($price)){
    eixt("error");
    die();
}else{
    $query = mysqli_query($db , "INSERT INTO `sell_product`(`product_id` , `price` , `is_now` , `is_selected`) VALUES ('$product_id' , '$price' , 1 , 1)");
    if($query){
        exit("success");
        die();
    }
}