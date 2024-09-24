<?php

class TacgiaController
{
    public $modelDanhMuc;
    public function __construct()
    {
        $this->modelDanhMuc = new DanhMucModel();
    }
    public function danhMucTacGia()
    {
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
    
        // var_dump($list);die();
        require_once './view/danhmuc/Listdanhmuc.php';
    }

    // Them
    public function formAddTacGia()
    {
        // Hiển thị form nhập
        require_once './view/danhmuc/addDanhMuc.php';

    }
    public function postAddTacGia()
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
                $this->modelDanhMuc->insertDanhMuc($name);
                header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
                exit();
            } else {
                // trả về form và lỗi
                require_once './view/danhmuc/addDanhMuc.php';
            }
        }
    }


    // Sua
    public function formEditTacGia()
    {
        // Hiển thị form nhập
        // Lấy thông tin của danh mục cần sửa
        $id = $_GET['id_tacgia'];
        $tacGia = $this->modelDanhMuc->getDetailDanhMuc($id);
        if ($tacGia) {
            require_once './view/danhmuc/editDanhMuc.php';
        } else {
            header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
            exit();
        }

    }
    public function postEditTacGia()
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
                $this->modelDanhMuc->updateDanhMuc($id, $name);
                header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
                exit();
            } else {
                // trả về form và lỗi
                $tacGia = ['id' => $id, 'name' => $name];
                require_once './view/danhmuc/editDanhMuc.php';

            }

        }
    }
    public function deleteDanhMuc()
    {
        $id = $_GET['id_tacgia'];
        $tacGia = $this->modelDanhMuc->getDetailDanhMuc($id);

        if ($tacGia) {
            $this -> modelDanhMuc -> distroyDanhMuc($id);
        }
        header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
        exit();
    }
}