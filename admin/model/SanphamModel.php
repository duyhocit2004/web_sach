<?php
class SanphamModel
{
    public $model;

    public function __construct()
    {
        $this->model = connectDB();
    }

    public function getAllSanPham()
    {
        $sql = 'SELECT products.*, authors.name, genres.name AS genres_name
        FROM products
        INNER JOIN authors ON products.author_id  = authors.id
        INNER JOIN genres ON products.genre_id = genres.id
        ';
        $stmt = $this->model->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function insertSanPham($book_name, $title, $author_id, $genre_id, $published_date, $price, $description, $image, $quantity)
    {
        $sql = 'INSERT INTO products (book_name, title, author_id, genre_id, published_date, price, description, image, quantity)
            VALUES(:book_name, :title, :author_id, :genre_id, :published_date, :price, :description, :image, :quantity)
        ';
        $stmt = $this->model->prepare($sql);
        $stmt->execute([
            ':book_name' => $book_name,
            ':title' => $title,
            ':author_id' => $author_id,
            ':genre_id' => $genre_id,
            ':published_date' => $published_date,
            ':price' => $price,
            ':description' => $description,
            ':image' => $image,
            ':quantity' => $quantity,
        ]);

        //lấy id sản phẩm vừa thêm
        return $this->model->lastInsertId();
    }




    public function updateSanPham($sanpham_id, $book_name, $title, $author_id, $genre_id, $published_date, $price, $description, $image, $quantity){
        $sql = 'UPDATE products SET book_name= :book_name, title= :title, author_id= :author_id, genre_id= :genre_id, published_date= :published_date, price= :price, description= :description, image= :image, quantity= :quantity
         WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $sanpham_id,
            ':book_name' => $book_name,
            ':title' => $title,
            ':author_id' => $author_id,
            ':genre_id' => $genre_id,
            ':published_date' => $published_date,
            ':price' => $price,
            ':description' => $description,
            ':image' => $image,
            ':quantity' => $quantity

        ]);
        return true;
    }


    public function getDetailSanPham($id){
        $sql = 'SELECT * FROM products WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([':id' => $id]);
        return $stmt -> fetch();
    }

    public function getAlbumSanPham($id){
        $sql = 'SELECT * FROM image_products WHERE product_id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([':id' => $id]);
        return $stmt -> fetchAll();
    }


    public function distroySanPham($id){
        $sql = 'DELETE FROM products WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        return true;
    }

}

