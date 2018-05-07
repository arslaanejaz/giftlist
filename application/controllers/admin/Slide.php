<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller{
    public function __construct(){
        parent::__construct();
         $this->load->library(array('session','form_validation'));
        // $this->load->model('user_model');
         $this->load->model('Slide_model');
         $this->load->helper('date');
    }

    public function index(){
        
       $data['main_view'] = "admin/add_slide";
        $this->load->view('admin/layout',$data);

    }

     public function add_slide(){

            if(!empty($_FILES['slide_image']['name'])){
                $config['upload_path'] = './assets/slides';
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

                'slide_heading'=>$this->input->post('slide_heading'),
                'link_one'=>$this->input->post('link_one'),
                'link_two'=>$this->input->post('link_two'),
                'slide_image'=>$picture
                

                );

       $result = $this->Slide_model->add_slide($data);
       if($result)
       {
        return redirect('admin/slide');
       }
        

    }

    public function manage_slide()
    {
        //$data['main_view'] = "manage_category";
       $data['result'] = $this->Slide_model->manage_slide();
       
        $data['main_view'] = "admin/manage_slide";
        $this->load->view('admin/layout',$data);
    }

   
    public function edit_slide($id)
    {
        $data["slides"] = $this->Slide_model->edit_slide($id);
        $data['main_view'] = "admin/edit_slide";
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

    public function update_slide()
    {
       $id =  $this->uri->segment(4);
       if(!empty($_FILES['slide_image']['name'])){
                $config['upload_path'] = './assets/slides';
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

                'slide_heading'=>$this->input->post('slide_heading'),
                'link_one'=>$this->input->post('link_one'),
                'link_two'=>$this->input->post('link_two'),
                'slide_image'=>$picture
                

                );

       $result = $this->Slide_model->update_slide($id,$data);
       if($result)
       {
        return redirect('admin/slide');
       }
        
       
       
    }

}