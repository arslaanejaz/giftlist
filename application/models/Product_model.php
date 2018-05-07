<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

    public function add_product($data)
    {
        $result = $this->db->insert('tbl_product',$data);
        return $result;
    }

    public function manage_product()
    {
        $products = $this->db->get('tbl_product');
        return $products->result();
    }

    public function get_categories()
    {
        $cats = $this->db->get('tbl_category');
        return $cats->result();
    }

    public function edit_product($id)
    {
        $this->db->where('product_id',$id);
        $product = $this->db->get('tbl_product');
        $data = $product->row();
        return $data;
        
    }

    public function update_product($id,$data)
    {
        $this->db->where("product_id",$id);
        $this->db->update("tbl_product",$data);
        return true;
    }

    public function delete_product($id)
    {
        $this->db->where('product_id',$id);
        $this->db->delete('tbl_product');
        return true;
    }

}