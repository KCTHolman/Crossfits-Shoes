<?php

    //CARD.PHP

    include "includes/db_connection.php";        

    $sql_querie = "SELECT  product_name, product_image, product_comment FROM products";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            

/*         echo '<div class="cards ">' . '<div class'
        $row['product_name'] . '</div>'  
        . '<div class="cards-above "></div>' . '<div class="product-image "><img src="'
        . $row ['product_image'] .'"style="width:100%">' . '</div>' . 
        '<div class="product-name ">' . $row ['product_name'] . '</div>'
        . '<div class="product-comment debug">' . $row ['product_comment'] . '</div></div>'; */

        echo '<div class="cards">
        <div class="cards-above"></div>
        <div class="product-image "><img src="' . $row ['product_image'] . '"> 
        </div>
        <div class="product-name ">'  . $row ['product_name'] . '</div>
        <div class="product-comment ">' . $row ['product_comment'] . '</div><a href="google.nl" class="button-product-info">Meer info</a>
        </div>';
    }       

    $conn = null;
  
?>

