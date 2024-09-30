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
}