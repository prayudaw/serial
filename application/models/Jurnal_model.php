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
        $this->db->insert('jurnal_nama_new', $data);
        return $this->db->insert_id();
    }
}
