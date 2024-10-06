<?php 
class OrderClientsModel {
    public $data ;
    public function __construct(){
        $this -> data = connectDB();
    }

    public function checkuserorder($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->data->prepare($sql);
        $stmt->execute([
            "email" => $email,
        ]);
    
         
        return $stmt->fetch(); 
    }
    public function GetMethod() {
        $sql = "SELECT * FROM payment_method ";
        $stmt = $this->data -> prepare($sql);
        $stmt -> execute();
        return $stmt ->fetchAll();
    }
}