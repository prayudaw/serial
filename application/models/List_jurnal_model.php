<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class List_jurnal_model extends CI_Model
{
    private $table = "jurnal_nama";
    private $column_order = array('id', 'judul', 'no_panggil', 'kategori', 'penerbit');
    private $column_search = array('id', 'judul', 'no_panggil', 'kategori', 'penerbit');
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

        ## Search
        // if (!empty($_POST['searchNim'])) {
        //     $this->db->where('nim like "%' . $_POST['searchNim'] . '%"');
        // }

        // if (!empty($_POST['searchTanggal'])) {
        //     $tgl = explode(" - ", $_POST['searchTanggal']);
        //     $tgl1 = date('y-m-d', strtotime($tgl[0]));
        //     $tgl2 = date('y-m-d', strtotime($tgl[1]));
        //     $this->db->where("tgl_pinjam BETWEEN '" . $tgl1 . " 00:00:00' and '" . $tgl2 . " 23:00:00'");
        // }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $Order = $this->input->post('order');
            $this->db->order_by($this->column_order[$Order['0']['column']], $Order['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();

        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();
        // echo $this->db->last_query();
        // die();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($now = false)
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_detail_jurnal_nama($id)
    {
        $this->db->from('jurnal_nama');
        $this->db->Where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_jurnal_by_id($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('jurnal_nama', $data);
    }
}
