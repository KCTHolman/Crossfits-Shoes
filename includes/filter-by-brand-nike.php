<?php

    //Sort-by-price.PHP

    include "../includes/db_connection.php";        

    $sql_querie = "SELECT * FROM `products` WHERE `products`.`product_brand`='reebok'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo '<div class="cards">
        <div class="cards-above"></div>
        <div class="product-image "><img src="../' . $row ['product_image'] . '"> 
        </div>
        <div class="product-name ">'  . $row ['product_name'] . '</div>
        <div class="product-comment ">' . $row ['product_comment'] . '</div><a href="google.nl" class="button-product-info">Meer info</a>
        <div class="product-price">' . $row ['product_price'] . '</div>
        </div>';
    }       

    $conn = null;
  
?>


