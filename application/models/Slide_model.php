<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

    public function add_slide($data)
    {
        $result = $this->db->insert('tbl_slide',$data);
        return $result;
    }

    public function manage_slide()
    {
        $slides = $this->db->get('tbl_slide');
        return $slides->result();
    }

    public function edit_slide($id)
    {
        $this->db->where('slide_id',$id);
        $slide = $this->db->get('tbl_slide');
        $data = $slide->row();
        return $data;
        
    }

    public function update_slide($id,$data)
    {
        $this->db->where("slide_id",$id);
        $this->db->update("tbl_slide",$data);
        return true;
    }

    public function delete_slide($id)
    {
        $this->db->where('slide_id',$id);
        $this->db->delete('tbl_slide');
        return true;
    }

}