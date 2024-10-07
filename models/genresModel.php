<?php 
 class GenresModel {
    public $model ;

    public function __construct(){
        $this -> model = connectDB();
    }

    public function getAllGenres(){
        $sql = 'SELECT * FROM genres';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

}