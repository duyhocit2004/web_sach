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
    public function UpdateAccount($id,$name_user,$email, $phone,$address,$nationality){
        $sql = "UPDATE users SET name_user= :name_user ,email=:email,phone=:phone,address=:address,nationality=:nationality WHERE id = :id";
        $sql = $this->data->prepare($sql);
        $sql ->execute([
            ':id'=> $id,
            ':name_user'=> $name_user,
            ':email'=> $email,
            ':phone'=> $phone,
            ':address'=> $address,
            ':nationality'=> $nationality,

        ]);
        return true;

    }
}