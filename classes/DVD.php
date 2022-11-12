<?php
class DVD extends Product implements ProductInterface {

  
    public function getProducts()
    {
        $sql = "SELECT * from products WHERE Size IS NOT NULL";
        $result = mysqli_query($this->connect(), $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }
    public function setProducts()
    {   
            $size = $_POST['size'];
            if ($this->validateInputs() || empty($size)) {
                echo "Please fill in all the data!";
            } elseif ($this->validateSKU()) {
                echo 'SKU already exist';
            } elseif ($this->validateSKUchars() || $this->validateName() || $this->validatePrice() || $this->validateAttrib($size)) {
                echo "Please insert correct data type";
            } else {
                $sku = $this->getSKU();
                $name = $this->getName();
                $price = $this->getPrice();
                $sql_DVD = "INSERT INTO $this->table_name (SKU, Name, Price, Size) VALUES ('$sku', '$name', '$price', '$size')";
                mysqli_query($this->connect(), $sql_DVD);
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
            echo "<p> ${product['Price']} $ </p>";
            echo "<p> Size: ${product['Size']} MB </p>";
            echo "</div>";
            echo "</div>";
       }
    }
}