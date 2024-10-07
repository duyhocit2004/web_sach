<?php

class MessagerController{
    public $model ;
    public function __construct(){
        $this->model = new  MessageModel();
    }
    public function method(){
        $list = $this->model->getOrder();
        var_dump($list);
        require_once '../admin/view/playout/nav.php';
    }
    public function UpdateMasage(){

    }


}