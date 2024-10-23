<?php 
class ProductModel{
    public $model;

    public function __construct(){
        $this->model = connectDB();
    }

    public function getAllProducts() {
        // $sql="SELECT * FROM products";
        $sql = 'SELECT products.*, authors.name, genres.name AS genres_name
        FROM products
        INNER JOIN authors ON products.author_id  = authors.id
        INNER JOIN genres ON products.genre_id = genres.id
        ';
        $stmt = $this->model->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll();
    }
    public function getAllProducts1() {
        // $sql="SELECT * FROM products";
        $sql = 'SELECT products.*, authors.name, genres.name AS genres_name
        FROM products
        INNER JOIN authors ON products.author_id  = authors.id
        INNER JOIN genres ON products.genre_id = genres.id WHERE quantity < 150
        ';
        $stmt = $this->model->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll();
    }

    public function getDetailSanPham($id){
        $sql = 'SELECT products.*, authors.name as author_name , genres.name  as genres_name FROM products 
        INNER JOIN authors ON products.author_id = authors.id
        INNER JOIN genres ON products.genre_id = genres.id
        WHERE products.id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([':id' => $id]);
        return $stmt -> fetch();
    }
    public function searchProducts($keyword) {
        $sql = "SELECT * FROM products WHERE book_name LIKE :keyword";
        $stmt = $this->model->prepare($sql);
        $stmt->execute(['keyword' => '%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getgenner1 (){
        $sql = 'SELECT * FROM products WHERE genre_id = 16';
        $stmt = $this->model->prepare($sql);
        $stmt->execute();
        return $stmt ->fetchAll();
    }
    public function getgenner2 (){
        $sql = 'SELECT * FROM products WHERE genre_id = 12';
        $stmt = $this->model->prepare($sql);
        $stmt->execute();
        return $stmt ->fetchAll();
    }
    public function getgenner3 (){
        $sql = 'SELECT * FROM products WHERE genre_id = 13';
        $stmt = $this->model->prepare($sql);
        $stmt->execute();
        return $stmt ->fetchAll();
    }
    public function getgenner4 (){
        $sql = 'SELECT * FROM products WHERE genre_id = 15';
        $stmt = $this->model->prepare($sql);
        $stmt->execute();
        return $stmt ->fetchAll();
    }
  
}