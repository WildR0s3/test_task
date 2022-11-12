<?php
include 'autoloader.php';

(new Product())->deleteProducts();
header("Location: ../product_list.php?productsdeleted=success");