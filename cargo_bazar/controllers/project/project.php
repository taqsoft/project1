<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	
    var $view_path = 'project/';
    var $main_template = 'template/def_body';
    var $user_template = 'template_login/def_body';

    function __construct() {
        parent::__construct();
        is_logged_in();
    }

    public function index() {
        $this->load->view($view_path . 'welcome_message');
    }

    public function postProject() {


        $data['default_content'] = $this->load->view($this->view_path . 'submit_project', '', true);
        $data['title'] = 'Cargo Bazar Submit Project';
        $this->load->view($this->user_template, $data);
    }

    public function postProjectByAir() {
        $data['default_content'] = $this->load->view($this->view_path . 'submit_project_by_air', '', true);
        $data['title'] = 'Cargo Bazar Submit Project';
        $this->load->view($this->user_template, $data);
    }
    public function postProjectBySea() {
        $data['default_content'] = $this->load->view($this->view_path . 'submit_project_by_sea', '', true);
        $data['title'] = 'Cargo Bazar Submit Project';
        $this->load->view($this->user_template, $data);
    }

    function project_add_process() {
        if ($_POST) {


            $tos =$this->input->post('tos');
            $chb_required =$this->input->post('chb_required');
            $dataArray['user_id'] = logedInUserId();
            $dataArray['transit_type'] = $this->input->post('radio');
            if($dataArray['transit_type']=="by_sea"){
                $dataArray['shipment_type'] = $this->input->post('shipment_type');
            }
            $dataArray['import_export'] = $this->input->post('import_export');
            $dataArray['origin_pickup_point'] = $this->input->post('origin_pickup_point');
            $dataArray['origin_pickup'] = $this->input->post('origin_pickup');
            $dataArray['deliver_pickup_point'] = $this->input->post('deliver_pickup_point');
            $dataArray['deliver_pickup'] = $this->input->post('deliver_pickup');
            $dataArray['shipment_ready_startdate'] = DATABASE_DATE_FORMAT($this->input->post('shipment_ready_startdate'));
            $dataArray['shipment_ready_starttime'] = DATABASE_TIME_FORMAT($this->input->post('shipment_ready_starttime'));
            $dataArray['shipment_target_startdate'] = DATABASE_DATE_FORMAT($this->input->post('shipment_target_startdate'));
            $dataArray['shipment_target_starttime'] = DATABASE_TIME_FORMAT($this->input->post('shipment_target_starttime'));
            $dataArray['bid_closing_startdate'] = DATABASE_DATE_FORMAT($this->input->post('bid_closing_startdate'));
            $dataArray['bid_closing_starttime'] = DATABASE_TIME_FORMAT($this->input->post('bid_closing_starttime'));
            $dataArray['commodity'] = $this->input->post('commodity');
            $dataArray['num_of_packages'] = $this->input->post('num_of_packages');
            $dataArray['weight'] = $this->input->post('weight');
            $dataArray['chb_required'] = $chb_required!=""?$this->input->post('chb_required')=="yes"?1:0:0;
            $dataArray['service_type'] = $this->input->post('service_type');
            $dataArray['inco_terms'] = $this->input->post('inco_terms');
            $dataArray['remarks'] = $this->input->post('remarks');
            $dataArray['payment'] = $this->input->post('payment');
            $dataArray['tos'] = $tos!=""?$this->input->post('tos')=="on"?1:0:0;
            $temp = $this->input->post('data');
            $shipment_details = $temp['ShipmentDetail'];
            $fcl_detail = $temp['FclDetail'];

            $insert_id =$this->general_model->insertRecord_ReturnID(TBL_PROJECT_INFO, $dataArray);

            if ( $insert_id >=1) {
                if($dataArray['shipment_type']=="FCL"){

                    foreach($fcl_detail as $row){
                        $row["project_id"]=$insert_id;
                        $this->general_model->insertRecord(TBL_FCL_DETAIL, $row);
                    }
                }
                else{
                    foreach($shipment_details as $row){
                        $row["project_id"]=$insert_id;
                        $this->general_model->insertRecord(TBL_PROJECT_DETAIL, $row);
                    }
                }



                $this->session->set_flashdata('success', 'Shipment Successfully Added!');
            } else {
                $this->session->set_flashdata('error', 'Project Not Added Something Bad Contact to admin!');
            }

            redirect('home/projects');
        }
    }

}
