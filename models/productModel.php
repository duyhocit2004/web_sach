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

    public function getDetailSanPham($id){
        $sql = 'SELECT * FROM products WHERE id = :id';
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

  
}