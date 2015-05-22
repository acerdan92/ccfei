<?php
	class RegistrosModel extends CI_Model{
		function insertar($data){
			if($data['tipo_usos_id'] == 1){
				$this->db->set('fecha',$data['fecha']);
				$this->db->set('programas_educativos_id',$data['programas_educativos_id']);
				$this->db->set('tipo_usos_id',$data['tipo_usos_id']);
				$this->db->set('salones_id',$data['salones_id']);
				$this->db->set('cantidad_horas',$data['cantidad_horas']);
				$this->db->set('cantidad_usuarios',$data['cantidad_usuarios']);
				$this->db->set('matricula',$data['matricula']);
				$this->db->set('observaciones',$data['observaciones']);
				$this->db->set('hora_entrada',$data['hora_entrada']);
				$this->db->set('hora_salida',$data['hora_salida']);
				$this->db->insert('usos');
			}else{
				$this->db->insert('usos',$data);
			}			
		}
		function getAll(){
			$query = $this->db->get('usos');			
			return $query->result();
		}

		function obtenerProgramasEducativos(){
			$query = $this->db->get('programas_educativos');
			return $query->result();
		}
		function obtenerSalones(){
			$query = $this->db->get('salones');
			return $query->result();
		}
		function obtenerTipoUso(){
			$query = $this->db->get('tipo_usos');
			return $query->result();
		}
		function obtenerDocentes(){
			$query = $this->db->get('docentes');
			return $query->result();
		}
		function obtenerExperienciasEducativas(){
			$query = $this->db->get('experiencias_educativas');
			return $query->result();	
		}
	}
?>