<?php
    require_once 'config/connect.php';
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    $id = $_POST['id'];



    mysqli_query($connect, "INSERT INTO `products` (`SKU`, `Name`, `Price`, `info`, `id`) VALUES ('$sku', '$name', '$price', '$info', NULL)");
    header('Location: /');
