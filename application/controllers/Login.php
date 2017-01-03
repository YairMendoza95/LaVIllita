<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('usuarioModel');
		}

		function index(){
			//$this->load->view('header');
			$this->load->view('loginView');
			$this->load->view('footer');
			if(isset($_POST['password'])){
				if($this->usuarioModel->login($_POST['nombreUsuario'], $_POST['password'])){
					redirect('Principal');
				}
			}
		}
	}
?>