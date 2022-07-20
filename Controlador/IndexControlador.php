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



    
//      public function Login()
//     {
//         require_once './Modelo/Conexion.php';
//         require_once './Modelo/Entidades/Cliente.php';
//         require_once './Modelo/Metodos/ClienteMetodos.php';

//         $funcionario = new Funcionario();
//         $clienteMetodos = new FuncionarioMetodos();


//         $cliente->setId($_POST['idInput']);
//         $cliente->setCedula($_POST['nuevoCedula']);
//         switch ()
//         {
//             case 1:
//                 break;
//             case 2:
//                 break;
        

//     }
//
 }
