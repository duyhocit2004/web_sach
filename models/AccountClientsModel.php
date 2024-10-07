<?php 
class AccountClientsModel{
    public $data ;
    public function __construct(){
        $this -> data = connectDB();
    }
    public function getAccount($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->data->prepare($sql);
        $stmt ->execute([
            ':email' => $email,
        ]);
        return $stmt -> fetch();
    }
    public function UpdateAccount(){
        
    }
}