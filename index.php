<?php
    include 'includes/db_connection.php';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="index.css" type="text/css" rel="stylesheet">
    <title>Crossfit shoes</title>
</head>
<body>
    <div class="container1">
        <div class="box1"> 
           <a href="sort-by-price/sort-by-price.php">sorteren op prijs</a></div>
           <a href="filter-by-brand/filter-by-brand-reebok.php">filter op Reebok</a>
           <a href="filter-by-brand/filter-by-brand-nike.php">filter op Nike</a>
        <div class="box2">

        <?php include "includes/cards.php"; ?> <!-- sort-by-price.php of cards.php -->
        </div>

        <div class="box3"></div>
    </div>
</body>
</html>
