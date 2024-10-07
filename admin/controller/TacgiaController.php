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
        require_once './view/tacgia/Listdanhmuc.php';
    }

    // Them
    public function formAddTacGia()
    {
        // Hiển thị form nhập
        require_once './view/tacgia/addDanhMuc.php';

    }
    public function postAddTacGia()
    {
        // Hàm này xỷ lý dữ liệu


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu
            $name = $_POST['name'] ?? '';
            $bio = $_POST['bio'] ?? '';

            $img_author = $_FILES['img_author'] ?? null;
            // Lưu hình ảnh
            $file_thum = uploadFile($img_author, './uploads/authors/');


            // Tạo một mảng trống để lấy dữ liệu
            $errors = [];
            if (empty($name)) {
                $errors['name'] = 'Tên sản phẩm không được bỏ trống';
            }
            if (empty($bio)) {
                $errors['bio'] = 'Bio không được bỏ trống';
            }
            if ($img_author['error'] !== 0) {
                $errors['img_author'] = 'Phải chọn ảnh sản phẩm';
            }

            $_SESSION['error'] = $errors;

            //nếu k có lỗi thì tiến hành thêm sản phẩm
            if (empty($errors)) {
                //nếu k có lỗi thì tiến hành thêm sản phẩm
                // var_dump("oke");
                $product_id = $this->modelDanhMuc->insertDanhMuc($name, $file_thum, $bio);
                header("Location: " . BASE_URL_ADMIN . '?act=tac-gia');
                exit();
            } else {
                // trả về form và lỗi
                // Đặt chỉ thị xóa session sau khi hiển thị form
                $_SESSION['flash'] = true;

                header("Location: " . BASE_URL_ADMIN . '?act=form-them-tac-gia');
                exit();
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
            require_once './view/tacgia/editDanhMuc.php';
        } else {
            header("Location: " . BASE_URL_ADMIN . '?act=tac-gia');
            exit();
        }

    }
    public function postEditTacGia()
    {
        // Hàm này xỷ lý dữ liệu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu
            // Lấy ra dữ liệu cũ của sản phẩm
            $tacgia_id = $_POST['tacgia_id'] ?? '';
            // Truy vấn
            $tacGiaOld = $this->modelDanhMuc->getDetailDanhMuc($tacgia_id);
            $old_file = $tacGiaOld['img_author']; //Lấy ảnh cũ để phục vũ cho sửa ảnh

            $name = $_POST['name'] ?? '';
            $bio = $_POST['bio'] ?? '';

            $img_author = $_FILES['img_author'] ?? null;

            // Tạo một mảng trống để lấy dữ liệu
            $errors = [];
            if (empty($name)) {
                $errors['name'] = 'Tên sản phẩm không được bỏ trống';
            }
            if (empty($bio)) {
                $errors['bio'] = 'Bio không được bỏ trống';
            }

            $_SESSION['error'] = $errors;


            if (isset($img_author) && $img_author['error'] == UPLOAD_ERR_OK) {
                // Upload ảnh mới lên
                $new_file = uploadFile($img_author, './uploads/authors');

                if(!empty($old_file)) { //Nếu có ảnh cũ thì xóa đi
                    deleteFile($old_file);
                }
            }else {
                $new_file = $old_file;
            }

            //nếu k có lỗi thì tiến hành thêm danh mục
            if (empty($errors)) {
                //nếu k có lỗi thì tiến hành sua danh mục
                // var_dump("oke");
                $this->modelDanhMuc->updateDanhMuc(
                    $tacgia_id, 
                    $name, 
                    $new_file, 
                    $bio);
                header("Location: " . BASE_URL_ADMIN . '?act=tac-gia');
                exit();
            } else {
                // trả về form và lỗi

                $_SESSION['flash'] = true;

                 header("Location: " . BASE_URL_ADMIN . '?act=form-sua-tacgia&id_tacgia='. $tacgia_id);
                exit();

            }

        }
    }
    public function deleteDanhMuc()
    {
        $id = $_GET['id_tacgia'];
        $tacGia = $this->modelDanhMuc->getDetailDanhMuc($id);

        if ($tacGia) {
            $this->modelDanhMuc->distroyDanhMuc($id);
        }
        header("Location: " . BASE_URL_ADMIN . '?act=tac-gia');
        exit();
    }
}