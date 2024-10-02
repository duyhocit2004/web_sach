<?php

class HomeController
{
    public $modelSanPham;

    public function __construct(){
        $this->modelSanPham = new ProductModel();
    }

    public function index()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once "./view/home.php";
    }

    public function chitietSanPham() {
        $id = $_GET['id'];
        $sanpham = $this->modelSanPham->getDetailSanPham($id);

        if ($sanpham) {
            require_once './view/detaliProduct.php';
        } else {
            header("Location: " . BASE_URL );
            exit();
        }


    }
}