<?php

class DonhangModel{
    public $db ;
    public function __construct(){
        $this->db = connectDB();
    }
    public function GetlistOder() {
        $sql = "SELECT orders.*, payment_method.payment_method_name as payment_name, payment_status.payment_status as payment_status,users.name_user as name_user
                FROM orders
                INNER JOIN payment_method ON orders.payment_method_id = payment_method.id
                INNER JOIN payment_status ON orders.payment_status_id = payment_status.id
                INNER JOIN users ON orders.user_id = users.id
                ";
    
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function GetDetailOrder($id){
       $sql = "SELECT orders.*,payment_status.payment_status as payment_status FROM orders 
       INNER JOIN payment_status ON orders.payment_status_id = payment_status.id
       WHERE orders.id = :id ";
         $stmt = $this->db->prepare($sql);
         $stmt->execute([
            ':id' => $id
         ]);
         return $stmt->fetch();
    }
    public function GetSanphamOrder($id) {
        $sql = 'SELECT order_details.*, products.book_name 
                FROM order_details
                INNER JOIN products ON order_details.product_id = products.id 
                WHERE order_details.id = :id';
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}