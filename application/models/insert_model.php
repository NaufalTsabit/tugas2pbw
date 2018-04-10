<?php
class insert_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function getData($table) {
		$res = $this->db->get($table);
		return $res->result_array();
	}

	function form_insert($table, $data) {
		$res = $this->db->insert($table,$data);
		return $res;
	}
}
?>