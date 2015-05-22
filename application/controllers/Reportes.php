<?php
	class Reportes extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('ReportesModel');
		}
		public function Index(){
			$data['titulo'] = 'Reportes';
			$this->load->view('Plantillas/header',$data);
			$this->load->view('Reportes/index');
			$this->load->view('Plantillas/footer');
		}

		public function mostrarGrafico(){
			
			$result = $this->ReportesModel->getHoras();			
			$rows = array();
			      $table = array();
			      $table['cols'] = 	array(
			      			        	array('label' => 'Salon', 'type' => 'string'),
			        					array('label' => 'Horas de servicio', 'type' => 'number')
			    					);

			              foreach($result as $r) {

			                $temp = array();
			                $temp[] = array('v' => (string) $r['salon']); 
			                $temp[] = array('v' => (int) $r['HorasServicio']); 
			                $rows[] = array('c' => $temp);
			              }

			          $table['rows'] = $rows;
			          $jsonTable = json_encode($table);

			          return $table;			 	          
		}
	}	
?>