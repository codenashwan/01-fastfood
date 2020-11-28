<?php 
include '../includes/config.php';
$set = x($db , $_POST['set']);
getUpdate($db , $set);
?>