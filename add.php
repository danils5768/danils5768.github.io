<?php
        require_once 'config/connect.php'
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
</head>
<body>
    
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Product List</span>
      </a>

      <ul class="nav nav-pills">
        <button id="save-btn" type="submit" form="product-form">SAVE</button>
        <li class="nav-item"><a href="index.php" class="nav-link" id="delete-product-btn">CANCEL</a></li>
      </ul>
</header>      
    <form id="product-form" action="create.php" method="post">
        <p>SKU</p>
        <input type="text" name="sku" required>
        <p>Name</p>
        <input type="text" name="name" required>
        <p>Price</p>
        <input type="number" name="price" step="0.01" required>
        <div>
        <p>Info</p>
          <select onchange="appear(this)" name="switcher" id="product-type">
            <option value="none"></option>
            <option value="DVD">DVD</option>
            <option value="Furniture">Furniture</option>
            <option value="Book">Book</option>
          </select> 
        </div>
        <div>
          <div id="dvd" class="hidden">
            <p>Size</p>
            <input type="number" name="info">
          </div>  
          <div for="dimensions-inner" id="furniture" class="hidden">
            <p>Width</p>
            <input type="number" name="info">        
            <p>Length</p>
            <input type="number" name="info">
            <p>Heigth</p> 
            <input type="number" name="info">
          </div>  
          <div id="book" class="hidden">
            <p>Weight</p>
            <input type="number" name="info">
          </div>  
        </div>
    </form>

    

    <script src="app.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</body>

</html>