<?php
class Product extends DataBase {
    
    protected function getSKU() {
        $sku = $_POST['SKU'];
        return $sku;
    }
    
    protected function getName() {
        $name = $_POST['Name'];
        return $name;
    }
    protected function getPrice() {
        $price =  $_POST['Price'];
        return $price;
    } 

    protected function validateInputs() {
        return (empty($this->getSKU()) || empty($this->getName()) || empty($this->getPrice()));
    }
    protected function validateSKU() {
        $sku = $this->getSKU();
        $sql_sku = "SELECT SKU FROM $this->table_name WHERE SKU = '$sku'";
        $result = mysqli_query($this->connect(), $sql_sku);
        return (mysqli_num_rows($result) > 0);
    }

    protected function validateSKUchars() {
        $sku = $this->getSKU();
        return preg_match("/[^a-zA-Z0-9]/", $sku);
    }
    protected function validateName() {
        $name = $this->getName();
        return preg_match("/[^a-zA-Z0-9\s]/", $name);
    }
    protected function validatePrice() {
        return !(filter_var($this->getPrice(), FILTER_VALIDATE_FLOAT));
    }

    protected function validateAttrib($attrib) {
        return !(filter_var($attrib, FILTER_VALIDATE_INT));
    }

    

    public function deleteProducts() {
            if (isset($_POST['delete-checkbox'])) {
                foreach ($_POST['delete-checkbox'] as $value) {
                    $sql = "DELETE FROM products WHERE ID = $value";
                    mysqli_query($this->connect(), $sql);
            }
        } 
    }
}	


    
  
    
