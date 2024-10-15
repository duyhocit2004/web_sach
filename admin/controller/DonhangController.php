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
        $id = $_GET['id'];
        $list = $this->model->GetDetailOrder($id);
        $status = $this->model->GetPaymentMethodStatus();
        $method = $this->model->GetPaymentMethod();
        // var_dump($status,$method);
        require_once '../admin/view/donhang/editDonhang.php';
    }
    public function Suadonhang(){
        $recipient_name=$_POST['recipient_name'];
        $recipient_email=$_POST['recipient_email'];
        $recipient_phone=$_POST['recipient_phone'];
        $recipient_address=$_POST['recipient_address'];
        $order_date=$_POST['order_date'];
        $note=$_POST['note'];
        $payment_method_name=$_POST['payment_method_name'];
        $payment_status=$_POST['payment_status'];
        $id=$_POST['id'];

        $request = $this->model->GetDonhang($recipient_name,$recipient_email,$recipient_phone,$recipient_address,$order_date,$note,$payment_method_name,$payment_status,$id);
        header("Location: " . BASE_URL_ADMIN . '?act=don-hang');
        exit();
    }
    public function Xoadonhang(){
        $id = $_GET['id'];
        $donhang = $this->model->getDetailDonHang($id);

        if ($donhang) {
            $this -> model -> getDelete($id);
        }
        header("Location: " . BASE_URL_ADMIN . '?act=don-hang');
        exit();
    }
    public function Chitietdonhang() {
        $id = $_GET['id'];
        // lấy thông tin từ giỏ hàng
        $list = $this->model->GetDetailOrder($id);
        // lấy các danh sách các sản phẩm đã đặt của đơn hàng ở bảng chi tiết
        $list2 = $this->model->GetSanphamOrder( $id);
    
        // var_dump($list2);die();
        if ($list['payment_status_id'] < 2) {
            $colorAlert = 'danger-emphasis';
        } elseif ($list['payment_status_id'] == 3) {
            $colorAlert = 'success';
        } elseif ($list['payment_status_id'] >= 4) {
            $colorAlert = 'danger';
        }
    
        // Kiểm tra xem $list2 có dữ liệu không
        $tongtienSP = 0; // Gán giá trị ban đầu
        foreach ($list2 as $item) {
            if (isset($item['sum_price'])) {
                $tongtienSP += $item['sum_price']; // Cộng dồn giá trị
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