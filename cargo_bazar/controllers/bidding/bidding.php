<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidding extends CI_Controller {

    var $view_path = 'bidding/';
    var $main_template = 'template/def_body';
    var $user_template = 'template_login/def_body';

    function __construct() {
        parent::__construct();
        is_logged_in();
    }

    public function index() {
        //Do Noting
    }

    public function bid_project() {
		$project_id = $this->input->get("project_id");
		
        $data['default_content'] = $this->load->view($this->view_path . 'submit_project', '', true);
        $data['title'] = 'Cargo Bazar Submit Project';
        $this->load->view($this->user_template, $data);
    }
	
	public function save_bid(){
		$formData = $this->input->post("cost_entity");
		$project_id = $this->input->post("current_project_id");
		$user = $this->session->userdata("user");
		$user_id = $user->id;
		
		foreach($formData as $key => $data ){
			$data = array(
				"project_id" => $project_id,
				"ff_id" => $user_id,
				"cost_entity" => $this->input->post("cost_entity")[$key],
				"detail" => $this->input->post("details")[$key],
				"uom" => $this->input->post("uom")[$key],
				"qty" => $this->input->post("qty")[$key],
				"currency" => $this->input->post("currency")[$key],
				"price" => $this->input->post("rate")[$key],
				"conversion_date" => $this->input->post("conversion_rate")[$key],
				"total_amount" => ($this->input->post("qty")[$key] * $this->input->post("rate")[$key] * $this->input->post("conversion_rate")[$key])
			);
			$this->general_model->insertRecord(TBL_BID, $data);
		}
	}
}