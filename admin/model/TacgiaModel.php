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

    public function insertDanhMuc($name){
        $sql = 'INSERT INTO authors (name)
            VALUES(:name)
        ';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':name' => $name,
        ]);
        return true;
    }

    public function getDetailDanhMuc($id){
        $sql = 'SELECT * FROM authors WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        return $stmt -> fetch();
    }

    public function updateDanhMuc($id, $name){
        $sql = 'UPDATE authors SET name= :name WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
            ':name' => $name,
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

