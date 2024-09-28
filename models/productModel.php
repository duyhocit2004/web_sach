<?php 
class ProductModel{
    public $data ;
    public function __construct(){
        $this->data = connectDB();

    }
    public function getlist (){
        $sql = "SELECT * FROM products ";
        $stmt = $this->data->prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }
}