<?php
class update_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function updateData($namatable,$data) {
		$this->db->update($namatable, $data);
	}
}
?>