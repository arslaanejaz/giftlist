<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

   

    public function add_registry($data)
    {
        $this->db->insert('tbl_registry',$data);
        return true;
    }

    
    public function manage_registry($name = NULL)
    {
        $this->db->select('*');
        $this->db->from('tbl_registry');
        $this->db->where('is_private', 0);
        $this->db->like('description', $name);
        $registry = $this->db->get();
        return $registry->result();
    }

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('tbl_registry');
        if($this->session->userdata('user_id'))
            $this->db->where('fk_user_id', $this->session->userdata('user_id'));
        $registry = $this->db->get();
        return $registry->result();
    }

    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_registry');
        $this->db->where('registry_id', $id);
        $registry = $this->db->get();
        return $registry->result();
    }

    public function get_by_user()
    {
        $this->db->select('*');
        $this->db->from('tbl_registry');
        $this->db->where('fk_user_id', $this->session->userdata('user_id'));
        $registry = $this->db->get();
        return $registry->result();
    }


    public function edit_registry($id)
    {
        $this->db->where('registry_id',$id);
        $result = $this->db->get('tbl_registry');
        return $result->row();
    }

    public function update_registry($id,$data)
    {
        $this->db->where('registry_id',$id);
        $this->db->update('tbl_registry',$data);
        return true;
    }

    public function delete_registry($id)
    {
        $this->db->where('registry_id',$id);
        $this->db->delete('tbl_registry');
        return true;
    }

}