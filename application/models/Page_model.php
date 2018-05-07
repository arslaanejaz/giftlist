<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

   

    public function add_page($data)
    {
        $this->db->insert('tbl_pages',$data);
        return true;
    }

    
    public function manage_page()
    {
        $page = $this->db->get('tbl_pages');
        return $page->result();
    }

    public function get_page($slug)
    {
        $this->db->where('slug',$slug);
        $page = $this->db->get('tbl_pages');
        return $page->row();
    }

    public function edit_page($id)
    {
        $this->db->where('p_id',$id);
        $result = $this->db->get('tbl_pages');
        return $result->row();
    }

    public function update_page($id,$data)
    {
        $this->db->where('p_id',$id);
        $this->db->update('tbl_pages',$data);
        return true;
    }

    public function delete_page($id)
    {
        $this->db->where('p_id',$id);
        $this->db->delete('tbl_pages');
        return true;
    }

}