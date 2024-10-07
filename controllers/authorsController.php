<?php

class AuthorsController
{
    public $modelAuthors;
    public function __construct()
    {
        $this->modelAuthors = new AuthorsModel();
    }
    public function Authors()
    {
        $listAuthors = $this->modelAuthors->getAllAuthors();

        require_once './view/authors.php';
    }
}