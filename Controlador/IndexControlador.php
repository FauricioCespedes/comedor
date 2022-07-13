<?php
session_start();
//modelo
class IndexControlador
{
    public function Index()
    {
        require_once "./Vista/views/Login.php";
    }
    public function RestablecerContrasena()
    {
        require_once "./Vista/views/RestablecerContrasena.php";
    }
    public function Logout()
    {
				//Aquí va el logout	
    }
}
