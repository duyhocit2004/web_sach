<?php 
 class TheloaiModel {
    public $model ;

    public function __construct(){
        $this -> model = connectDB();
    }

    public function getAllTheLoai(){
        $sql = 'SELECT * FROM genres';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

    public function insertTheLoai($name){
        $sql = 'INSERT INTO genres (name)
            VALUES(:name)
        ';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':name' => $name,
        ]);
        return true;
    }

    public function getDetailTheLoai($id){
        $sql = 'SELECT * FROM genres WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        return $stmt -> fetch();
    }

    public function updateTheLoai($id, $name){
        $sql = 'UPDATE genres SET name= :name WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
            ':name' => $name,
        ]);
        return true;
    }

    public function distroyTheLoai($id){
        $sql = 'DELETE FROM genres WHERE id = :id';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        return true;
    }
 }

