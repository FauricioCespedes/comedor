<?php

class Estudiante
{
    private $id;
    private $nombre;
    private $primerApellido;
    private $segundoApellido;
    private $cedula;
    private $idEspecialidad;
    private $seccion;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * @param mixed $primerApellido
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;
    }

    /**
     * @return mixed
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * @param mixed $segundoApellido
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param mixed $cedula
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * @return mixed
     */
    public function getIdEspecialidad()
    {
        return $this->idEspecialidad;
    }

    /**
     * @param mixed $idEspecialidad
     */
    public function setIdEspecialidad($idEspecialidad)
    {
        $this->idEspecialidad = $idEspecialidad;
    }

    /**
     * @return mixed
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * @param mixed $seccion
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;
    }
}