<?php

class SanPhamController
{
    public $modelSanPham;
    public $modelDanhMuc;
    public $modelTheLoai;
    public function __construct()
    {
        $this->modelSanPham = new SanphamModel();

        $this->modelDanhMuc = new DanhMucModel();
        $this->modelTheLoai = new TheLoaiModel();
    }
    public function danhsachSanPham()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();    
        // var_dump($list);die();
        require_once '../admin/view/products/ListSanPham.php';
    }

    //Them
    public function formAddSanPham()
    {
        // Hiển thị form nhập
        $listTheLoai = $this -> modelTheLoai -> getAllTheLoai();
        $listDanhMuc = $this -> modelDanhMuc->getAllDanhMuc();
        require_once '../admin/view/products/addSanPham.php';

        // Xoa session sau khi load trang
    }
    public function postAddSanPham()
    {
        // Hàm này xỷ lý dữ liệu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu
            $book_name = $_POST['book_name'] ?? '';
            $title = $_POST['title'] ?? '';
            $author_id = $_POST['author_id'] ?? '';
            $genre_id = $_POST['genre_id'] ?? '';
            $published_date = $_POST['published_date'] ?? '';
            $price = $_POST['price'] ?? '';
            $description = $_POST['description'] ?? '';
            $quantity = $_POST['quantity'] ?? '';

            $image = $_FILES['image'] ?? null;
            // Lưu hình ảnh
            $file_thumb = uploadFile($image, './uploads/products/');

            // mảng hình ảnh



            // Tạo một mảng trống để lấy dữ liệu
            $errors = [];
            if (empty($book_name)) {
                $errors['book_name'] = 'Tên sản phẩm không được bỏ trống';
            }
            if (empty($title)) {
                $errors['title'] = 'Tiêu đề không được bỏ trống';
            }
            if (empty($author_id)) {
                $errors['author_id'] = 'Tên Tác giả phải chọn';
            }
            if (empty($genre_id)) {
                $errors['genre_id'] = 'Thể loại phải chọn';
            }
            if (empty($published_date)) {
                $errors['published_date'] = 'Ngày xuất bản không được bỏ trống';
            }
            if (empty($price)) {
                $errors['price'] = 'Giá sản phẩm không được bỏ trống';
            }
            if ($image['error'] !== 0) {
                $errors['image'] = 'Phải chọn ảnh sản phẩm';
            }
            if (empty($quantity)) {
                $errors['quantity'] = 'Số lượng phải nhập';
            }
           
            $_SESSION['error'] = $errors;
            
            //nếu k có lỗi thì tiến hành thêm sản phẩm
            if (empty($errors)) {
                //nếu k có lỗi thì tiến hành thêm sản phẩm
                // var_dump("oke");
                $product_id = $this->modelSanPham->insertSanPham($book_name, $title, $author_id, $genre_id, $published_date, $price, $description, $file_thumb, $quantity);
                header("Location: " . BASE_URL_ADMIN . '?act=products');
                exit();
            } else {
                // trả về form và lỗi
                // Đặt chỉ thị xóa session sau khi hiển thị form
                $_SESSION['flash'] = true;

                header("Location: " . BASE_URL_ADMIN . '?act=form-them-san-pham');
                exit();
            }
        }
    }


    // Sua
    public function formEditSanPham()
    {
        // Hiển thị form nhập
        // Lấy thông tin của danh mục cần sửa
        $listDanhMuc = $this -> modelDanhMuc->getAllDanhMuc();
        $listTheLoai = $this -> modelTheLoai -> getAllTheLoai();


        $id = $_GET['id_sanpham'];
        $sanPham = $this->modelSanPham->getDetailSanPham($id);
        if ($sanPham) {
            require_once './view/products/editSanPham.php';
        } else {
            header("Location: " . BASE_URL_ADMIN . '?act=san-pham');
            exit();
        }

    }
    
    public function postEditSanPham()
    {
        // Hàm này xỷ lý dữ liệu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu
            // Lấy ra dữ liệu cũ của sản phẩm
            $sanpham_id = $_POST['sanpham_id'] ?? '';
            // Truy vấn
            $sanPhamOld = $this->modelSanPham->getDetailSanPham($sanpham_id);
            $old_file = $sanPhamOld['image']; //Lấy ảnh cũ để phục vũ cho sửa ảnh

            $book_name = $_POST['book_name'] ?? '';
            $title = $_POST['title'] ?? '';
            $author_id = $_POST['author_id'] ?? '';
            $genre_id = $_POST['genre_id'] ?? '';
            $published_date = $_POST['published_date'] ?? '';
            $price = $_POST['price'] ?? '';
            $description = $_POST['description'] ?? '';
            $quantity = $_POST['quantity'] ?? '';


            $image = $_FILES['image'] ?? null;
           

           

            // Tạo một mảng trống để lấy dữ liệu
            $errors = [];
            if (empty($book_name)) {
                $errors['book_name'] = 'Tên sản phẩm không được bỏ trống';
            }
            if (empty($title)) {
                $errors['title'] = 'Tiêu đề không được bỏ trống';
            }
            if (empty($author_id)) {
                $errors['author_id'] = 'Tên Tác giả phải chọn';
            }
            if (empty($genre_id)) {
                $errors['genre_id'] = 'Thể loại phải chọn';
            }
            if (empty($published_date)) {
                $errors['published_date'] = 'Ngày xuất bản không được bỏ trống';
            }
            if (empty($price)) {
                $errors['price'] = 'Giá sản phẩm không được bỏ trống';
            }
            if (empty($quantity)) {
                $errors['quantity'] = 'Số lượng phải nhập';
            }
            
            $_SESSION['error'] = $errors;

            //Logic sửa ảnh
            if (isset($image) && $image['error'] == UPLOAD_ERR_OK) {
                // Upload ảnh mới lên
                $new_file = uploadFile($image, './uploads/products');

                if(!empty($old_file)) { //Nếu có ảnh cũ thì xóa đi
                    deleteFile($old_file);
                }
            }else {
                $new_file = $old_file;
            }
            
            //nếu k có lỗi thì tiến hành thêm sản phẩm
            if (empty($errors)) {
                //nếu k có lỗi thì tiến hành thêm sản phẩm
                // var_dump("oke");
                $this->modelSanPham->updateSanPham(
                                                $sanpham_id,
                                                $book_name, 
                                                $title, 
                                                $author_id, 
                                                $genre_id, 
                                                $published_date, 
                                                $price, 
                                                $description, 
                                                $new_file,
                                                $quantity);
                

                header("Location: " . BASE_URL_ADMIN . '?act=products');
                exit();
            } else {
                // trả về form và lỗi
                // Đặt chỉ thị xóa session sau khi hiển thị form
                $_SESSION['flash'] = true;

                // header("Location: " . BASE_URL_ADMIN . '?act=form-sua-san-pham');
                header("Location: " . BASE_URL_ADMIN . '?act=form-sua-san-pham&id_sanpham='. $sanpham_id);
                exit();
            }
        }
    }


    public function deleteSanPham()
    {
        $id = $_GET['id'];
        $sanpham = $this->modelSanPham->getDetailSanPham($id);

        if ($sanpham) {
            $this -> modelSanPham -> distroySanPham($id);
        }
        header("Location: " . BASE_URL_ADMIN . '?act=products');
        exit();
    }
}