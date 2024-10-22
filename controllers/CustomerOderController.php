<?php 
class CustomerOderController{
    public $model ;
    public function __construct(){
        $this->model = new CustomerOderModel();
    }
    public function listOrder(){
        if(isset($_SESSION['user_clients'])){
            $user = $this->model->user($_SESSION['user_clients']['email']);

            //lấy các đơn hàng của người dùn đã đặt
            $list = $this->model->list($user['id']);
            // chi tiết đơn hàng người dùng
            // $listdetail = $this->model->listdetail();

        } 
        // var_dump($user);
         require_once "./view/CustomerOrder.php";
    }

    public function detailCustomerOder(){
        if(isset($_SESSION['user_clients'])){
            // $user = $this->model->user($_SESSION['user_clients']['email']);
            $id = $_GET['id'];
            $listdetail = $this->model->getdetail($id);
            // var_dump($id);
            $listproducts = $this->model->getdetailproduct( $listdetail['id']);
           
            var_dump($listproducts);
           
            
            require_once "./view/DetailCustomerOder.php";
        } 
    }
}