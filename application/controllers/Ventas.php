<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Ventas extends CI_Controller{

		public function __construct(){
			parent::__construct();

		}

		public function index(){
			$this->load->view('header');
			$this->load->view('ventasView');
			$this->load->view('footer');
		}
	}
?>