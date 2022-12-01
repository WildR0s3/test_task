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
    

<form method="POST" action="classes/delete.php">
<div class="header">
        <div class='text'>
          <h1>Product List</h1>
        </div>
        <div class="btns">
          <button type="submit" name="delete" id="delete-product-btn">MASS DELETE</button>
          <a href="add-product"><button type="button" id="add-product-btn">ADD</button></a>
        </div>
</div>

<section class="product-list">
        <?php 
        $showProducts = new ShowProducts();
        $showProducts->show(new DVD());
        $showProducts->show(new Furniture());
        $showProducts->show(new Book());
        ?>    
</section>  


</form>


<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous">
</script>
  <script src="js/product_list.js"></script>
</body>
</html>