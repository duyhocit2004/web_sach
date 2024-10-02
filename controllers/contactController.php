<?php

class ContactController{

    public $modelContact;

    public function __construct(){
    }
    public function formContact() {
        require_once "./view/contact.php";
    }
}