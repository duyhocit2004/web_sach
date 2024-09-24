<?php 
class TaikhoanModel {
    public $data ;
    public function __construct(){
        $this->data = connectDB();
    }

    public function getall(){
        $sql = "SELECT *FROM users ";
        $stmt = $this->data->prepare($sql);
        $stmt->execute();
        return  $stmt->fetchAll();
    }
    public function GetListRoleAdmin(){
        // lấy danh sách có những tài khoản có role là 1 (admin)
        $sql = "SELECT users.*, role.role AS id_name 
        FROM users 
        INNER JOIN role ON users.id_role = role.id 
        WHERE role.id = 1";
        $stmt= $this->data->prepare($sql);
        $stmt->execute();
        return  $stmt->fetchAll();
    }

    public function GetListRoleClients(){
        // lấy danh sách có những tài khoản có role là 1 (clients)
        $sql = "SELECT users.*, role.role AS id_name 
        FROM users 
        INNER JOIN role ON users.id_role = role.id 
        WHERE role.id = 2";
          $stmt = $this->data->prepare($sql);
          $stmt ->execute();
         return  $stmt->fetchAll();
    }
    public function GetListRole(){
        // lấy tất cả danh sách role để insert vô users
        // $sql = "SELECT users.*, role.role AS role_name 
        // FROM users 
        // INNER JOIN role ON users.id_role = role.id";
        $sql = "SELECT * FROM role";
            $stmt = $this->data->prepare($sql);
            $stmt ->execute();  
        return $stmt->fetchAll();
    }

   

    public function addTaikhoan($name,$password,$email,$phone,$avatar,$nationality,$address,$role){
        $sql = "INSERT INTO users (name_user,password,email,phone,avatar,nationality,address,id_role) VALUES  (:name,:password,:email,:phone,:avatar,:nationality,:address,:role)";
        $stmt=$this->data->prepare($sql);
        $stmt -> execute([
            ':name'=>$name,
            ':password'=>$password,
            ':email'=>$email,
            ':phone'=>$phone,
            ':avatar'=>$avatar,
            ':nationality'=>$nationality,
            ':address'=>$address,
            ':role'=>$role,
        ]);
    }
    public function GetDetailTaikhoan($id){
        $sql = "SELECT * FROM users WHERE id=$id";
        $stmt = $this->data->prepare($sql);
        $stmt -> execute();
        return $stmt->fetch();
    }
    public function Updatetaikhoan($name,$password,$email,$phone,$avatar,$nationality,$address,$role,$id){
        $sql = "UPDATE users SET name_user=:name,password=:password,email=:email,phone=:phone,avatar=:avatar,nationality=:nationality,address=:address,id_role=:role WHERE id =:id";
        $stmt=$this->data->prepare($sql);
        $stmt -> execute([
            ':name'=>$name,
            ':password'=>$password,
            ':email'=>$email,
            ':phone'=>$phone,
            ':avatar'=>$avatar,
            ':nationality'=>$nationality,
            ':address'=>$address,
            ':role'=>$role,
            ':id'=>$id,
        ]);
        return true;
    }
    public function DestroyAccount($id){
        $sql = 'DELETE FROM users WHERE id = :id';
        $stmt = $this -> data -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        return true;
    }
}