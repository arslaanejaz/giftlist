<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller{
    public function __construct(){
        parent::__construct();
         $this->load->library(array('session','form_validation'));
        // $this->load->model('user_model');
         $this->load->model('Partner_model');
         $this->load->helper('date');
    }

    public function index(){
        
       $data['main_view'] = "admin/add_partner";
        $this->load->view('admin/layout',$data);

    }

     public function add_partner(){

            if(!empty($_FILES['slide_image']['name'])){
                $config['upload_path'] = './assets/partners';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['slide_image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('slide_image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

            $data = array(

                'title'=>$this->input->post('slide_heading'),
                'description'=>$this->input->post('description'),
                'url'=>$this->input->post('link_two'),
                'image'=>$picture
                

                );

       $result = $this->Partner_model->add_partner($data);
       if($result)
       {
        return redirect('admin/partner');
       }
        

    }

    public function manage_partner()
    {
        //$data['main_view'] = "manage_category";
       $data['result'] = $this->Partner_model->manage_partner();
       
        $data['main_view'] = "admin/manage_partner";
        $this->load->view('admin/layout',$data);
    }

   
    public function edit_partner($id)
    {
        $data["slides"] = $this->Partner_model->edit_partner($id);
        $data['main_view'] = "admin/edit_partner";
        $this->load->view('admin/layout',$data);

    }

    public function delete_slide($id)
    {
       $result =  $this->Slide_model->delete_slide($id);
       if($result)
       {
        return redirect("admin/slide/manage_slide");
       }
    }

    public function update_partner()
    {
       $id =  $this->uri->segment(4);
       if(!empty($_FILES['slide_image']['name'])){
                $config['upload_path'] = './assets/partners';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['slide_image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('slide_image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

            $data = array(

                'title'=>$this->input->post('slide_heading'),
                'description'=>$this->input->post('link_one'),
                'url'=>$this->input->post('link_two'),
                'image'=>$picture
                

                );

       $result = $this->Partner_model->update_partner($id,$data);
       if($result)
       {
        return redirect('admin/partner');
       }
        
       
       
    }

}