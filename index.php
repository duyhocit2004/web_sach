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
require_once './controllers/cartController.php';
require_once './controllers/MinicartController.php';
require_once './controllers/OrderController.php';


// Require toàn bộ file Models
require_once './models/Student.php';
require_once './models/productModel.php';
require_once './models/AuthClientsModel.php';
require_once './models/contactModel.php';
require_once './models/CartClientModel.php';
require_once './models/MiniCartClientsModel.php';
require_once './models/OrderClientsModel.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new HomeController())->index(),

    //liên hệ
    'contact' => (new ContactController())->formContact(),

    //Sản Phẩm
    'detail-product' => (new ProductController())->chitietSanPham(),

    //đăng nhập , đăng kí , đăng xuất
    'login' => (new AuthClientsController())->ShowFormLogin(),
    'checklogin'=>(new AuthClientsController())->CheckLogin(),
    'register'=>(new AuthClientsController())->register(),
    'post-register'=>(new AuthClientsController())->PostRegister(),
    'logout'=>(new AuthClientsController())->logout(),

    //thêm giỏ hàng
    'addtocart' => (new CartController())->addTocart(),

    //giỏ hàng
    'cart' => (new CartController())->listOnCart(),
    'DeleteProductOnCart' => (new CartController())->listOnCart(),
    
    //thanh toán
    'order' => (new OrderController())->PageOder(),
    'postOder' => (new OrderController())->PostOrder(),
}; 