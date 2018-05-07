<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->helper('date');
    }

    public function index(){
        $data['result'] = $this->Product_model->get_categories();

       $data['main_view'] = "admin/add_product";
       $this->load->view('admin/layout',$data);

   }

   public function add_product(){

     if(!empty($_FILES['product_image']['name'])){
                $config['upload_path'] = './assets/product_images';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['product_image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('product_image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

    $data = array(

        'product_name'=>$this->input->post('product_name'),
        'product_price'=>$this->input->post('price'),
        'product_detail'=>$this->input->post('product_detail'),
        'product_category'=>$this->input->post('product_category'),
        'product_image'=> $picture


        );

    $result = $this->Product_model->add_product($data);
    if($result)
    {
        return redirect('admin/product');
    }

}

public function edit_product($id)
{
    $data['result'] = $this->Product_model->get_categories();
    $data["products"] = $this->Product_model->edit_product($id);
        $data['main_view'] = "admin/edit_product";
        $this->load->view('admin/layout',$data);

}

public function delete_product($id)
    {
       $result =  $this->Product_model->delete_product($id);
       if($result)
       {
        return redirect("admin/product/manage_product");
       }
    }

public function update_product()
{
    $id =  $this->uri->segment(4);
    if(!empty($_FILES['product_image']['name'])){
                $config['upload_path'] = './assets/product_images';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['product_image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('product_image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

    $data = array(

        'product_name'=>$this->input->post('product_name'),
        'product_price'=>$this->input->post('price'),
        'product_detail'=>$this->input->post('product_detail'),
        'product_category'=>$this->input->post('product_category'),
        'product_image'=> $picture


        );

    $result = $this->Product_model->update_product($id,$data);
    if($result)
    {
        return redirect('admin/product');
    }
}

public function manage_product()
{
        //$data['main_view'] = "manage_category";
   $data['result'] = $this->Product_model->manage_product();
  // $data['result'] = $this->Product_model->get_all_product();
       //$result = $this->Product_model->manage_product();
  // $data["categories"] = $this->Category_model->manage_category();

   $data['main_view'] = "admin/manage_product";
   $this->load->view('admin/layout',$data);
}




}