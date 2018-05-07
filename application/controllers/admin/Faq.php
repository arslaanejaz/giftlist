<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->model('Faq_model');
        $this->load->helper('date');
    }

    public function index(){
        $data['result'] = $this->Faq_model->manage_faq();
       $data['main_view'] = "admin/add_faq";
       $this->load->view('admin/layout',$data);

   }

   public function add_faq(){

    $data = array(
        'question'=>$this->input->post('question'),
        'answer'=>$this->input->post('answer')
    );

    $result = $this->Faq_model->add_faq($data);
    if($result)
    {
        return redirect('admin/faq/manage_faq');
    }

}

public function edit_faq($id)
{
    $data['result'] = $this->Faq_model->edit_faq($id);
        $data['main_view'] = "admin/edit_faq";
        $this->load->view('admin/layout',$data);

}

public function delete_faq($id)
    {
       $result =  $this->Faq_model->delete_faq($id);
       if($result)
       {
        return redirect("admin/faq/manage_faq");
       }
    }

public function update_faq()
{
    
    $data = array(
        'question'=>$this->input->post('question'),
        'answer'=>$this->input->post('answer')
        );

    $result = $this->Faq_model->update_faq($this->input->post('fid'), $data);
    if($result)
    {
        return redirect('admin/faq/manage_faq');
    }
}

public function manage_faq()
{
   $data['result'] = $this->Faq_model->manage_faq();

   $data['main_view'] = "admin/manage_faq";
   $this->load->view('admin/layout',$data);
}




}