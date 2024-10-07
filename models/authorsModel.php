<?php 
 class AuthorsModel {
    public $model ;

    public function __construct(){
        $this -> model = connectDB();
    }

    public function getAllAuthors(){
        $sql = 'SELECT * FROM authors';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }
}