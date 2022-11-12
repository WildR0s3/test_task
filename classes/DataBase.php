<?php
class DataBase {
    private $DB_HOST;
    private $DB_USER;
    private $DB_PASS;
    private $DB_NAME;
    protected $table_name = 'products';
    public function connect() {
        $this->DB_HOST = 'localhost';
        $this->DB_USER = 'pablo';
        $this->DB_PASS = '12345';
        $this->DB_NAME = 'products';
        $conn = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
        return $conn;
    }
    
}