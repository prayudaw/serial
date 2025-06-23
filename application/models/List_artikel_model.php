<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class List_artikel_model extends CI_Model
{
    private $table = "jurnal_artikel";
    private $column_order = array('id', 'judul', 'volume', 'nomor', 'penulis');
    private $column_search = array('id', 'judul', 'volume', 'nomor', 'penulis');
    private $order = array('id' => 'desc');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $item) // loop kolom 
        {
            $Search = $this->input->post('search');


            if ($Search['value']) // jika datatable mengirim POST untuk search
            {
                if ($i === 0) // looping pertama
                {
                    $this->db->group_start();
                    $this->db->like($item, $Search['value']);
                } else {
                    $this->db->or_like($item, $Search['value']);
                }
                if (count($this->column_search) - 1 == $i) //looping terakhir
                    $this->db->group_end();
            }
            $i++;
        }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $Order = $this->input->post('order');
            $this->db->order_by($this->column_order[$Order['0']['column']], $Order['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables($id_jurnal)
    {
        $this->_get_datatables_query();

        $this->db->where('id_jurnal_nama', $id_jurnal);
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();

        return $query->result();
    }

    function count_filtered($id_jurnal)
    {
        $this->_get_datatables_query();
        if ($id_jurnal) {
            $this->db->where('id_jurnal_nama', $id_jurnal);
        }

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    public function get_detail_artikel($id)
    {
        $this->db->select('jurnal_artikel.*, YEAR(jurnal_artikel.`tahun`) as tahun_only,MONTH(jurnal_artikel.`tahun`) as bulan_only,jurnal_nama.judul as judul_jurnal');
        $this->db->from('jurnal_artikel');
        $this->db->join('jurnal_nama', 'jurnal_nama.id = jurnal_artikel.id_jurnal_nama');
        $this->db->Where('jurnal_artikel.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function get_jurnal()
    {
        $this->db->select('*');
        $this->db->from('jurnal_nama');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_artikel_by_id($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('jurnal_artikel', $data);
    }
}
