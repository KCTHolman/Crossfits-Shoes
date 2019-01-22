<?php
    include '../includes/db_connection.php';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../index.css" type="text/css" rel="stylesheet">
    <title>Crossfit shoes</title>
</head>
<body>
    <div class="container1">
        <div class="box1"></div>
        <div class="box2">
        <?php include "../includes/sort-by-price.php"; ?> <!-- sort-by-price.php of cards.php -->
        </div>

        <div class="box3"></div>
    </div>
</body>
</html>
