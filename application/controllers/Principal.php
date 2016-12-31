<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Principal extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		function index(){
			$this->load->view('header');
			$this->load->view('loginView');
			$this->load->view('footer');
		}
	}
?>