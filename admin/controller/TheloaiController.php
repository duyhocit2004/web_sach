<?php

class TheLoaiController
{
    public $modelTheLoai;
    public function __construct()
    {
        $this->modelTheLoai = new TheloaiModel();
    }
    public function danhMucTheLoai()
    {
        $listTheLoai = $this->modelTheLoai->getAllTheLoai();
        // var_dump($list);die();
        require_once './view/theloai/listTheLoai.php';
    }

    // Them
    public function formAddTheLoai()
    {
        // Hiển thị form nhập
        require_once './view/theloai/addTheLoai.php';

    }
    public function postAddTheLoai()
    {
        // Hàm này xỷ lý dữ liệu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu
            $name = $_POST['name'];

            // Tạo một mảng trống để lấy dữ liệu
            $errors = [];
            if (empty($name)) {
                $errors['name'] = 'Tên danh mục k được bỏ trống';
            }
            //nếu k có lỗi thì tiến hành thêm danh mục
            if (empty($errors)) {
                //nếu k có lỗi thì tiến hành thêm danh mục
                // var_dump("oke");
                $this->modelTheLoai->insertTheLoai($name);
                header("Location: " . BASE_URL_ADMIN . '?act=the-loai');
                exit();
            } else {
                // trả về form và lỗi
                require_once './view/theloai/addTheLoai.php';
            }
        }
    }


    // // Sua
    public function formEditTheLoai()
    {
        // Hiển thị form nhập
        // Lấy thông tin của danh mục cần sửa
        $id = $_GET['id_theloai'];
        $tacGia = $this->modelTheLoai->getDetailTheLoai($id);
        if ($tacGia) {
            require_once './view/theloai/editTheLoai.php';
        } else {
            header("Location: " . BASE_URL_ADMIN . '?act=the-loai');
            exit();
        }

    }
    public function postEditTheLoai()
    {
        // Hàm này xỷ lý dữ liệu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu
            $id = $_POST['id'];
            $name = $_POST['name'];

            // Tạo một mảng trống để lấy dữ liệu
            $errors = [];
            if (empty($name)) {
                $errors['name'] = 'Tên danh mục k được bỏ trống';
            }
            //nếu k có lỗi thì tiến hành thêm danh mục
            if (empty($errors)) {
                //nếu k có lỗi thì tiến hành sua danh mục
                // var_dump("oke");
                $this->modelTheLoai->updateTheLoai($id, $name);
                header("Location: " . BASE_URL_ADMIN . '?act=the-loai');
                exit();
            } else {
                // trả về form và lỗi
                $tacGia = ['id' => $id, 'name' => $name];
                require_once './view/theloai/editTheLoai.php';

            }

        }
    }

    public function deleteTheLoai()
    {
        try {
            $id = $_GET['id_theloai'];
            $tacGia = $this->modelTheLoai->getDetailTheLoai($id);
    
            if ($tacGia) {
                $this -> modelTheLoai -> distroyTheLoai($id);
            }          
        } catch (Throwable $th) {
            $_SESSION['delete'] = 'Có lỗi xảy ra trong quá trình thực hiện!';
        }
        
        header("Location: " . BASE_URL_ADMIN . '?act=the-loai');
        exit();
    }
}