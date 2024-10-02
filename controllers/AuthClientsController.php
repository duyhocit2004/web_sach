<?php 
class AuthClientsController{
   
    public function ShowFormLogin(){
        require_once "./view/auth/login.php";
    }
    public function CheckLogin(){
        require_once "./view/auth/login.php";
    }
    public function register(){
        require_once "./view/auth/register.php";
    }
    public function PostRegister(){
        require_once "./view/auth/login.php";
    }
    public function logout(){
        require_once "./view/auth/login.php";
    } 
}