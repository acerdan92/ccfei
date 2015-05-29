<?php
	class ReportesModel extends CI_Model{
		function obtenerProgramasEducativos(){
			$query = $this->db->get('programas_educativos');
			return $query->result();
		}
		function obtenerTipoUso(){
			$query = $this->db->get('tipo_usos');
			return $query->result();
		}
		function generaConsulta($data){
			//Si el tipo de reporte es cantidad de usuarios
			if ($data['tipo_reporte'] == 1) {
				$query = /*$this->db->query*/("SELECT salones.salon, SUM( usos.cantidad_usuarios) AS CantidadDeUsuarios FROM usos LEFT JOIN salones ON salones.id = usos.salones_id WHERE usos.fecha > '".$data['fechaInicio']."' AND usos.fecha < '".$data['fechaFin']."' AND usos.programas_educativos_id = ".$data['programas_educativos_id']." AND tipo_usos_id = ".$data['tipo_usos_id']." GROUP BY salon LIMIT 0 , 30");
			}else{
			//Entonces el tipo de reporte es cantidad de horas
				$query = /*$this->db->query*/("SELECT salones.salon, SUM( usos.horas_servicio ) AS HorasServicio FROM usos LEFT JOIN salones ON salones.id = usos.salones_id WHERE usos.fecha > '".$data['fechaInicio']."' AND usos.fecha < '".$data['fechaFin']."' AND usos.programas_educativos_id = ".$data['programas_educativos_id']." AND tipo_usos_id = ".$data['tipo_usos_id']." GROUP BY salon LIMIT 0 , 30");				
			}			
			return $query/*->result()*/;
		}
				
	}
?>