<?php
include 'autoloader.php';

(new Product())->deleteProducts();
header("Location: ../");