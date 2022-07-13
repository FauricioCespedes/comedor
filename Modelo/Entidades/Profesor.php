<?php
class Profesor{
		private $id;
		private $nombre;
		private $primerApellido;
		private $segundoApellido;
		private $cedula;
		private $saldo;
		private $estado;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getPrimerApellido(){
			return $this->primerApellido;
		}

		public function setPrimerApellido($primerApellido){
			$this->primerApellido = $primerApellido;
		}

		public function getSegundoApellido(){
			return $this->segundoApellido;
		}

		public function setSegundoApellido($segundoApellido){
			$this->segundoApellido = $segundoApellido;
		}

		public function getCedula(){
			return $this->cedula;
		}

		public function setCedula($cedula){
			$this->cedula = $cedula;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function setSaldo($saldo){
			$this->saldo = $saldo;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function setEstado($estado){
			$this->estado = $estado;
		}
}
