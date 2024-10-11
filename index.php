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

require_once './controllers/AccountClientsController.php';

require_once './controllers/authorsController.php';
require_once './controllers/testcontroller.php';
require_once './controllers/CustomerOderController.php';




// Require toàn bộ file Models
require_once './models/Student.php';
require_once './models/productModel.php';
require_once './models/AuthClientsModel.php';
require_once './models/contactModel.php';
require_once './models/CartClientModel.php';
require_once './models/MiniCartClientsModel.php';

require_once './models/AccountClientsModel.php';

require_once './models/OrderClientsModel.php';
require_once './models/genresModel.php';
require_once './models/authorsModel.php';
require_once './models/CustomerOderModel.php';



// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new HomeController())->index(),

    //liên hệ
    'contact' => (new ContactController())->formContact(),

    //Sản Phẩm
    'shop-product' => (new ProductController())->getAllSanPham(),
    'detail-product' => (new ProductController())->chitietSanPham(),

    //đăng nhập , đăng kí , đăng xuất
    'login' => (new AuthClientsController())->ShowFormLogin(),
    'checklogin'=>(new AuthClientsController())->CheckLogin(),
    'register'=>(new AuthClientsController())->register(),
    'post-register'=>(new AuthClientsController())->PostRegister(),
    'logout'=>(new AuthClientsController())->logout(),

    //Tìm kiếm
    'search' => (new ProductController())->search(),

    //thêm giỏ hàng
    'addtocart' => (new CartController())->addTocart(),

    //giỏ hàng
    'cart' => (new CartController())->listOnCart(),
    'DeleteProductOnCart' => (new CartController())->listOnCart(),
    
    //thanh toán
    'order' => (new OrderController())->PageOder(),
    'addOder' => (new OrderController())->addOder()(),

    //thông tin người dùng
    'account' => (new AccountClientsController())->listOrder(),
    'editClients' => (new AccountClientsController())->editClients(),
    'postuser' =>(new AccountClientsController())->postuser(),

    //tác giả
    'authors' => (new AuthorsController()) -> Authors(),

    //test
    'test' => (new Testcontroller())->test(),

    //quản lý đơn hàng của khách hàng
    'CustomerOder' =>(new CustomerOderController() )->listOrder(),
    'detailOrder' =>(new CustomerOderController()) ->detailCustomerOder(),
}; 
