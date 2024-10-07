<?php 

session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once '../admin/controller/SanphamController.php';
require_once '../admin/controller/TacgiaController.php';
require_once '../admin/controller/AuthController.php';
require_once '../admin/controller/TheloaiController.php';
require_once '../admin/controller/TaikhoanController.php';
require_once '../admin/controller/DonhangController.php';
require_once '../admin/controller/MessagerController.php';



// Require toàn bộ file Models
require_once '../admin/model/SanphamModel.php';
require_once '../admin/model/TacgiaModel.php';
require_once '../admin/model/TheLoaiModel.php';
require_once '../admin/model/AuthModel.php';
require_once '../admin/model/TaikhoanModel.php';
require_once '../admin/model/DonhangModel.php';
require_once '../admin/model/MessageModel.php';



// Route
$act = $_GET['act'] ?? '/';

if($act !=='show-from-login' && $act !=='login' && $act !=='logout'){
    CheckLoginAdmin();
    
}
// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => ( new TacgiaController()) ->danhMucTacGia(),
    
    //login vs logout
    'show-from-login' => (new AuthController())->fromlogin(),
    'login' => (new AuthController())->login(),
    'logout' => (new AuthController())->logout(),

    //tac gia
    'tac-gia' => ( new TacgiaController()) ->danhMucTacGia(),
    'form-them-tac-gia' => ( new TacgiaController()) ->formAddTacGia(),
    'them-tac-gia' => ( new TacgiaController()) ->postAddTacGia(),
    'form-sua-tac-gia' => ( new TacgiaController()) ->formEditTacGia(),
    'sua-tac-gia' => ( new TacgiaController()) ->postEditTacGia(),
    'xoa-tac-gia' => ( new TacgiaController()) ->deleteDanhMuc(),

    //thể loại
    'the-loai' => ( new TheLoaiController()) ->danhMucTheLoai(),
    'form-them-the-loai' => ( new TheLoaiController()) ->formAddTheLoai(),
    'them-the-loai' => ( new TheLoaiController()) ->postAddTheLoai(),
    'form-sua-the-loai' => ( new TheLoaiController()) ->formEditTheLoai(),
    'sua-the-loai' => ( new TheLoaiController()) ->postEditTheLoai(),
    'xoa-the-loai' => ( new TheLoaiController()) ->deleteTheLoai(),


    //quan ly san pham
    'products' => ( new SanPhamController()) ->danhsachSanPham(),
    'form-them-san-pham' => ( new SanPhamController()) ->formAddSanPham(),
    'them-san-pham' => ( new SanPhamController()) ->postAddSanPham(),   
    'form-sua-san-pham' => ( new SanPhamController()) ->formEditSanPham(),
    'sua-san-pham' => ( new SanPhamController()) ->postEditSanPham(),
    'xoa-san-pham' => ( new SanPhamController()) ->deleteSanPham(),

    // quản lý người dùng
    'tai-khoan' => (new TaikhoanController())->danhsachtaikhoan(),
    'from-them-tai-khoan'=>(new TaikhoanController())->FromThemtaikhoan(),
    'them-tai-khoan'=>(new TaikhoanController())->themtaikhoan(),
    'from-sua-tai-khoan'=>(new TaikhoanController())->FromSuataikhoan(),
    'sua-tai-khoan'=>(new TaikhoanController())->suataikhoan(),
    'xoa-tai-khoan'=>(new TaikhoanController())->Deletetaikhoan(),

    // quản lý đơn hàng
    'don-hang' => (new DonhangController())->Danhsachdonhang(),
    'from-sua-don-hang'=>(new DonhangController())->FromSuadonhang(),
    'sua-don-hang'=>(new DonhangController())->Suadonhang(),
    'xoa-don-hang'=>(new DonhangController())->Xoadonhang(),
    'chitiet-don-hang'=>(new DonhangController())->Chitietdonhang(),

    //thông báo đặt hàng
    
};