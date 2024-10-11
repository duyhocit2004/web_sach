<?php 
class CustomerOderModel{
    
    public $data;
    public function __construct(){
        $this->data = connectDB();
    }
    
    public function user($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->data->prepare($sql);
        $stmt ->execute([
            ':email' => $email
        ]);
        return $stmt -> fetch();
    }
    public function list(){
        $sql = "SELECT * FROM orders";
        $stmt = $this->data->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll();
    }
    public function listdetail(){
        $sql = "SELECT order_details.*,products.book_name ,products.image,products.price
        FROM order_details
        INNER JOIN products ON order_details.product_id = products.id ";
        // --   WHERE order_details.orders_id = :id 
        $stmt = $this->data->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll();
    }
    public function getdetailproduct($id){
        $sql = "SELECT order_details.*,products.book_name ,products.image,products.price
        FROM order_details
        INNER JOIN products ON order_details.product_id = products.id 
          WHERE order_details.id= :id ";
        $stmt = $this->data->prepare($sql);
        $stmt ->execute([
            ':id'=>$id
        ]);
        return $stmt->fetch();
    }
    public function getdetail($id){
        $sql = "SELECT orders .*, payment_method.payment_method_name , payment_status.payment_status FROM orders
        INNER JOIN payment_status ON orders.payment_status_id = payment_status.id
        INNER JOIN payment_method ON orders.payment_method_id = payment_method.id
         WHERE orders.id = :id";
        $stmt = $this->data->prepare($sql);
        $stmt -> execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }
}