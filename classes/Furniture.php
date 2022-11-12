<?php
class Furniture extends Product implements ProductInterface {
    public function getProducts()
    {
        $sql = "SELECT * FROM products WHERE Height IS NOT NULL";
        $result = mysqli_query($this->connect(), $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }
    public function setProducts()
    {
            $height = $_POST['height'];
            $width = $_POST['width'];
            $length = $_POST['length'];
            if ($this->validateInputs() || empty($height) || empty($width) || empty($length)) {
                echo "Please fill in all the data!";
            } elseif ($this->validateSKU()) {
                echo 'SKU already exist';
            } elseif ($this->validateSKUchars() || $this->validateName() || $this->validatePrice() || $this->validateAttrib($height) || $this->validateAttrib($width) || $this->validateAttrib($length)) {
                echo "Please insert correct data type";
            } else {
                $sku = $this->getSKU();
                $name = $this->getName();
                $price = $this->getPrice();
                $sql_Furniture = "INSERT INTO $this->table_name (SKU, Name, Price, Height, Width, Length) VALUES ('$sku', '$name', '$price', '$height', '$width', '$length')";
                mysqli_query($this->connect(), $sql_Furniture);
                exit('success');
            }    
    }
    public function showProducts()
    {
        $data = $this->getProducts(); 
       foreach ($data as $product) {
           echo "<div class='card' id='${product['ID']}'>";
           echo "<input type='checkbox' value='${product['ID']}' name='delete-checkbox[]' class='delete-checkbox'>";
           echo "<div class='info'>";
           echo "<p> ${product['SKU']} </p>";
           echo "<p> ${product['Name']} </p>";
           echo "<p> ${product['Price']} </p>";
           echo "<p> Dimension: ${product['Height']}x${product['Width']}x${product['Length']} </p>";
           echo "</div>";
           echo "</div>";
    }

    }
   
}