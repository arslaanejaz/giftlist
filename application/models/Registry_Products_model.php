<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry_Products_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

    private $table = 'tbl_registery_products';

    public function add($data)
    {
        $result = $this->db->insert($this->table,$data);
        return $result;
    }

    function exists($registry_id, $title)
    {
        $this->db->where('registry_id',$registry_id);
        $this->db->where('title',$title);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return false;
        }
    }
    public function get_by_registry_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('registry_id', $id);
        $registry = $this->db->get();
        return $registry->result();
    }

    public function manage()
    {
        $products = $this->db->get($this->table);
        return $products->result();
    }

    public function edit($id)
    {
        $this->db->where('id',$id);
        $product = $this->db->get($this->table);
        $data = $product->row();
        return $data;
        
    }

    public function update($id,$data)
    {
        $this->db->where("id",$id);
        $this->db->update($this->table,$data);
        return true;
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete($this->table);
        return true;
    }

}