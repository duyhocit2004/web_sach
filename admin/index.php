<?php 

session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ
// CheckLoginAdmin();
// Require toàn bộ file Controllers
require_once '../admin/controller/SanphamController.php';
require_once '../admin/controller/TacgiaController.php';
require_once '../admin/controller/AuthController.php';
require_once '../admin/controller/TheloaiController.php';


// Require toàn bộ file Models
require_once '../admin/model/SanphamModel.php';
require_once '../admin/model/TacgiaModel.php';
require_once '../admin/model/TheLoaiModel.php';
require_once '../admin/model/AuthModel.php';


// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => ( new SanphamController()) ->danhsachSanPham(),
    
    //route danh muc tac gia
    'danh-muc' => ( new TacgiaController()) ->danhMucTacGia(),
    'form-them-danh-muc' => ( new TacgiaController()) ->formAddTacGia(),
    'them-danh-muc' => ( new TacgiaController()) ->postAddTacGia(),
    'form-sua-danh-muc' => ( new TacgiaController()) ->formEditTacGia(),
    'sua-danh-muc' => ( new TacgiaController()) ->postEditTacGia(),

    'xoa-danh-muc' => ( new TacgiaController()) ->deleteDanhMuc(),

    //route thể loại
    'the-loai' => ( new TheLoaiController()) ->danhMucTheLoai(),
    'form-them-the-loai' => ( new TheLoaiController()) ->formAddTheLoai(),
    'them-the-loai' => ( new TheLoaiController()) ->postAddTheLoai(),
        // 'form-sua-the-loai' => ( new TheLoaiController()) ->formEditTacGia(),
        // 'sua-the-loai' => ( new TheLoaiController()) ->postEditTacGia(),
        // 'xoa-the-loai' => ( new TheLoaiController()) ->deleteDanhMuc(),


    //login vaf register
    'show-from-login' => (new AuthController())->fromlogin(),
    'from-login' => (new AuthController())->login(),
    'logout' => (new AuthController())->logout(),
    
    //route quan ly san pham
    'products' => ( new SanPhamController()) ->danhsachSanPham(),
    'form-them-san-pham' => ( new SanPhamController()) ->formAddSanPham(),
    'them-san-pham' => ( new SanPhamController()) ->postAddSanPham(),   
    'form-sua-san-pham' => ( new SanPhamController()) ->formEditSanPham(),
    'sua-san-pham' => ( new SanPhamController()) ->postEditSanPham(),
    'xoa-san-pham' => ( new SanPhamController()) ->deleteSanPham(),
};