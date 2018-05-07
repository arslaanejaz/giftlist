<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');
    }

    public function add_partner($data)
    {
        $result = $this->db->insert('tbl_partner',$data);
        return $result;
    }

    public function manage_partner()
    {
        $slides = $this->db->get('tbl_partner');
        return $slides->result();
    }

    public function edit_partner($id)
    {
        $this->db->where('partner_id',$id);
        $slide = $this->db->get('tbl_partner');
        $data = $slide->row();
        return $data;
        
    }

    public function update_partner($id,$data)
    {
        $this->db->where("partner_id",$id);
        $this->db->update("tbl_partner",$data);
        return true;
    }

    public function delete_partner($id)
    {
        $this->db->where('partner_id',$id);
        $this->db->delete('tbl_partner');
        return true;
    }

}