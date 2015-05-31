<?php
	class Reportes extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('ReportesModel');
			$this->load->helper('url');
        	$this->load->library('gcharts');
		}

		public function Index(){
			$data['titulo'] = 'Reportes';
			$data['programasEducativos'] = $this->ReportesModel->obtenerProgramasEducativos();
			$data['tipoUsos'] = $this->ReportesModel->obtenerTipoUso();
			$this->load->view('Plantillas/header',$data);
			$this->load->view('Reportes/index',$data);
			$this->load->view('Plantillas/footer');
		}

		public function generarReporte(){

			$data['titulo'] = 'Gráfico';
			$this->load->view('Plantillas/header', $data);
			
			$data = array(			
				'tipo_reporte' => $this->input->post('nTipoReporte'),			
				'programas_educativos_id' => $this->input->post('nProgramaEducativo'), 
				'tipo_usos_id' => $this->input->post('nTipoUso'),
				'fechaInicio' => $this->input->post('nFechaInicio'), 
				'fechaFin' => $this->input->post('nFechaFin')
				);	


				if($data['fechaFin'] < $data['fechaInicio']){					
					echo "El rango de fechas está mal definido: fecha final menor a la inicial";
				}else{

					$result = $this->ReportesModel->generaConsulta($data);					

					//print_r($result);	

					$this->gcharts->load('ColumnChart');

					$tempSalones = array();
					$tempValores = array('Aulas');


					if($data['tipo_reporte'] == 1){
						foreach ($result as $row) {
							$tempSalones[]=$row->salon;
							$tempValores[]=$row->CantidadDeUsuarios;							
						}
					}

					if($data['tipo_reporte'] == 2){
						foreach ($result as $row) {
							$tempSalones[]=$row->salon;
							$tempValores[]=$row->HorasServicio;
						}
					}

					// print_r($tempSalones);
					// print_r($tempValores);
					

					$this->gcharts->DataTable('Reporte')->addColumn('string', 'Aula', 'aula');


					for($i = 0; $i < count($tempSalones); $i++){
						$salon = $tempSalones[$i];
						$this->gcharts->DataTable('Reporte')->addColumn('number',$salon,'aula');
					}

					$this->gcharts->DataTable('Reporte')->addRow($tempValores);
					

					$config = array(
					     'title' => 'Reporte'	
					);

					$this->gcharts->ColumnChart('Inventory')->setConfig($config);
					$this->load->view('Reportes/graficoColumnas');					
				}				
				$this->load->view('Plantillas/footer');		
		}	
	}	
?>