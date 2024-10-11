<?php 
 class CartController {
    public $model ;
    public function __construct(){
        $this->model = new CartClientModel();
    }
    public function addToCart() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // kiểm tra session giỏ hàng có tồn tại không
            if(!isset($_SESSION['cart'] )){
                $_SESSION['cart'] = [];
            }
            
            
            if (isset($_SESSION['user_clients'])) {
                $user = $this->model->checkuser($_SESSION['user_clients']['email']);
                // var_dump($user['id']);die;
                // lấy sản phẩm từ giỏ hàng của người dùng

                    $cart = $this->model->getFromId($user['id']);
                    $_SESSION['user']=$cart;


                    // var_dump( $_SESSION['cart']);die;
                    if(!$cart){
                        $cart_id = $this->model->addCart($user['id']);
                        $cart = ['id' => $cart_id];
                        $chitiet = $this->model->detail_cart($cart['id']);

                    }else{
                        $chitiet = $this->model->detail_cart($cart['id']);
                    }
                // chi tiết giỏ hàng
                    $id_product = $_GET['id'];
                    $quality = $_POST['quantity'];  

                    
                    $checkproduct = false ;
                        foreach ($chitiet as  $detail) {       
                            if($detail['product_id'] == $id_product ){
                                $newquality = $detail['quantity'] + $quality;
                                $this->model->Update_quality($cart['id'],$newquality,$id_product);
                                $checkproduct = true ;
                            }
                            
                            
                        }
                        if(!$checkproduct){
                            $this->model->addDetailProduct($cart['id'],$quality,$id_product);
                        
                            }
                    header("Location: " . BASE_URL . '?act=cart');
                    exit();
               
                }else{
                     header("Location: " . BASE_URL . '?act=login');
                        exit();
                }
            } else {
                // chuyển người dùng sang login nếu chưa đăng nhập
                header("Location: " . BASE_URL . '?act=login');
                exit();
            }
        }
    public function listOnCart(){
        if(isset($_SESSION['user_clients'])){
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = [];
            }

            $user = $this->model -> checkuser($_SESSION['user_clients']['email']);

            $cart = $this->model->getFromId($user['id']);
            if(!$cart){
                        
                $cart_id = $this->model->addCart($user['id']);
                $cart = ['id' => $cart_id];
                $chitiet = $this->model->listcart($cart['id']);


            }else{
                $chitiet = $this->model->listcart($cart['id']);
            }
            // var_dump($chitiet);die();



                $_SESSION['cart'] = $chitiet;

            require_once "./view/Cart.php";
        }
        if(!isset($_SESSION['user_clients'])){
            header("Location: " . BASE_URL . '?act=login');
            exit();
        }
        // var_dump($chitiet);
       
    }
    public function DeleteProductOnCart(){

    }

    
}