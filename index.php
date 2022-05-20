<?php
        require_once 'config/connect.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Product List</title>
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Product List</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="add.php" class="nav-link">ADD</a></li>
        <li class="nav-item"><a href="delete.php?id=<?= $item[4] ?>" class="nav-link" id="delete-product-btn">MASS DELETE</a></li>
      </ul>
    </header>
<div class="box-container">
    <?php
        $goods = mysqli_query($connect, "SELECT * FROM `products`");
        $goods = mysqli_fetch_all($goods);
        $id = $_GET['id'];
        foreach($goods as $item){
    ?>
    <div class="box">
    <input type="checkbox" class="delete-checkbox" value="`products`.`id` = $id">
        <div class="box-inner">
            <div class="item"><?= $item[0] ?></div>
            <div class="item"><?= $item[1] ?></div>
            <div class="item"><?= $item[2] ?>$</div>
            <div class="item">
                <div class="size">
                    <div class="size-inner"><?= $item[3] ?></div>
                </div>
                <div class="dimensions">
                    <div class="dimensions-inner">W <?= $item[3] ?></div> 
                    <div class="dimensions-inner">L <?= $item[3] ?></div>
                    <div class="dimensions-inner">H <?= $item[3] ?></div>
                </div>
                <div class="weight">
                    <div class="weight-inner"><?= $item[3] ?>kg</div>
                </div>   
            </div>     
            
            <div><?= $item[4]?></div>          
            <div><a href="delete.php?id=<?= $item[4] ?>">Delete</a></div>
        </div>
    </div>    
            <?php      
        }
    ?>       
</div>   

<script src="app.js"></script>
</body>
</html>

