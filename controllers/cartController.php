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
                $cart = $this->model->getFromId($user['id']);

                // lấy sản phẩm từ giỏ hàng của người dùng
                    $id_product = $_GET['id'];
                    $quality = $_POST['quantity']; 

                    // unset($_SESSION['cart'] );
                    $product = $this->model->getproducts($id_product);
                    // Duyệt qua giỏ hàng để kiểm tra sản phẩm
                        foreach ($_SESSION['cart'] as &$cartProduct) {
                            if ($cartProduct['product_id'] === $product['id']) {
                                // Nếu sản phẩm đã tồn tại, cộng dồn số lượng
                                $cartProduct['quality'] += $quality;
                                $productExists = true;
                                break; // Dừng vòng lặp
                            }
                        }
                    // Nếu sản phẩm chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
                        if (!$productExists) {
                            $_SESSION['cart'][] = [
                                'product_id' => $product['id'],
                                'book_name' => $product['book_name'],
                                'price' => $product['price'],
                                'quality' => $quality,
                                'image' => $product['image'],
                            ];
                        }




                    // var_dump( $_SESSION['cart']);die;
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