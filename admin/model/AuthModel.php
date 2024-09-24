<?php

class AuthModel {
    public $data;

    public function __construct() {
        $this->data = connectDB();
    }

    public function checkLogin($email, $password) {
        // Sử dụng truy vấn an toàn hơn
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->data->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra nếu người dùng tồn tại và so sánh mật khẩu
        if ($user && $password == $user['password']) {
            if ($user['id_role'] == 1) {
                return true; // Đăng nhập thành công cho admin
            } else {
                header("Location: " . BASE_URL_ADMIN . 'show-from-login');
                exit(); // Dừng thực thi để tránh tiếp tục chạy code
            }
        } else {
            // Trả về thông báo JavaScript
            return "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng nhập lại.');</script>";
        }
    }   
}