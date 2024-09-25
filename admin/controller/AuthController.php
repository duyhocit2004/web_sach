<?php

class AuthController {
    public $model;

    public function __construct() {
        $this->model = new AuthModel();
    }

    public function fromLogin(): void {
        DeleteSessionError();   
        require_once './view/auth/login.php';
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            // var_dump($email,$password);die();
            $user = $this->model->checkLogin($email, $password);
            // var_dump($user);die();
            if ($user == $email) {
                $_SESSION['user_admin'] = $user;
                header("Location: " . BASE_URL_ADMIN);
                exit();
            } else {
                $_SESSION['error'] = $user; // Thông báo lỗi từ checkLogin
                $_SESSION['flash'] = true;   // Ghi nhớ thông báo lỗi
                header("Location: " . BASE_URL_ADMIN . '?act=show-from-login');
                exit();
            }
        }
    }

    public function logout() {
        // Xử lý đăng xuất (ví dụ: xóa session)
        session_unset(); // Hủy toàn bộ session
        header("Location: " . BASE_URL_ADMIN . '?act=show-from-login');
        exit();
    }
}