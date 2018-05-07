<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

public function __construct(){
        parent::__construct();
         $this->load->library(array('session','form_validation'));
         $this->load->model('user_model');
         $this->load->model('Product_model');
         $this->load->model('Registry_model');
         $this->load->model('Page_model');
         $this->load->model('Faq_model');
         $this->load->model('Partner_model');
         $this->load->helper('date');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['result'] = $this->user_model->get_slides();
		$this->load->view('templates/header');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
	}

	public function find_registry()
	{
		$name = NULL;
		if($this->input->post('bgname')){
			$name = $this->input->post('bgname');
		}
		$data['result'] = $this->Registry_model->manage_registry($name);
		$this->load->view('templates/header');
		$this->load->view('find_registry',$data);
		$this->load->view('templates/footer');
	}

	public function shop()
	{
		$data['result'] = $this->Product_model->manage_product();
		$data['cats'] = $this->Product_model->get_categories();	
		$this->load->view('templates/header');
		$this->load->view('shop',$data);
		$this->load->view('templates/footer');
	}

	public function page($slug)
	{
		$data['content'] = $this->Page_model->get_page($slug);	
		$this->load->view('templates/header');
		$this->load->view('page', $data);
		$this->load->view('templates/footer');
	}
	public function faq()
	{
		$data['faq'] = $this->Faq_model->manage_faq();	
		$this->load->view('templates/header');
		$this->load->view('faq', $data);
		$this->load->view('templates/footer');
	}
	public function partners()
	{
		$data['partners'] = $this->Partner_model->manage_partner();	
		$this->load->view('templates/header');
		$this->load->view('partners', $data);
		$this->load->view('templates/footer');
	}
}
