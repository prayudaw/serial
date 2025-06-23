<?php
defined('BASEPATH') or exit('No direct script access allowed');

class List_artikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('jurnal_model');
        $this->load->model('list_artikel_model');
        $check = $this->auth_model->current_user();
        if ($check != 1) {
            redirect(INDEX_URL . 'login');
        }
    }

    public function index()
    {
        $id_jurnal = $this->input->get('id');
        $getDataJurnal = $this->jurnal_model->getDataJurnal($id_jurnal);

        $get_jurnal = $this->list_artikel_model->get_jurnal();
        $data = array(
            'nama_jurnal' =>  $getDataJurnal['judul'],
            'id_jurnal' => $id_jurnal,
            'get_jurnal' =>  $get_jurnal
        );
        $this->load->view('dashboard/jurnal/list_artikel', $data);
    }

    public function ajax_list($id_jurnal)
    {
        header('Content-Type: application/json');
        $list = $this->list_artikel_model->get_datatables($id_jurnal);

        $data = array();

        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $Data) {
            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] = $no;
            $row[] = $Data->judul;
            $row[] = $Data->volume;
            $row[] = $Data->nomor;
            $row[] = $Data->penulis;
            $row[] = ' <a href="javascript:void(0)" id="btn-edit-post" data-id="' . $Data->id . '" class="btn btn-primary btn-sm"><i class ="fa fa-edit"></i> Edit</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->list_artikel_model->count_all(),
            "recordsFiltered" => $this->list_artikel_model->count_filtered($id_jurnal),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    }


    public function artikel_detail()
    {
        $id = (int)$this->input->post('id');
        $data = $this->list_artikel_model->get_detail_artikel($id);
        echo json_encode($data);
    }

    public function update_artikel()
    {
        $POST = $this->input->post();
        // var_dump($POST);
        // die();
        $update_data = array(
            'volume' =>   $POST['volume'],
            'nomor' => $POST['nomor'],
            'tahun' => '' . $_POST['tahun'] . '-' . $_POST['periode'] . '-00',
            'eksemplar' => $POST['eksemplar'],
            'judul' => $POST['judul'],
            'penulis' => $POST['penulis'],
            'halaman' => $POST['halaman'],
            'artikel' => $POST['artikel'],
            'link' => $POST['link']
        );
        $this->list_artikel_model->update_artikel_by_id($update_data, $POST['id_artikel']);
        $data = array(
            'status' => 1
        );
        echo json_encode($data);
    }
}