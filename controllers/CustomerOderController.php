<?php 
class CustomerOderController{
    public $model ;
    public function __construct(){
        $this->model = new CustomerOderModel();
    }
    public function listOrder(){
        if(isset($_SESSION['user_clients'])){
            // $user = $this->model->user($_SESSION['user_clients']['email']);

            $list = $this->model->list();
            // var_dump($list);
            $listdetail = $this->model->listdetail();

        } 
        // var_dump($user);
         require_once "./view/CustomerOrder.php";
    }

    public function detailCustomerOder(){
        if(isset($_SESSION['user_clients'])){
            $user = $this->model->user($_SESSION['user_clients']['email']);
            $id = $_GET['id'];
            // var_dump($id);
            $list = $this->model->getdetailproduct( $id);
           
            var_dump($list);
            $listdetail = $this->model->getdetail($list['orders_id']);
            
            require_once "./view/DetailCustomerOder.php";
        } 
    }
}