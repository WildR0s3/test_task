<?php include 'classes/autoloader.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandiweb task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Product Add</h1>
    <form method="POST" id="product_from" action="classes/insert.php">
        <label for="SKU">SKU</label>
        <input type="text" name="SKU" id="sku"><br>
        <label for="Name">Name</label>
        <input type="text" name="Name" id="name"><br>
        <label for="Price">Price ($)</label>
        <input type="number" step="0.01" name="Price" id="price"><br>
        <label for="productType">Select product type</label>
        <select id="productType" name="productType">
            <option id="DVD" value="DVD">DVD</option>
            <option id="Furniture" value="Furniture">Furniture</option>
            <option id="Book" value="Book">Book</option>
        </select>
        <div class="DVD content">
            <div id="productinputs">
            <label for="size">Size (MB)</label>
            <input type="number" name="size" id="size"><br>
            </div>
            <div id="description">
            <p>Please provide size of DVD disc in MB</p>
            </div>
        </div>
        <div class="Furniture content">
            <div id="productinputs">
            <label for="height">Height (CM)</label>
            <input type="number" name="height" id="height"><br>
            <label for="width">Width (CM)</label>
            <input type="number" name="width" id="width"><br>
            <label for="length">Length (CM)</label>
            <input type="number" name="length" id="length"><br>
            </div>
            <div id="description">
            <p>Please provide dimensions of product HxWxL</p>
            </div>
        </div>
        <div class="Book content">
            <div id="productinputs">
            <label for="weight">Weight (KG)</label>
            <input type="number" name="weight" id="weight"><br>
            </div>
            <div id="description">
            <p>Please provide weight of the book</p>
            </div>
        </div>
        
        <button type="submit" name="submit" class="save-btn">SAVE</button>
        
    </form>
    <div id="div-message">
    <p id="form-message"></p>
    </div>
    <a href="product_list.php"><button id="cancel-btn">CANCEL</button></a>
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous">
</script>
  <script src="js/product_add.js"></script>
</body>
</html>
