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
					$this->ReportesModel->generaConsulta($data);
					$result = $this->ReportesModel->generaConsulta($data);
					print_r($result);
				}			
		}


		public function column_chart_basic(){
	        $this->gcharts->load('ColumnChart');

	        $this->gcharts->DataTable('Inventory')
	                      ->addColumn('string', 'Classroom', 'class')
	                      ->addColumn('number', 'Pencils', 'pencils')
	                      ->addColumn('number', 'Markers', 'markers')
	                      ->addColumn('number', 'Erasers', 'erasers')
	                      ->addColumn('number', 'Binders', 'binders')
	                      ->addRow(array(
	                          'Science Class',
	                          rand(50, 100),
	                          rand(50, 100),
	                          rand(50, 100),
	                          rand(50, 100)
	                      ));

	        $config = array(
	            'title' => 'Inventory'	
	        );

	        $this->gcharts->ColumnChart('Inventory')->setConfig($config);

	        $this->load->view('Reportes/column_chart_basic');
	    }
	}	
?>