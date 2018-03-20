<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('insert_model');
        $this->load->model('update_model');
        $this->load->model('delete_model');
    }
	public function index() {
		$data = $this->insert_model->getData();
		$this->load->view('index', array('data' => $data));
	}

	public function insert() {
		$data = array(
		  'Name' => $_POST['Name'],
		  'Comment' => $_POST['Comment']
		);

		$result = $this->insert_model->form_insert('komen', $data);
		if($result >= 1) {
			redirect(base_url());
		}
	}
	public function delete($id) {
		$where = array('ID'=>$id);
		$result = $this->delete_model->delete('komen', $where);

		if($result >= 1) {
			redirect(base_url());
		}
	}
	public function update($id) {
		$where array('ID'=>$id);
		$result = $this->update_model->updateData('komen', $where);
		
	}
}