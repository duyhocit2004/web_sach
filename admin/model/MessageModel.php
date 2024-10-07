<?php

class MessageModel{
    public $data ;
    public function __construct(){
        $this->data = connectDB();
    }
    public function getOrder(){
        $sql = "SELECT * FROM  orders WHERE payment_status_id = 1";
        $stmt = $this->data->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}