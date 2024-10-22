<?php 
class AccountClientsController {
    public $model;
    public function __construct(){
        $this->model = new AccountClientsModel();
    }
    public function listOrder(){
        if(isset($_SESSION['user_clients'])){
            $user = $this->model->getAccount($_SESSION['user_clients']['email']);
            
        }
        // Tách họ và tên dựa trên dấu cách
    $nameParts = explode(" ", $user['name_user']);

    // Kiểm tra số phần tử và xử lý trường hợp tên chỉ có một phần
    if (count($nameParts) >= 2) {
        $firstname = $nameParts[0];
        $lastname = $nameParts[1];
    } else {
        $firstname = $user['name_user'];
        $lastname = '';
    }

    $account = $user;
    require_once "./view/account/account.php";
    }

    public function editClients(){
        if(isset($_SESSION['user_clients'])){
            $user = $this->model->getAccount($_SESSION['user_clients']['email']);

        }
        // Tách họ và tên dựa trên dấu cách
    $nameParts = explode(" ", $user['name_user']);

    // Kiểm tra số phần tử và xử lý trường hợp tên chỉ có một phần
    if (count($nameParts) >= 2) {
        $firstname = $nameParts[0];
        $lastname = $nameParts[1];
    } else {
        $firstname = $user['name_user'];
        $lastname = '';
    }

    $account = $user;
        require_once "./view/account/editAccount.php";

    }
    public function postuser(){
        // var_dump($_POST);die();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // lấy thông tin người dùng nhập vào form
              $id = $_GET['id'];
              $firtname = $_POST['firtname']; 
              $lastname = $_POST['lastname'];
              $name_user = $firtname . $lastname;

              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $address = $_POST['address'];
              $avatar = $_FILES['avatar'];
              $nationality = $_POST['nationality'];
              
              // cập nhật thông tin ngươid dùng nhập vào form
              $password = $_POST['password'];
              $new_password = $_POST['new_password'];
              $confirm_password = $_POST['confirm_password'];

              
              if(isset($_SESSION['user_clients'])){
                $this->model->UpdateAccount($id,$name_user,$email, $phone,$address,$nationality);

                session_unset();
                header("Location: " . BASE_URL . '?act=login');
                exit();
              }
                
            }else{
                header("Location :" .BASE_URL.'?act=account');
                exit();

            }




        }
       
    }