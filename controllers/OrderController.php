<?php
 class OrderController{
    public $model ;
    public $model1;
    public function __construct(){
        $this ->model = new OrderClientsModel();
        $this->model1 = new CartClientModel();


    }
    public function PageOder(){
        if(isset($_SESSION['user_clients'])){
            $user = $this->model -> checkuserorder($_SESSION['user_clients']['email']);
            $cart = $this->model1->getFromId($user['id']);
            if(!$cart){
                        
                $cart_id = $this->model1->addCart($user['id']);
                $cart = ['id' => $cart_id];
                $chitiet = $this->model1->listcart($cart['id']);

            }else{
                $chitiet = $this->model1->listcart($cart['id']);
            }
            if(!isset($_SESSION['user_clients'])){
                header("Location: " . BASE_URL . '?act=login');
                exit();
            }
            print_r($user);
            $method = $this->model->GetMethod();
            $user1 = $user;
            require_once "./view/order.php";
        }
        
    }
     public function PostOrder(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $recipient_name = $_POST['name_user'];
            $recipient_email = $_POST['recipient_email'];
            $recipient_phone = $_POST['recipient_phone'];
            $recipient_address = $_POST['recipient_address'];
            $note = $_POST['ordernote'];
            $sum_price = $_POST['sum_price'];
            $payment_method = $_POST['payment_method'];
            $order_date = date('y-m-d' );
            $payment_status_id = 1;
            $OrderID = "DH" . rand(2000,3000000);
            // var_dump($ngay_dat);die;

            $user = $this->model->checkuserorder($_SESSION['user_clients']['email']);
            $id_nguoi_dung = $user['id'];
            // var_dump($id_nguoi_dung);

          $this->model->addOrder($id_nguoi_dung,
          $recipient_name,
          $recipient_email,
          $recipient_phone,
          $recipient_address,
          $note,
          $payment_method,
          $order_date,
          $payment_status_id,
           $OrderID);
        }
        header("Location :" . BASE_URL . '?act=cart');
     }
 }