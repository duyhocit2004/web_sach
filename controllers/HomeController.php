<?php 

class HomeController {
    public $model ;
    public function __construct(){
        $this->model = new ProductModel();
    }
    public function index(){
        $list = $this->model->getlist();
        require_once "./view/index.php";
        // echo "ddaay laf home";
    }

}