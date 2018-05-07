<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Registry_model');
        $this->load->helper('date');
    }

    public function index(){
        $data['result'] = $this->Product_model->get_categories();

       $data['main_view'] = "admin/add_registry";
       $this->load->view('admin/layout',$data);

   }

   public function add_registry(){

   $userid = $this->session->userdata('user_id');

    $data = array(

        'registry_type'=>$this->input->post('registry_type'),
        'registry_date'=>$this->input->post('registry_date'),
        'registry_url'=>$this->input->post('custom_url'),
        'fk_user_id'=>$userid
        


        );

    $result = $this->Registry_model->add_registry($data);
    if($result)
    {
        return redirect('admin/registry');
    }

}

public function edit_registry($id)
{
    $data['result'] = $this->Registry_model->edit_registry($id);
    //$data["products"] = $this->Product_model->edit_product($id);
        $data['main_view'] = "admin/edit_registry";
        $this->load->view('admin/layout',$data);

}

public function delete_registry($id)
    {
       $result =  $this->Registry_model->delete_registry($id);
       if($result)
       {
        return redirect("admin/registry/manage_registry");
       }
    }

public function update_registry()
{
    

   $userid = $this->session->userdata('user_id');

    $data = array(

        'registry_type'=>$this->input->post('registry_type'),
        'registry_date'=>$this->input->post('registry_date'),
        'registry_url'=>$this->input->post('custom_url'),
        'fk_user_id'=>$userid
        


        );

    $result = $this->Registry_model->add_registry($data);
    if($result)
    {
        return redirect('admin/registry');
    }
}

public function manage_registry()
{
   $data['result'] = $this->Registry_model->manage_registry();

   $data['main_view'] = "admin/manage_registry";
   $this->load->view('admin/layout',$data);
}




}