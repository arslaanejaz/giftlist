<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->model('user_model');
        $this->load->model('Slide_model');
        $this->load->helper('date');
    }

    public function index(){

     $data['main_view'] = "admin/add_user";
     $this->load->view('admin/layout',$data);

 }

 public function add_user(){



            // if(!empty($_FILES['slide_image']['name'])){
            //     $config['upload_path'] = './assets/slides';
            //     $config['allowed_types'] = 'jpg|jpeg|png|gif';
            //     $config['file_name'] = $_FILES['slide_image']['name'];

            //     //Load upload library and initialize configuration
            //     $this->load->library('upload',$config);
            //     $this->upload->initialize($config);

            //     if($this->upload->do_upload('slide_image')){
            //         $uploadData = $this->upload->data();
            //         $picture = $uploadData['file_name'];
            //     }else{
            //         $picture = '';
            //     }
            // }else{
            //     $picture = '';
            // }
    $password = $this->input->post('password');

    $data = array(

        'email'=>$this->input->post('email'),
        'fullname'=>$this->input->post('ful_name'),
        'address'=>$this->input->post('address'),
        'city'=>$this->input->post('city'),
        'state'=>$this->input->post('state'),
        'zip'=>$this->input->post('zip'),
        'password'=> password_hash($this->input->post('password'),PASSWORD_BCRYPT)


        );

    $result = $this->user_model->add_user($data);
    if($result)
    {
        return redirect('admin/user');
    }


}

public function manage_user()
{
        //$data['main_view'] = "manage_category";
 $data['result'] = $this->user_model->manage_user();

 $data['main_view'] = "admin/manage_user";
 $this->load->view('admin/layout',$data);
}


public function edit_user($id)
{
    $data["users"] = $this->user_model->edit_user($id);
        // echo "<pre>";
        // print_r($data);
        // die();
    $data['main_view'] = "admin/edit_user";
    $this->load->view('admin/layout',$data);

}

public function delete_user($id)
{
 $result =  $this->user_model->delete_user($id);
 if($result)
 {
    return redirect("admin/user/manage_user");
}
}

public function update_user($id)
{


    $password = $this->input->post('password');

    $data = array(

        'email'=>$this->input->post('email'),
        'fullname'=>$this->input->post('ful_name'),
        'address'=>$this->input->post('address'),
        'city'=>$this->input->post('city'),
        'state'=>$this->input->post('state'),
        'zip'=>$this->input->post('zip'),
        'password'=> password_hash($this->input->post('password'),PASSWORD_BCRYPT)


        );

    $result = $this->user_model->update_user($id,$data);
    if($result)
    {
        return redirect('admin/user');
    }



}

public function send_email()
{

    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'smtp.googlemail.com',
  'smtp_port' => '465',
  'smtp_user' => 'mehran.abbasi93@gmail.com', // change it to yours
  'smtp_pass' => 'KAYTAZ.,yazan339%?', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        $message = '';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('mehran.abbasi93@gmail.com'); // change it to yours
      $this->email->to('mehran.abbasi93@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }


}

}