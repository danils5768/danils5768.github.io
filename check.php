<?php
    //print_r($_POST);
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $weigth = $_POST['weight'];

    $error = '';
    if(trim($sku) == '')
        $error = 'Enter SKU';
    else if(strlen($sku) < 8)
        $error = 'sku must be at least 8 charachters'; 
    else if(trim($name) == '')
        $error = 'Enter Name'; 
    else if(trim($price) == '')
        $error = 'Enter Price'; 
    else if($price == '0')
        $error = 'What a kind person selling his item for free. Please provide the price.';
    else if(trim($type) == '')
        $error = 'Enter Type';
    else if(trim($size) == '')
        $error = 'Enter Size'; 
    else if(trim($height) == '')
        $error = 'Enter Heigth';
    else if(trim($width) == '')
        $error = 'Enter Width';
    else if(trim($length) == '')
        $error = 'Enter Length';
    else if(trim($weigth) == '')
        $error = 'Enter Weigth';    


    if($error != ''){
        echo $error;
        exit;
    }
?>