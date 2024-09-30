<?php 
class ProductModel{
    public $model;

    public function __construct(){
        $this->model = connectDB();
    }

    public function getAllSanPham() {
        try {
        $sql = 'SELECT products.*, authors.name, genres.name AS genres_name
        FROM products
        INNER JOIN authors ON products.author_id  = authors.id
        INNER JOIN genres ON products.genre_id = genres.id
        ';
        $stmt = $this->model->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }
  
}