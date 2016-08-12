<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    var $view_path = 'users/';
    var $main_template = 'template/def_body';
    var $user_template = 'template_login/def_body';

    public function index() {
        $this->load->view($view_path . 'welcome_message');
    }

    public function test() {
        $data['default_content'] = $this->load->view($this->view_path . 'frieght_farwader_signup', '', true);
        $data['title'] = 'Cargo Bazar Signup';
        $this->load->view($this->main_template, $data);
    }

    public function signupIE() {
        $data['default_content'] = $this->load->view($this->view_path . 'ie_signup', '', true);
        $data['title'] = 'Cargo Bazar Importer / Exporter Signup';
        $this->load->view($this->main_template, $data);
    }

    public function ff_process() {
        if ($_POST) {

            $dataArray['company_name'] = $this->input->post('company_name');
            $dataArray['email'] = $this->input->post('email');
            $activation_key = md5($dataArray['email'] . time());
            $dataArray['mobile_no'] = $this->input->post('mobile');
            $dataArray['user_name'] = $this->input->post('email');
            $dataArray['password'] = md5($this->input->post('password'));
            $re_password = md5($this->input->post('re_password'));
            $dataArray['user_type'] = 'freight_forwarder';
            $dataArray['varification_key'] = $activation_key;
            $chck_email_duplicate = $this->checkDuplicateEmail($dataArray['email']);

            if ($dataArray['password'] != $re_password) {
                $this->session->set_flashdata('company_name', $dataArray['company_name']);
                $this->session->set_flashdata('email', $dataArray['email']);
                $this->session->set_flashdata('mobile', $dataArray['mobile_no']);
                $this->session->set_flashdata('user_type', $dataArray['user_type']);
                $this->session->set_flashdata('error', 'Retype Password not Marched!');
                redirect('users/users/signupIE');
            }

            if ($chck_email_duplicate == FALSE) {
                $this->session->set_flashdata('company_name', $dataArray['company_name']);
                $this->session->set_flashdata('email', $dataArray['email']);
                $this->session->set_flashdata('mobile', $dataArray['mobile_no']);
                $this->session->set_flashdata('user_type', $dataArray['user_type']);
                $this->session->set_flashdata('error', 'Email Already Exist!');
                redirect('users/users/signupIE');
            }

            $chck_company_duplicate = $this->checkDuplicateCompanyName($dataArray['company_name']);
            if ($chck_company_duplicate == FALSE) {
                $this->session->set_flashdata('company_name', $dataArray['company_name']);
                $this->session->set_flashdata('email', $dataArray['email']);
                $this->session->set_flashdata('mobile', $dataArray['mobile_no']);
                $this->session->set_flashdata('user_type', $dataArray['user_type']);
                $this->session->set_flashdata('error', 'Company name Already Exist!');
                redirect('users/users/signupIE');
            }



            if ($this->general_model->insertRecord(TBL_USER_INFO, $dataArray) == true) {

                $url = base_url() . 'users/users/activationOfUsers/' . $activation_key;
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'zahidislam08@gmail.com', // change it to yours
                    'smtp_pass' => 'Pindi123?', // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );

                $message = '';
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('admin@cargobazar.com'); // change it to yours
                $this->email->to($dataArray['email']); // change it to yours
                $this->email->subject('Activation Cargo Bazar Login');
                $this->email->message('Please Clink on following link ' . $url);
//                if ($this->email->send()) {
//                    echo 'Email sent.';
//                } else {
//                    show_error($this->email->print_debugger());
//                }

                $this->session->set_flashdata('success', 'Varification link sent to your email');
                redirect('users/users/signupIE');
            }
        } else {
            die('something Went wrong!');
        }
    }

    public function signup_process() {
        if ($_POST) {

            $dataArray['company_name'] = $this->input->post('company_name');
            $dataArray['email'] = $this->input->post('email');
            $activation_key = md5($dataArray['email'] . time());
            $dataArray['mobile_no'] = $this->input->post('mobile');
            $dataArray['user_name'] = $this->input->post('email');
            $dataArray['password'] = md5($this->input->post('password'));
            $re_password = md5($this->input->post('re_password'));
            $dataArray['user_type'] = 'importer_exporter';
            $dataArray['varification_key'] = $activation_key;
            $chck_email_duplicate = $this->checkDuplicateEmail($dataArray['email']);

            if ($dataArray['password'] != $re_password) {
                $this->session->set_flashdata('company_name', $dataArray['company_name']);
                $this->session->set_flashdata('email', $dataArray['email']);
                $this->session->set_flashdata('mobile', $dataArray['mobile_no']);
                $this->session->set_flashdata('user_type', $dataArray['user_type']);
                $this->session->set_flashdata('error', 'Retype Password not Marched!');
                redirect('users/users/signupIE');
            }

            if ($chck_email_duplicate == FALSE) {
                $this->session->set_flashdata('company_name', $dataArray['company_name']);
                $this->session->set_flashdata('email', $dataArray['email']);
                $this->session->set_flashdata('mobile', $dataArray['mobile_no']);
                $this->session->set_flashdata('user_type', $dataArray['user_type']);
                $this->session->set_flashdata('error', 'Email Already Exist!');
                redirect('users/users/signupIE');
            }

            $chck_company_duplicate = $this->checkDuplicateCompanyName($dataArray['company_name']);
            if ($chck_company_duplicate == FALSE) {
                $this->session->set_flashdata('company_name', $dataArray['company_name']);
                $this->session->set_flashdata('email', $dataArray['email']);
                $this->session->set_flashdata('mobile', $dataArray['mobile_no']);
                $this->session->set_flashdata('user_type', $dataArray['user_type']);
                $this->session->set_flashdata('error', 'Company name Already Exist!');
                redirect('users/users/signupIE');
            }



            if ($this->general_model->insertRecord(TBL_USER_INFO, $dataArray) == true) {

                $url = base_url() . 'users/users/activationOfUsers/' . $activation_key;
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'zahidislam08@gmail.com', // change it to yours
                    'smtp_pass' => 'Pindi123?', // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );

                $message = '';
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('admin@cargobazar.com'); // change it to yours
                $this->email->to($dataArray['email']); // change it to yours
                $this->email->subject('Activation Cargo Bazar Login');
                $this->email->message('Please Clink on following link ' . $url);
//                if ($this->email->send()) {
//                    echo 'Email sent.';
//                } else {
//                    show_error($this->email->print_debugger());
//                }

                $this->session->set_flashdata('success', 'Varification link sent to your email');
                redirect('users/users/signupIE');
            }
        } else {
            die('something Went wrong!');
        }
    }

    private function checkDuplicateEmail($post_email) {

        $whereArray = array('email' => $post_email);
        $duplicate_email = $this->general_model->getRecordMultipleWhere('*', TBL_USER_INFO, $whereArray);
        echo $this->db->last_query();
        $count_row = $duplicate_email->num_rows();

        if ($count_row > 0) {
            //if count row return any row; that means you have already this email address in the database. so you must set false in this sense.
            return FALSE; // here I change TRUE to false.
        } else {
            // doesn't return any row means database doesn't have this email
            return TRUE; // And here false to TRUE
        }
    }

    private function checkDuplicateCompanyName($company_name) {

        $whereArray = array('company_name' => $company_name);
        $duplicate_email = $this->general_model->getRecordMultipleWhere('*', TBL_USER_INFO, $whereArray);
        //echo $this->db->last_query();
        $count_row = $duplicate_email->num_rows();

        if ($count_row > 0) {
            //if count row return any row; that means you have already this email address in the database. so you must set false in this sense.
            return FALSE; // here I change TRUE to false.
        } else {
            // doesn't return any row means database doesn't have this email
            return TRUE; // And here false to TRUE
        }
    }

    function ff_signup() {
        $data['default_content'] = $this->load->view($this->view_path . 'ff_signup', '', true);
        $data['title'] = 'Freight Forwarder Signup';
        $this->load->view($this->main_template, $data);
    }

    public function login() {
        $data['default_content'] = $this->load->view($this->view_path . 'login', '', true);
        $data['title'] = 'Login CargoBazar';
        $this->load->view($this->main_template, $data);
    }

    public function loginProcess() {
        if ($_POST) {
            $user_name = $this->input->post('user_name');
            $password = $this->input->post('password');
            $whereArray = array('user_name' => $user_name, 'password' => md5($password), 'status' => 'active');
            $checkLogin = $this->general_model->getRecordMultipleWhere('*', TBL_USER_INFO, $whereArray);
            if ($checkLogin->num_rows() > 0) {
                $sessiondata = $checkLogin->row();
                $this->session->set_userdata('user', $sessiondata);
                $this->session->set_userdata('is_logged_in', true);
                redirect('users/users/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username Password not matched!');
                redirect('users/users/login');
            }
        }
    }

    public function dashboard() {
        is_logged_in();
        $data['default_content'] = $this->load->view($this->view_path . 'dashboard', '', true);
        $data['title'] = 'Cargo Bazar';
        $this->load->view($this->user_template, $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('home');
    }

    function profile() {
        is_logged_in();
    }

    function edit_profile() {
        is_logged_in();
        //print_R($this->session->all_userdata()); die();
        //die('this is test');
        $user_type = logedInUserType();

        if ($user_type == 'importer_exporter') {
            $data['default_content'] = $this->load->view($this->view_path . 'edit_import_export_profile', '', true);
            $data['title'] = 'Edit Profile';
            $this->load->view($this->user_template, $data);
        }
        if ($user_type == 'freight_forwarder') {
            $data['default_content'] = $this->load->view($this->view_path . 'freight_forwarder_profile', '', true);
            $data['title'] = 'Edit Profile';
            $this->load->view($this->user_template, $data);
        }
    }

    function editProfileExporterImporter() {
        is_logged_in();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('ntn', 'NTN', 'required');
        $this->form_validation->set_rules('description', 'Company Description', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['default_content'] = $this->load->view($this->view_path . 'edit_import_export_profile', '', true);
            $data['title'] = 'Edit Profile';
            $this->load->view($this->user_template, $data);
        } else {
            $dataArrar['ntn_no'] = $this->input->post('ntn'); 
            $dataArrar['company_description'] = $this->input->post('description'); 
            $dataArrar['email'] = $this->input->post('email'); 
            $dataArrar['mobile'] = $this->input->post('phone'); 
            $this->general_model->insertRecord(TBL_PROFILE, $dataArrar);
            $this->session->set_flashdata('success', 'Profile Successfully Updated!');
            redirect('users/users/editProfileExporterImporter');
        }
    }

}
