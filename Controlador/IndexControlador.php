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
    public function Login()
    {
        require_once './Modelo/Conexion.php';
        require_once './Modelo/Entidades/Funcionario.php';
        require_once './Modelo/Metodos/FuncionarioMetodos.php';

        $funcionario = new Funcionario();
        $funcionarioMetodos = new FuncionarioMetodos();

        if(isset($_POST['correo']) && isset($_POST['contrasena']))
        {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $todosFuncionarios = $funcionarioMetodos->BuscarTodos();
            foreach ($todosFuncionarios as $f)
            {
                if($f->getCorreo() == $correo && $f->getContrasena() == $contrasena && $f->getEstado() == 1)
                {
                    if($f->getPerfil() == 1)
                    {
                        require_once './Vista/views/admin/Estadisticas.php';
                        //admin = 1 && cobros = 2
                    }
                    elseif ($f->getPerfil() == 2)
                    {
                        require_once './Vista/views/cobros/BuscarEstudiante.php';
                    }
                }
            }
        }



    }
}
