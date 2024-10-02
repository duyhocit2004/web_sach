<?php 
class AuthClientsController{
   public $model ;
   public function __construct(){
    $this->model = new AuthClientsModel;
   }
    public function ShowFormLogin(){
        require_once "./view/auth/login.php";
    }
    public function CheckLogin(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            // var_dump($email,$password);die();
           
            $user = $this->model->checklogin($email,$password);
            if($user == $email){
                header("Location: " . BASE_URL);
                exit();
            }else{
                require_once "./view/auth/login.php";
                exit();
            }
        }
    }
    public function register(){
        require_once "./view/auth/register.php";
    }
    public function PostRegister(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name_user = $_POST['name_user'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->AddCount($name_user,$email,$password);
            // var_dump($user);die();
            // $error = [];    
            // if(empty($user['name'] === '')){
            //     $error['name'] = 'bạn vui lòng nhập tên';
            // }
            // if(empty($user['password']) === ''){
            //     $error['password'] = 'bạn vui lòng nhập mật khẩu';
            // }
            // if(empty($user['email']) === ''){
            //     $error['email'] = 'vui lòng nhập email';
            // }

            // $_SESSION['error'] = $error;

            header("Location: " . BASE_URL .'?act=login');
            exit();
            // if(empty($error)){
               
            // }else{
            //     $_SESSION['flash'] = true;
            //     header('Location :' . BASE_URL .'?act=register');
            //     exit();
            // }  
        }
    }
    public function logout(){
        session_unset();
        header("Location: " . BASE_URL);
    }
}