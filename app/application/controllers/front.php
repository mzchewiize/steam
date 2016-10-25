<?php
@session_start(); 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Front extends CI_Controller {
   
    var $admin_data = array();
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url','util'));
        $this->load->model('admin_model');
        $this->admin_data = $this->session->userdata('partner');
    }

    public function login($error = '') 
    {
        $this->load->view('front/front_header');
        $this->load->view('front/login');
        $this->load->view('front/front_footer');
    }

    
}