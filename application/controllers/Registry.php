<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(! $this->session->userdata('user_id')){
            return redirect('login');
        }
        $this->load->library(array('form_validation'));
        $this->load->model('user_model');
        $this->load->model('Registry_model');
        $this->load->model('Registry_Products_model');
        $this->load->helper('date');
    }

    public function index()
    {
        $data['result'] = $this->Registry_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('registry/index', $data);
        $this->load->view('templates/footer');
    }

    public function show($id)
    {
        $data['result'] = $this->Registry_model->get_by_id($id);
        $data['products'] = $this->Registry_Products_model->get_by_registry_id($id);
        $this->load->view('templates/header');
        $this->load->view('registry/show', $data);
        $this->load->view('templates/footer');
    }

    public function create_registry()
    {
        $userid = $this->session->userdata('user_id');
        $registrytype = $this->input->post('registry_type');
        $registrydate = date('Y-m-d', strtotime($this->input->post('registry_date')));
        $registryurl = $this->input->post('registry_url');
        $isprivate = $this->input->post('registry_private')?$this->input->post('registry_private'):0;
        $desc = $this->input->post('registry_msg');
        if(!empty($_FILES['rimage']['name'])){
            $config['upload_path'] = './assets/registry';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['rimage']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('rimage')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = '';
            }
        }else{
            $picture = '';
        }
        $data = array(
                'registry_type'=> $registrytype,
                'registry_date'=> $registrydate,
                'registry_url'=> $registryurl,
                'fk_user_id'=> $userid,
                'description'=> $desc,
                'thumb'=> $picture,
                'is_private'=> $isprivate

            );
        $result = $this->user_model->create_registry($data);
        if($result)
        {
            return redirect('registry');
        }

        
    }


}