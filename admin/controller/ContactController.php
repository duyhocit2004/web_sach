<?php

class ContactController
{
    public $model;

    public function __construct()
    {
        $this->model = new contactModel();
    }

    public function danhsachContact()
    {
        $listContact = $this->model->getAllContact();
        require_once './view/contact/listContact.php';
    }

    public function deleteContact()
    {
        try {
            $id = $_GET['id_contact'];
            $contacts = $this->model->getDetailContact($id);

            if ($contacts) {
                $this->model->distroyContact($id);
            }
        } catch (Throwable $th) {
            $_SESSION['delete'] = 'Có lỗi xảy ra trong quá trình thực hiện!';
        }

        header("Location: " . BASE_URL_ADMIN . '?act=contact');
        exit();
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
        $this->model->insertContact($name, $phone, $subject, $message);

        $_SESSION['success_message'] = "Gửi liên hệ thành công! Chúng tôi sẽ liên hệ với bạn sớm.";
        header("Location: " . BASE_URL . '?act=contact');
        exit();

    }
}


