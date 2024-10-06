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

    public function addOrder(
    $id_nguoi_dung,
    $recipient_name,
    $recipient_email,
    $recipient_phone,
    $recipient_address,
    $note,
    $payment_method,
    $order_date,
    $payment_status_id,
    $OrderID){
        $sql = "INSERT INTO orders (user_id,recipient_name,recipient_email,recipient_phone,recipient_address,note,order_date,payment_method_id,payment_status_id, Order_ID)
        VALUES (:user_id,:recipient_name,:recipient_email,:recipient_phone,:recipient_address,:note,:order_date,:payment_method,:payment_status_id, :Order_ID)";
        $stmt = $this->data->prepare($sql);
        $stmt -> execute([
            ':user_id' => $id_nguoi_dung,
            ':recipient_name' => $recipient_name,
            ':recipient_email' => $recipient_email,
            ':recipient_phone' => $recipient_phone,
            ':recipient_address' => $recipient_address,
            ':order_date' => $order_date,
            ':note' =>$note,
            ':payment_method' => $payment_method,
            ':payment_status_id' => $payment_status_id,
            ':Order_ID' => $OrderID


        ]);
        return $this->data ->lastInsertId();
    }
}