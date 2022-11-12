<?php
class Book extends Product implements ProductInterface {
    public function getProducts()
    {
        $sql = "SELECT * FROM products WHERE Weight IS NOT NULL";
        $result = mysqli_query($this->connect(), $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }
    public function setProducts()
    {
            
            $weight = $_POST['weight'];
            if ($this->validateInputs() || empty($weight)) {
                echo "Please fill in all the data!";
            } elseif ($this->validateSKU()) {
                echo 'SKU already exist';
            } elseif ($this->validateSKUchars() || $this->validateName() || $this->validatePrice() || $this->validateAttrib($weight)) {
                echo "Please insert correct data type";
            } else {
                $sku = $this->getSKU();
                $name = $this->getName();
                $price = $this->getPrice();
                $sql_Book = "INSERT INTO $this->table_name (SKU, Name, Price, Weight) VALUES ('$sku', '$name', '$price', '$weight')";
                mysqli_query($this->connect(), $sql_Book);
                exit('success');
            }    
    }
    public function showProducts()
    {
        $data = $this->getProducts(); 
       foreach ($data as $product) {
            echo "<div class='card' id='${product['ID']}'>";
            echo "<input type='checkbox' name='delete-checkbox[]' value='${product['ID']}' class='delete-checkbox'>";
            echo "<div class='info'>";
            echo "<p> ${product['SKU']} </p>";
            echo "<p> ${product['Name']} </p>";
            echo "<p> ${product['Price']} $ </p>";
            echo "<p> Weight: ${product['Weight']} KG </p>";
            echo "</div>";
            echo "</div>";
    }

}
}