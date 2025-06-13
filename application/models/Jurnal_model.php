<?php

class Jurnal_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_jurnal_nama($data)
    {
        $this->db->insert('jurnal_nama', $data);
        return $this->db->insert_id();
    }

    public function get_jurnal_nama()
    {
        $this->db->from('jurnal_nama');
        $query = $this->db->get();
        return $query->result_array();
    }
}