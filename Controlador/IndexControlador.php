<?php
session_start();
//modelo
class IndexControlador
{
    public function Index()
    {
        require_once "./Vista/views/admin/login.php";
    }
		public function prueba(){
				require_once "./Vista/views/admin/prueba.php";
		}
}
