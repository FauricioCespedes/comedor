<?php
class Tiquete 
{
		private $id;
		private $monto;
		private $idPerfil;
		private $estado;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getMonto(){
			return $this->monto;
		}

		public function setMonto($monto){
			$this->monto = $monto;
		}

		public function getIdPerfil(){
			return $this->idPerfil;
		}

		public function setIdPerfil($idPerfil){
			$this->idPerfil = $idPerfil;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function setEstado($estado){
			$this->estado = $estado;
		}
}
