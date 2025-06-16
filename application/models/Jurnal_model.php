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


    public function insert_jurnal_artikel($data)
    {
        $this->db->insert('jurnal_artikel', $data);
        return $this->db->insert_id();
    }

    public function get_jurnal_nama()
    {
        $this->db->from('jurnal_nama');
        $query = $this->db->get();
        return $query->result_array();
    }

    //query pencarian jurnal
    public function get_search($keywords)
    {
        $this->db->select('*');
        $this->db->from('jurnal_artikel');
        $this->db->like('judul', $keywords);
        $this->db->or_like('penulis', $keywords);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }



    //query pencarian jurnal
    public function getListDataByCategory($cat)
    {
        $this->db->from('jurnal_nama');
        $this->db->Where('kategori', $cat);
        $this->db->order_by('judul', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }


    //query pencarian jurnal
    public function getArtikelVolume($nama_jurnal)
    {
        $this->db->select('nama_jurnal,volume');
        $this->db->from('jurnal_artikel');
        $this->db->Where('nama_jurnal', $nama_jurnal);
        $this->db->group_by('volume');
        $this->db->order_by('volume', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getNomorArtikelByVolume($nama_jurnal, $vol)
    {
        $this->db->select('nomor,id_jurnal_nama');
        $this->db->from('jurnal_artikel');
        $this->db->Where('nama_jurnal', $nama_jurnal);
        $this->db->Where('volume', $vol);
        $this->db->group_by('nomor');
        $this->db->order_by('nomor', 'ASC');
        $query = $this->db->get();
        // echo $this->db->last_query();
        // die();
        return $query->result_array();
    }


    //query pencarian jurnal
    public function getDataJurnal($id)
    {
        $this->db->from('jurnal_nama');
        $this->db->Where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}