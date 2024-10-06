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
 }