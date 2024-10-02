<?php
class ProductController{
    public $model;
    public function __construct(){
        $this->model = new ProductModel();
    }
    public function chitietSanPham() {
        
        $id = $_GET['id'];
        $sanpham = $this->model->getDetailSanPham($id);

        if ($sanpham) {
            require_once './view/detaliProduct.php';
        } else {
            header("Location: " . BASE_URL );
            exit();
        }


    }
}