<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

   

    public function add_faq($data)
    {
        $this->db->insert('tbl_faq',$data);
        return true;
    }

    
    public function manage_faq()
    {
        $faq = $this->db->get('tbl_faq');
        return $faq->result();
    }


    public function edit_faq($id)
    {
        $this->db->where('f_id',$id);
        $result = $this->db->get('tbl_faq');
        return $result->row();
    }

    public function update_faq($id,$data)
    {
        $this->db->where('f_id',$id);
        $this->db->update('tbl_faq',$data);
        return true;
    }

    public function delete_faq($id)
    {
        $this->db->where('f_id',$id);
        $this->db->delete('tbl_faq');
        return true;
    }

}