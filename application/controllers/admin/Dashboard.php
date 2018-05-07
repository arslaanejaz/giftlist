<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->model('user_model');
        $this->load->helper('date');
    }

    public function index(){
        //echo "working";
        // die();
        // //;
        $data['main_view'] = "admin/dashboard";
        $this->load->view('admin/layout',$data);

    }

   


}