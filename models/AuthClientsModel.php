<?php 
class AuthClientsModel{
   public $data ;
   public function __construct(){
    $this->data = connectDB();
   }
    public function checklogin($email,$password){
        $sql = 'SELECT * FROM users WHERE email = :email';
        $stmt = $this->data->prepare($sql);
        $stmt ->execute(
        [
            ':email' => $email,

        ]
        );
        $user = $stmt -> fetch();
        if($user && $password == $user['password']){
            if($user['id_role'] == 2){

                $_SESSION['user_clients'] =[
                    'email' => $user['email'],
                    'password' => $user['password'],
                    'avatar' => $user['avatar'],
                ];
                // echo ($user['email']);die();
                return true;
            }else{
                header("Location : " . BASE_URL);
                exit();
            }
        }else{
            // header('Location : ' . BASE_URL .'?act=login');
            return "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng nhập lại.');</script>";
        }

    }
    public function AddCount($name_user,$email,$password){
        $sql = "INSERT INTO users (name_user, email , password , id_role) VALUES( :name_user , :email , :password , :role) ";
        $stmt = $this->data->prepare($sql);
        $stmt -> execute([
            ':name_user' =>$name_user,
            ':email' => $email,
            ':password' => $password,
            ':role' => 2,
        ]);
        return true;
        }
}