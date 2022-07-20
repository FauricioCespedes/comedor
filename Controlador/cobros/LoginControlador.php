<?php

class LoginControlador
{
    public function InicioSesion()
    {

        if($resultado == 1)
        require_once "./Modelo/Metodos/ClienteMetodos.php";
        require_once "./Modelo/Entidades/Cliente.php";
        require_once "./Modelo/Conexion.php";

        $cliente = new Cliente();
        $clienteMetodos = new ClienteMetodos();

        $cliente->setCedula($_POST['cedula']);
        $cliente->setNombre($_POST['nombre']);
        $cliente->setTelefono($_POST['telefono']);
        $cliente->setCorreo($_POST['correo']);


        if ($clienteMetodos->NuevoCliente($cliente))
            header("Location: ./index.php?controlador=Index&accion=Index");
        else
            header("Location: ./index.php?controlador=Index&accion=Error");
    }
}