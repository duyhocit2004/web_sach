<?php

class DonhangController{
    public $model;
    public function __construct(){
        $this->model = new DonhangModel();
    }
    public function Danhsachdonhang(){
        $ListDonhang = $this->model->GetlistOder();
        require_once '../admin/view/donhang/listDonhang.php';
    }
    public function Fromsuadonhang(){

    }
    public function Suadonhang(){

    }
    public function Xoadonhang(){

    }
    public function Chitietdonhang() {
        $id = $_GET['id'];
        $list = $this->model->GetDetailOrder($id);
        $list2 = $this->model->GetSanphamOrder($id);
    
        if ($list['payment_status_id'] < 2) {
            $colorAlert = 'primary-emphasis';
        } elseif ($list['payment_status_id'] == 3) {
            $colorAlert = 'success';
        } elseif ($list['payment_status_id'] >= 4) {
            $colorAlert = 'danger';
        }
    
        // Kiểm tra xem $list2 có dữ liệu không
        $tongtienSP = 0; // Gán giá trị ban đầu
        foreach ($list2 as $item) {
            if (isset($item['price'])) {
                $tongtienSP += $item['price']; // Cộng dồn giá trị
            } else {
                // Xử lý khi không có giá (nếu cần)
                echo "Giá không được cung cấp cho sản phẩm.";
            }
        }
    
        // Tính thuế và tổng tiền
        $thuechinh = 9.3; // Thuế suất 9,3%
        $thue = $tongtienSP * ($thuechinh / 100); // Tính thuế
        $shiphang = 200; // Chi phí vận chuyển cố định
        $tong = $tongtienSP + $thue + $shiphang; //tổng tiền
    
        // var_dump( $tong);
        require_once '../admin/view/donhang/detailDonhang.php';
    }
}