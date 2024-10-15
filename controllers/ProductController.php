<?php
class ProductController{
    public $modelProduct;
    public $modelGenres;
    public function __construct(){
        $this->modelProduct = new ProductModel();

        $this->modelGenres = new GenresModel();
    }

    public function getAllSanPham() {
            $listProducts = $this->modelProduct->getAllProducts();
            $listGenres = $this->modelGenres->getAllGenres();
            
            require_once "./view/shopProduct.php";
    }

    public function chitietSanPham() {
        
        $id = $_GET['id'];
        $sanpham = $this->modelProduct->getDetailSanPham($id);
        $listProducts = $this->modelProduct->getAllProducts();
        $listGenres = $this->modelGenres->getAllGenres();
            

        if ($sanpham) {
            require_once './view/detaliProduct.php';
        } else {
            header("Location: " . BASE_URL );
            exit();
        }
    }

    public function search()
    {
        $listGenres = $this->modelGenres->getAllGenres();
        $keyword = $_POST['keyword'] ?? ''; // Lấy từ khóa tìm kiếm từ URL
        $listSanPham = $this->modelProduct->searchProducts($keyword); // Tìm kiếm sản phẩm
        if ($listSanPham) {
            require_once './view/search.php';
        } else {
            header("Location: " . BASE_URL);
            exit();
        }
    }
}