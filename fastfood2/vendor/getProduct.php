<?php function getProduct($db,$active , $condition , $is_button){ ?>

<div class="tab-pane fade show <?php echo $active;?>" id="tabs-icons-text-<?php echo $condition;?>" role="tabpanel"
    aria-labelledby="tabs-icons-text-<?php echo $condition;?>-tab">
    <div class="row">
        <div class="col-sm">
            <div class="row mt-3 justify-content-center">
                <?php
$query = mysqli_query($db , "SELECT * FROM product WHERE type_product  = $condition");
while($row = mysqli_fetch_assoc($query)){ $product_id = x($db , $row['id']);?>
                <div class="card shadow m-3 p-3 border-0 radius-20 text-center" style="width: 25rem;">
                    <img src="<?php echo x($db , $row['img']);?>" class="m-auto radius-20" width="150" >
                    <img src="assets/img/undo.svg" width="50" id="undoproccess<?php echo $product_id;?>"
                        pid="<?php echo $product_id;?>" class="shadow-lg rounded-circle undo"
                        style="position: absolute;right: 47px;top: -22px;display:none">
                    <h2><?php echo x($db , $row['name']);?></h2>
                    <p style="position: absolute;" class="p1 btn-warning radius-20 p-1"
                        id="thisprice<?php echo $product_id;?>">0 IQD</p>
                    <p style="position: absolute;right:0" class="p2 btn-primary radius-10 p-1 mr-2"
                        id="thisrows<?php echo $product_id;?>">0 P</p>
                    <div class="d-flex justify-content-center">
                        <?php for($i = 1 ; $i < $is_button ; $i++){?>
                        <span class="bt1 btn btn-dark w-100"
                            data-loc-subject="<?php echo x($db , $row['price'.$i.'']);?>"
                            id="<?php echo $product_id ;?>"> <?php echo x($db , $row['price_as_text'.$i.'']);?><br> <b
                                id="price1"><?php echo x($db , $row['price'.$i.'']);?></b> </span>
                        <?php } ?>
                    </div>
                </div>
                <?php 
}
?>
            </div>
        </div>
    </div>
</div>
<?php
}
 ?>