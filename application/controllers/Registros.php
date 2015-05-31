<?php
	class Registros extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('RegistrosModel');
		}

		public function Index(){
			$data['titulo'] = 'Registros';
			$this->load->view('Plantillas/header',$data);
			$this->load->view('Registros/index');
			$this->load->view('Plantillas/footer');
		}

		public function agregar(){
			$data['titulo'] = 'Agregar';
			$data['programasEducativos'] = $this->RegistrosModel->obtenerProgramasEducativos();
			$data['salones'] = $this->RegistrosModel->obtenerSalones();
			$data['tipoUsos'] = $this->RegistrosModel->obtenerTipoUso();
			$data['docentes'] = $this->RegistrosModel->obtenerDocentes();
			$data['experiencias_educativas'] = $this->RegistrosModel->obtenerExperienciasEducativas();
			$this-> load-> view('Plantillas/header',$data);
			$this-> load-> view('Registros/agregar',$data);		
			$this-> load-> view('Plantillas/footer');
		}

		public function agregarRegistro(){						
				$data = array(
								'fecha' => $this->input->post('nFecha'), 
								'programas_educativos_id' => $this->input->post('nProgramaEducativo'), 
								'tipo_usos_id' => $this->input->post('nTipoUso'), 
								'salones_id' => $this->input->post('nSalon'), 
								'cantidad_horas' => $this->input->post('nCantidadHoras'), 
								'cantidad_usuarios' => $this->input->post('nCantidadUsuarios'), 
								'matricula' => $this->input->post('nMatricula'), 
								'observaciones' => $this->input->post('nObservaciones'), 
								'hora_entrada' => $this->input->post('nHoraEntrada'), 
								'hora_salida' => $this->input->post('nHoraSalida'), 
								'docentes_id' => $this->input->post('nDocente'), 
								'experiencias_educativas_id' => $this->input->post('nExperienciaEducativa') 
							);				
				$this->RegistrosModel->insertar($data);					
				redirect(base_url().'Registros');	
			}	
		}
?>