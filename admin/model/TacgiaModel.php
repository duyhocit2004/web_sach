<?php 
 class DanhMucModel {
    public $model ;

    public function __construct(){
        $this -> model = connectDB();
    }

    public function getAllDanhMuc(){
        $sql = 'SELECT * FROM authors';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

    public function insertDanhMuc($name, $img_author, $bio){
        $sql = 'INSERT INTO authors (name, img_author, bio)
            VALUES(:name, :img_author, :bio)
        ';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':name' => $name,
            ':img_author' => $img_author,
            ':bio' => $bio,
        ]);
        return $this->model->lastInsertId();
    }

    public function getDetailDanhMuc($id){
        $sql = 'SELECT * FROM authors WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id
        ]);
        return $stmt -> fetch();
    }

    public function updateDanhMuc($id, $name, $img_author, $bio){
        $sql = 'UPDATE authors SET name= :name, img_author= :img_author, bio= :bio WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
            ':name' => $name,
            ':img_author' => $img_author,
            ':bio' => $bio
        ]);
        return true;
    }

    public function distroyDanhMuc($id){
        $sql = 'DELETE FROM authors WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        return true;
    }
 }

