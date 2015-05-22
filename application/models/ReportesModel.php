<?php
	class ReportesModel extends CI_Model{
		function getHoras(){
			$this->db->select('salon');
			$this->db->from('salones');
			$query = $this->db->get();
			return $query;
		}
	}
?>