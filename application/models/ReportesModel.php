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
	}
?>