<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

    public function add_category($data)
    {
        $result = $this->db->insert('tbl_category',$data);
        return $result;
    }

    public function manage_category()
    {
        $categories = $this->db->get('tbl_category');
        return $categories->result();
    }

    public function get_category($id)
    {
        $categories = $this->db->get_where('tbl_category', array('category_id' => $id));
        return $categories->row();
    }
    public function update_category($id, $data)
    {
        $this->db->where("category_id",$id);
        $this->db->update("tbl_category",$data);
        return true;
    }

    public function delete_category($id)
    {
        $this->db->where('category_id',$id);
        $this->db->delete('tbl_category');
        return true;
    }

}