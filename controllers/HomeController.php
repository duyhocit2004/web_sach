<?php

class HomeController
{
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new ProductModel();
    }

    public function index()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once "./view/home.php";
    }

    public function chitietSanPham()
    {
        $id = $_GET['id'];
        $sanpham = $this->modelSanPham->getDetailSanPham($id);

        if ($sanpham) {
            require_once './view/detaliProduct.php';
        } else {
            header("Location: " . BASE_URL);
            exit();
        }
    }

    public function search()
    {
        $keyword = $_POST['keyword'] ?? ''; // Lấy từ khóa tìm kiếm từ URL
        $listSanPham = $this->modelSanPham->searchProducts($keyword); // Tìm kiếm sản phẩm
        if ($listSanPham) {
            require_once './view/search.php';
        } else {
            header("Location: " . BASE_URL);
            exit();
        }
    }
}