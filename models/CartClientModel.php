<?php 
class CartClientModel {

  public $data;
  public function __construct(){
    $this -> data = connectDB();
  }
  public function checkuser($email) {
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $this->data->prepare($sql);
    $stmt->execute([
        "email" => $email,
    ]);

     
    return $stmt->fetch(); // Return null if no user is found
}
  public function getFromId($id){
    $sql = "SELECT * FROM shopping_cart WHERE user_id = :user_id";
    $stmt = $this->data->prepare($sql);
    $stmt->execute([
        "user_id" => $id,
    ]);
    return $stmt ->fetch();
  }
  public function detail_cart($id){
    $sql = "SELECT * FROM shopping_cart_details WHERE shopping_cart_id = :shopping_cart_id";
    $stmt = $this->data->prepare($sql);
    $stmt->execute([
        "shopping_cart_id" => $id,
    ]);
    return $stmt ->fetchAll();
  }
   public function addCart($id){
      $sql = "INSERT INTO shopping_cart (user_id) VALUES (:id)";
      $stmt = $this->data->prepare($sql);
      $stmt -> execute([
        ':id' => $id
      ]);
      return $this->data->lastInsertId();
   }
   public function Update_quality($Cart_detail,$newquality,$id_product){
    $sql = "UPDATE shopping_cart_details SET quantity = :quantity  WHERE shopping_cart_id = :id_cart AND product_id =:product_id     ";
    $stmt = $this->data->prepare($sql);
    $stmt -> execute([
      "quantity" => $newquality,
      "id_cart" => $Cart_detail,
      "product_id" =>$id_product,
    ]);
    return true;
   }
   public function addDetailProduct($Cart_detail,$newquality,$id_product){
    $sql = "INSERT INTO shopping_cart_details (shopping_cart_id,quantity,product_id) VALUES (:Cart_detail , :newquality,:id_product)";
    $stmt = $this->data->prepare($sql);
    $stmt -> execute([
      ':Cart_detail' => $Cart_detail,
      ':newquality' => $newquality,
      ':id_product' => $id_product,
    ]);
    return true;

   }

   public function listcart($id){
    $sql = "SELECT shopping_cart_details.*,products.book_name ,products.image,products.price
    FROM shopping_cart_details
    INNER JOIN products ON shopping_cart_details.product_id = products.id 
      WHERE shopping_cart_details.shopping_cart_id = :id ";
    $stmt = $this->data->prepare($sql);
    $stmt ->execute([
      ':id' => $id,
    ]);
    return $stmt->fetchAll() ;
   }
   
}