<?php
 class MinicartController {
    public $model ;
    public function __construct(){
        $this -> model = new MiniCartClientsModel();
    }
 }