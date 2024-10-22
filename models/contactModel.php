<?php

class ContactModelUser {
    public $model;

    public function __construct(){
        $this ->model= connectDB();
    }

    public function getAllContact() {
        $sql = 'SELECT * FROM contacts';
        $stmt = $this -> model -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

    public function insertContact($name,  $phone, $subject, $message)
    {
        $sql = 'INSERT INTO contacts (name,  phone, subject, message)
            VALUES(:name, :phone, :subject, :message)
        ';
        $stmt = $this->model->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':phone' => $phone,
            ':subject' => $subject,
            ':message' => $message
           
        ]);

        //lấy id sản phẩm vừa thêm
        return $this->model->lastInsertId();
    }
}