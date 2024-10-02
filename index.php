<?php 
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ


// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/productController.php';
require_once './controllers/AuthClientsController.php';
require_once './controllers/contactController.php';


// Require toàn bộ file Models
require_once './models/Student.php';
require_once './models/productModel.php';
require_once './models/AuthClientsModel.php';
require_once './models/contactModel.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new HomeController())->index(),

    //liên hệ
    'contact' => (new ContactController())->formContact(),

    //Sản Phẩm
    'detail-product' => (new HomeController())->chitietSanPham(),

    'login' => (new AuthClientsController())->ShowFormLogin(),
    // 'checklogin'=>(new AuthClientsController())->CheckLogin(),
    'register'=>(new AuthClientsController())->register(),
    // 'post-register'=>(new AuthClientsController())->PostRegister(),
    // 'logout'=>(new AuthClientsController())->logout(),
};