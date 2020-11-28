<?php 
include '../includes/config.php';
$product_id = x($db , $_POST['product_id']);
$query = mysqli_query($db , "SELECT * FROM sell_product WHERE product_id = $product_id AND is_selected = 1 ORDER BY date_of_add DESC LIMIT 1");
if(mysqli_num_rows($query) < 1){
    exit("done");
}else{
    while($row  = mysqli_fetch_assoc($query)){
        $price = $row['price'];
    }
    $query2  = mysqli_query($db , "DELETE FROM sell_product WHERE product_id = $product_id AND is_selected = 1 ORDER BY date_of_add DESC LIMIT 1");
    if($query2){
        getPrice($db , "sell_product WHERE product_id = $product_id AND is_selected = 1 ");
    }
}
