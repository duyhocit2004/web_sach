<?php

class ContactControllerUser{

    public $modelContact;

    public function __construct(){
        $this->modelContact = new ContactModelUser();
    }
    public function formContact() {
        require_once "./view/contact.php";
    }
    public function postAddContact()
    {
        // Hàm này xỷ lý dữ liệu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu
            $name = $_POST['name'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $subject = $_POST['subject'] ?? '';
            $message = $_POST['message'] ?? '';
        }
        $this->modelContact->insertContact($name, $phone, $subject, $message);

        $_SESSION['success_message'] = "Gửi liên hệ thành công! Chúng tôi sẽ liên hệ với bạn sớm.";
        header("Location: " . BASE_URL . '?act=contact');
        exit();

    }
    
}