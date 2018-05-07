<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{
    public function __construct(){
        parent::__construct();
         $this->load->library(array('session','form_validation'));
        // $this->load->model('user_model');
         $this->load->model('Category_model');
         $this->load->helper('date');
    }

    public function index(){
        // echo "working";
        // die();
        // //;
        // echo "i am category";
        // die();

       $data['main_view'] = "admin/add_category";
        $this->load->view('admin/layout',$data);

    }

     public function add_category(){


        $data = array(

            'category_name'=>$this->input->post('categoryname')
                

                );

       $result = $this->Category_model->add_category($data);
       if($result)
       {
        return redirect('admin/category/manage_category');
       }
        

    }

    public function update_category(){


    $data = array(

        'category_name'=>$this->input->post('categoryname')      

            );

    $result = $this->Category_model->update_category($this->input->post('catid'), $data);
    if($result)
    {
        return redirect('admin/category/manage_category');
    }
        

    }

    public function edit_category($id)
    {
        //$data['main_view'] = "manage_category";
       $data['result'] = $this->Category_model->get_category($id);
       
        $data['main_view'] = "admin/edit_category";
        $this->load->view('admin/layout',$data);
    }

    public function manage_category()
    {
        //$data['main_view'] = "manage_category";
       $data['result'] = $this->Category_model->manage_category();
       
        $data['main_view'] = "admin/manage_category";
        $this->load->view('admin/layout',$data);
    }

    public function delete_category($id)
    {
       $result =  $this->Category_model->delete_category($id);
       if($result)
       {
        return redirect("admin/category/manage_category");
       }
    }


}