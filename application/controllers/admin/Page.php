<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->model('Page_model');
        $this->load->helper('date');
    }

    public function index(){
        $data['result'] = $this->Page_model->manage_page();
       $data['main_view'] = "admin/add_page";
       $this->load->view('admin/layout',$data);

   }

   public function add_page(){

    $data = array(
        'title'=>$this->input->post('title'),
        'slug'=>$this->input->post('slug'),
        'content'=>$this->input->post('content')
    );

    $result = $this->Page_model->add_page($data);
    if($result)
    {
        return redirect('admin/page/manage_page');
    }

}

public function edit_page($id)
{
    $data['result'] = $this->Page_model->edit_page($id);
        $data['main_view'] = "admin/edit_page";
        $this->load->view('admin/layout',$data);

}

public function delete_page($id)
    {
       $result =  $this->Page_model->delete_page($id);
       if($result)
       {
        return redirect("admin/page/manage_page");
       }
    }

public function update_page()
{
    
    $data = array(
        
        'title'=>$this->input->post('title'),
        'content'=>$this->input->post('content')
        );

    $result = $this->Page_model->update_page($this->input->post('pid'), $data);
    if($result)
    {
        return redirect('admin/page/manage_page');
    }
}

public function manage_page()
{
   $data['result'] = $this->Page_model->manage_page();

   $data['main_view'] = "admin/manage_page";
   $this->load->view('admin/layout',$data);
}




}