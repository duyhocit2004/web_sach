<?php 
class TaikhoanController{
    public $model;
    public function __construct(){
        $this->model = new TaikhoanModel();
    }
    public function danhsachtaikhoan(){
        $listAdmin = $this->model->GetListRoleAdmin();
        $listClient = $this->model->GetListRoleClients();
        require_once '../admin/view/users/listTaikhoan.php';
    }
    public function FromThemtaikhoan(){
        $list= $this->model->GetListRole();
        require_once '../admin/view/users/addTaikhoan.php';
    }
    public function themtaikhoan(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $avatar = $_FILES['avatar'];
            $nationality = $_POST['nationality'];
            $address = $_POST['address'];
            $role = $_POST['id_role'];

            $thumble = uploadFile($avatar,'./uploads/user/');

            $error=[];
            if(empty($name) == 0 ){
                $error['name'] = " vui lòng nhập tên";
            }
            if(empty($password) == 0 ){
                $error['password'] = " vui lòng nhập tên";
            }
            if(empty($email) == 0 ){
                $error['email'] = " vui lòng nhập tên";
            }
            if(empty($phone) == 0 ){
                $error['phone'] = " vui lòng nhập tên";
            }
            if(empty($avatar) == 0 ){
                $error['avatar'] = " vui lòng nhập tên";
            }
            if(empty($nationality) == 0 ){
                $error['nationality'] = " vui lòng nhập tên";
            }
            if(empty($address) == 0 ){
                $error['address'] = " vui lòng nhập tên";
            }
            if(empty($role) == 0 ){
                $error['role'] = " vui lòng nhập tên";
            }
            $_SESSION['error'] = $error;
            $this->model->addTaikhoan($name,$password,$email,$phone,$thumble,$nationality,$address,$role);
            header("Location : ".BASE_URL_ADMIN.'?act=tai-khoan');
            exit();
        }
    }
    public function FromSuataikhoan(){
        // lấy danh sách tài khoản
        $list2= $this->model->GetListRole();
        $id = $_GET['id'];
        $list1 = $this->model->GetDetailTaikhoan($id);
        require_once "../admin/view/users/editTaikhoan.php";

    }
    public function suataikhoan(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name_user'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $avatar = $_FILES['avatar'];
            $nationality = $_POST['nationality'];
            $address = $_POST['address'];
            $role = $_POST['id_role'];
     
            $error=[];
            if(empty($name) == 0 ){
                $error['name'] = " vui lòng nhập tên";
            }
            if(empty($password) == 0 ){
                $error['password'] = " vui lòng nhập tên";
            }
            if(empty($email) == 0 ){
                $error['email'] = " vui lòng nhập tên";
            }
            if(empty($phone) == 0 ){
                $error['phone'] = " vui lòng nhập tên";
            }
            if(empty($avatar) == 0 ){
                $error['avatar'] = " vui lòng nhập tên";
            }
            if(empty($nationality) == 0 ){
                $error['nationality'] = " vui lòng nhập tên";
            }
            if(empty($address) == 0 ){
                $error['address'] = " vui lòng nhập tên";
            }
            if(empty($role) == 0 ){
                $error['role'] = " vui lòng nhập tên";
            }
            $_SESSION['error'] = $error;

            $id = $_GET['id'];
            $taikhoan = $this->model->GetDetailTaikhoan($id);
            $old_file = $taikhoan['avatar'];

            if (isset($avatar) && $avatar['error'] == UPLOAD_ERR_OK) {
                // Upload ảnh mới lên
                $new_file = uploadFile($avatar, './uploads/procuts');

                if(!empty($old_file)) { //Nếu có ảnh cũ thì xóa đi
                    deleteFile($old_file);
                }
            }else {
                $new_file = $old_file;
            }
            // var_dump($avatar,$nationality,$address,$role);die();
            $this->model->UpdateTaikhoan($name,$password,$email,$phone,$new_file,$nationality,$address,$role,$id);
            header("Location : ".BASE_URL_ADMIN.'?act=tai-khoan');

        }
    }
    public function Deletetaikhoan(){
        $id = $_GET['id'];
        $taikhoan = $this->model->GetDetailTaikhoan($id);
        $this -> model -> DestroyAccount($id);
        header("Location: " . BASE_URL_ADMIN . '?act=tai-khoan');
        exit();
    }
}