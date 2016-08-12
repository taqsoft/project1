<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *     http://example.com/index.php/welcome
     *   - or -
     *     http://example.com/index.php/welcome/index
     *   - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    var $view_path = 'home/';
    var $main_template = 'template/def_body';

//    public function index() {
//        $this->load->view($view_path . 'welcome_message');
//    }
   
    public function index() {
        $data['records'] = $this->general_model->getAllRecords('',TBL_PROJECT_INFO,"","",4,"id");

        $data['default_content'] = $this->load->view($this->view_path . 'home', $data, true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
    }
    
    function signup_process(){
        //echo phpinfo(); die();
    }
  
  public function projects(){
        $data['records'] = $this->general_model->getAllRecords('',TBL_PROJECT_INFO);
        
		$data["logged_id"] = "1";
		$is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $data["logged_id"] = "0";
        }
		$data['default_content'] = $this->load->view($this->view_path . 'projects_list',$data, true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
  }
  
  public function project_detail(){
        $id = $this->uri->segment("3");
        $data['project'] = $this->general_model->getAllRecords('',TBL_PROJECT_INFO,1,array("id"=>$id));


        $data['project_details'] = $this->general_model->getAllRecords('',TBL_PROJECT_DETAIL,'',array("project_id"=>$id));
        $data['fcl_details'] = $this->general_model->getAllRecords('',TBL_FCL_DETAIL,"",array("project_id"=>$id));

        $data['default_content'] = $this->load->view($this->view_path . 'project_detail', $data, true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
  }
  
  function airFreight(){
    $data['default_content'] = $this->load->view($this->view_path .'airfreight', "" ,true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
    }
  
  function seaFreight(){
    $data['default_content'] = $this->load->view($this->view_path .'seafreight', "" ,true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
    }
  
  function howitworkFF(){
    $data['default_content'] = $this->load->view($this->view_path .'howitworkFF', "" ,true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
  }
  
    function howitworkIM(){
    $data['default_content'] = $this->load->view($this->view_path .'howitworkIM', "" ,true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
  }
  
  function analysisfs(){
    $data['default_content'] = $this->load->view($this->view_path .'analysisfs', "" ,true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
  }
  
  function transporttype(){
    $data['default_content'] = $this->load->view($this->view_path .'transporttype', "" ,true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
  }
  
  function bestRate(){
    $data['default_content'] = $this->load->view($this->view_path .'bestRate', "" ,true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->main_template, $data);
  }
  
}
