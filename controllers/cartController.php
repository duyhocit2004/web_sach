<?php 
 class CartController {
    public $model ;
    public function __construct(){
        $this->model = new CartClientModel();
    }
    public function addToCart() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_SESSION['user_clients'])) {
                $user = $this->model->checkuser($_SESSION['user_clients']['email']);
                // var_dump($user['id']);die;
                // lấy sản phẩm từ giỏ hàng của người dùng
                
                $id_product = $_GET['id'];
                $quality = $_POST['quantity'];

                $cart = $this->model->getFromId($user['id']);
                // var_dump( $cart['id']);die;
                if(!$cart){
                    $cart_id = $this->model->addCart($user['id']);
                    $cart = ['id' => $cart_id];
                    $chitiet = $this->model->detail_cart($cart['id']);

                }else{
                    $chitiet = $this->model->detail_cart($cart['id']);
                }
                // chi tiết giỏ hàng

                $checkproduct = false ;
                foreach ($chitiet as  $detail) {
                    
                    if($detail['product_id'] == $id_product ){
                        $newquality = $detail['quantity'] + $quality;
                        $this->model->Update_quality($cart['id'],$newquality,$id_product);
                        $checkproduct= true ;
                        break;
                    }
                }
                if(!$checkproduct){
                    $this->model->addDetailProduct($cart['id'],$quality,$id_product);
                   
                    }
                header("Location: " . BASE_URL . '?act=cart');
                exit();
               
                }else{
                    echo "<script>alert('Bạn chưa đăng nhập');</script>";
                     header("Location: " . BASE_URL . '?act=login');
                        exit();
                }
            } else {
                // chuyển người dùng sang login nếu chưa đăng nhập
                echo "<script>alert('Bạn chưa đăng nhập');</script>";
                header("Location: " . BASE_URL . '?act=login');
                exit();
            }
        }
}