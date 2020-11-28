<?php
session_start();
ob_start();
$db = mysqli_connect('localhost' , 'root' , '' , 'fastfood');
$db->query("SET NAMES 'utf8'");
$db->query("SET CHARACTER SET utf8");
ini_set('default_charset','UTF-8'); 
if(!$db){
    exit("Error Connect To Database");
    echo mysqli_error_connet($db);
}

$today = date("Y-m-d");

function x($dbb , $data){
    $dataa = mysqli_real_escape_string($dbb,htmlspecialchars($data));
    return $dataa;
}

    function getRows($dbb, $condition){
        $query = mysqli_query($dbb , "SELECT * FROM  $condition ");
        $result = mysqli_num_rows($query);
        echo $result;
    }

    function getUpdate($dbb , $set){
        $query = mysqli_query($dbb , "UPDATE sell_product SET $set");
    }

    function getNames($dbb, $condition,$conditionname){
        $query = mysqli_query($dbb , "SELECT * FROM  $condition ");
        while($row = mysqli_fetch_assoc($query)){
            $name = $row[$conditionname];
            echo $name;
        }
    }
        function getPrice($dbb , $condition){
            $query = mysqli_query($dbb , "SELECT FORMAT(SUM(price),3) AS total FROM $condition");
                while($row = mysqli_fetch_assoc($query)){
                  $k=   $row['total'];
                  if(empty($k)){
                      echo "0";
                  }else{
                  echo $k;
                  }
                }
            }


  
?>