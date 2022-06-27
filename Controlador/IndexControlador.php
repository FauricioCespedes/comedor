<?php
session_start();
//modelo
class IndexControlador
{
    public function Index()
    {
        require_once "./Vista/login.php";
    }
}
