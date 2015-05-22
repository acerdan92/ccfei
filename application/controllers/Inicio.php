<?php
	class Inicio extends CI_Controller{
		public function Index(){
			$data['titulo'] = 'Inicio';
			$this->load->view('Plantillas/header',$data);
			$this->load->view('inicio');
			$this->load->view('Plantillas/footer');
		}
	}
?>