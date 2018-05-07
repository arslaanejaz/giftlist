<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry_Products_Page_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

    private $table = 'tbl_registery_products_page';

    public function add($data)
    {
        $result = $this->db->insert($this->table,$data);
        return $result;
    }

    function exists($registry_id, $page)
    {
        $this->db->where('registry_id',$registry_id);
        $this->db->where('page',$page);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return false;
        }
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

    public function reset($id)
    {
        $this->db->where("registry_id",$id);
        $this->db->where("page !=",1);
        $this->db->update($this->table,array(
            'scraped'=>0
        ));
        return true;
    }

    public function get_by_registry($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('registry_id', $id);
        $this->db->where('scraped', 0);
        $registry = $this->db->get();
        return $registry->result();
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete($this->table);
        return true;
    }

}