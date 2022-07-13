<?php

class Rutas {
    function CargarControlador($controlador)
    {
        $nombreControlador = ucwords($controlador)."Controlador";
		
				$archivoControlador = './Controlador/'.ucwords($controlador).'Controlador.php';
				
				
        if(!is_file($archivoControlador))
        {
            $archivoControlador='./Controlador/IndexControlador.php';
            $nombreControlador= 'IndexControlador';
        }


        require_once $archivoControlador;
        $control = new $nombreControlador();
        return $control;
    }

    function CargarAccion($controlador,$accion,$id=null)
    {

        if(isset($accion) && method_exists($controlador, $accion))
        {
            if($id == null)
            {
                $controlador->$accion();
            }

            else
            {
                $controlador->$accion($id);
            }
        }
        else
        {
            require_once "./Controlador/IndexControlador.php";
            $controlador = new IndexControlador();
            $controlador->Index();
        }
    }
}
