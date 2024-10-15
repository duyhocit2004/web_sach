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
            
            $method = $this->model->GetMethod();
            $user1 = $user;

        }
        require_once "./view/order.php";
    }
     public function addOder(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Check for expected POST variables
            $recipient_name = $_POST['name_user'] ?? '';
            $recipient_email = $_POST['recipient_email'] ?? '';
            $recipient_phone = $_POST['recipient_phone'] ?? '';
            $recipient_address = $_POST['recipient_address'] ?? '';
            $note = $_POST['ordernote'] ?? '';
            $payment_method = $_POST['payment_method'] ?? '';
            $order_date = date('Y-m-d');
            $payment_status_id = 1;
            $OrderID = "DH" . rand(2000, 3000000);
        
            // Check user
            $user = $this->model->checkuserorder($_SESSION['user_clients']['email']);
            $id_nguoi_dung = $user['id'] ?? null;

        
            // Add order
            // var_dump($_POST);die();
            $cart = $this->model->addOrder(
                $id_nguoi_dung,
                $recipient_name,
                $recipient_email,
                $recipient_phone,
                $recipient_address,
                $note,
                $payment_method,
                $order_date,
                $payment_status_id,
                $OrderID
            );
        
            // thêm chi tiết giỏ hàng
                // var_dump($products);
               foreach ($_SESSION['cart'] as $item){
                $sum = $item['price'] * $item['quantity'];
                $oder= $this->model->AdddetailOder($cart, $item['product_id'] , $item['quantity'],$item['price'] ,$sum );
               }

            //    var_dump($oder);die();
                
        }
            
               
        header("Location: " . BASE_URL .'?act=CustomerOder');
        exit();
        }
        

     }