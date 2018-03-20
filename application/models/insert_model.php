<?php
class insert_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function getData() {
		$res = $this->db->get('komen');
		return $res->result_array();
	}

	function form_insert($table, $data) {
		$res = $this->db->insert($table,$data);
		return $res;
	}
}
?>