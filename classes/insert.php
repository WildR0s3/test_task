<?php
include 'autoloader.php';

$productType = $_POST['productType'];
(new InsertProduct)->insert(new $productType);


?>
