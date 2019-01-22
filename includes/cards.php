<?php

    //CARD.PHP

    include "includes/db_connection.php";        

    $sql_querie = "SELECT product_id, type_shoe, brand_shoe, product_name, product_image, product_comment FROM products";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
/*                 echo '<div class="card">' .
              $row['product_name'] . 
             $row['product_id']  .
             '</a>' .
             '<h1>' . $row['type_shoe']  . ' ' . $row['brand_shoe'] . '</h1>' .
             '<p class="title">' . $row['product_id'] . '</p>' .           
             
             '</div>'; 

                     
        echo '<div class="card">' .
        '<a href="personpage.php?user_ID=' . $row['ID'] . '">' .
        '<img src="' . $row['img_url'] . '" alt="' . $row['firstname'] . '" style="width:100%">' .
        '</a>' .
        '<h1>' . $row['firstname']  . ' ' . $row['lastname'] . '</h1>' .
        '<p class="title">' . $row['title'] . '</p>' .           
        '<p>CodeGorilla Bootcamp</p>' .
        '</div>';
  
}   */

        echo '<div class="cards ">' .
        $row['product_name'] . '</div>' . '<div class="cards-above ">' 
        . '<div class="cards-above "></div>' . '<div class="product-image "><img src="'
        . $row ['product_image'] .'"style="width:100%">' . '</div>' . 
        '<div class="product-name ">' . $row ['product_name'] . '</div>'
        . '<div class="product-comment debug">' . $row ['product_comment'] . '</div>';


             
       
    }       

    $conn = null;
  
?>

