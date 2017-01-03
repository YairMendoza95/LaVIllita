<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class UsuarioModel extends CI_Model{

		public function __construct(){
			parent::__construct();
		}

		public function Login($nombreUsuario, $contraseña){
			$this->db->where('nombreUsuario', $nombreUsuario);
			$this->db->where('contraseña', $contraseña);
			$query = $this->db->get('usuario');
			if($query -> num_rows() > 0){
				return true;
			}
			else{
				return false;
			}
		}
	}
?>