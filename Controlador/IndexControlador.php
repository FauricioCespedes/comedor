<?php
session_start();
//modelo
class IndexControlador
{
    public function Index()
    {
        require_once "./Vista/views/admin/adminpage.php";
    }
}
