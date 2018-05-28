<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SingleImport extends CI_Controller {

public function __construct(){
        parent::__construct();
         $this->load->library(array('session','form_validation'));
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
	    $data = $_GET['data'];
//	    $d = \GuzzleHttp\json_decode($data);
	    $d = base64_decode($data);
	    print_r($d);

	}

    public function single()
    {
        $data = $_GET['data'];
        $d = base64_decode($data);
        $array = json_decode($d, true);
        $this->load->view('single_import/single', array('data'=>$array));
    }

}
