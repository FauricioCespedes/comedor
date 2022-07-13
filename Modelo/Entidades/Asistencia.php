<?php

class Asistencia
{
		private $id;
		private $idUsuario;
		private $fecha;
		private $estado;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getIdUsuario(){
			return $this->idUsuario;
		}

		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}

		public function getFecha(){
			return $this->fecha;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function setEstado($estado){
			$this->estado = $estado;
		}
}
