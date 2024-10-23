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
        $listSanPham = $this->modelSanPham->getAllProducts();
        $listSanPham2 = $this->modelSanPham->getAllProducts1();
        $listgerne1 = $this->modelSanPham->getgenner1();
        $listgerne2 = $this->modelSanPham->getgenner2();
        $listgerne3 = $this->modelSanPham->getgenner3();
        $listgerne4 = $this->modelSanPham->getgenner4();
        
        
        // print_r($listgerne1);
        // die();
        require_once "./view/home.php";
    }


    
 
}