<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jurnal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('jurnal_model');
        $this->load->model('list_jurnal_model');
        $check = $this->auth_model->current_user();
        //var_dump($check);die();
        if ($check != 1) {
            redirect(INDEX_URL . 'login');
        }
    }

    public function index()
    {
        $this->load->view('dashboard/jurnal/list_jurnal');
    }

    public function ajax_list_jurnal()
    {
        header('Content-Type: application/json');
        $list = $this->list_jurnal_model->get_datatables();
        $data = array();

        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $Data) {
            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] = $no;
            $row[] = $Data->judul;
            $row[] = $Data->no_panggil;
            $row[] = $Data->kategori;
            $row[] = $Data->penerbit;
            $row[] = '
            <a href="' . site_url() . INDEX_URL . '/dashboard/list_artikel?id=' . $Data->id . '"  class="btn btn-info btn-sm"><i class ="ion ion-md-list"></i> Koleksi</a>
            <a href="javascript:void(0)" id="btn-edit-post" data-id="' . $Data->id . '" class="btn btn-primary btn-sm"><i class ="fa fa-edit"></i> Edit</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->list_jurnal_model->count_all(),
            "recordsFiltered" => $this->list_jurnal_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    }

    public function update_jurnal()
    {
        $POST = $this->input->post();
        $update_data = array(
            'judul' =>   $POST['judul'],
            'anak_judul' => $POST['anak_judul'],
            'kategori' => $POST['kategori'],
            'inisial' => $POST['kategori'],
            'issn' => $POST['issn'],
            'klasifikasi' => $POST['klasifikasi'],
            'bahasa' => $POST['bahasa'],
            'frekuensi' => $POST['frekuensi'],
            'penerbit' => $POST['penerbit'],
            'kota' => $POST['kota'],
            'keterangan' => $POST['keterangan'],
            'badan' => $POST['badan']
        );
        $this->list_jurnal_model->update_jurnal_by_id($update_data, $POST['id_jurnal']);
        $data = array(
            'status' => 1
        );
        echo json_encode($data);
    }

    //form tambah serial
    public function form_tambah_serial()
    {
        $this->load->view('dashboard/jurnal/tambah_serial');
    }

    //form tambah edisi
    public function tambah_edisi()
    {
        $get_jurnal_nama = $this->jurnal_model->get_jurnal_nama();
        $data = array(
            'title' => 'Tambah Edisi',
            'jurnal_nama_list' => $get_jurnal_nama
        );

        $this->load->view('dashboard/jurnal/tambah_edisi', $data);
    }

    //proses input tambah serial
    public function tambah_serial()
    {
        $POST = $this->input->post();
        $data_input = array(
            "judul" => $POST['judul'],
            "anak_judul" => $POST['anak_judul'],
            "inisial" => $POST['inisial'],
            "kategori" => $POST['kategori'],
            "klasifikasi" => $POST['klasifikasi'],
            "no_panggil" => substr($POST['kategori'], 0, 3) . ' ' . $POST['klasifikasi'] . ' ' . $POST['inisial'],
            "issn" => $POST['issn'],
            "bahasa" => $POST['bahasa'],
            "frekuensi" => $POST['frekuensi'],
            "penerbit" => $POST['penerbit'],
            "kota" => $POST['kota'],
            "keterangan" => $POST['keterangan'],
            "badan" => $POST['badan'],
            "link" => $POST['link'],
        );

        if ($this->jurnal_model->insert_jurnal_nama($data_input)) {
            $data = array(
                'status' => 1,
                'message' => 'Data Berhasil Disimpan.'
            );

            echo json_encode($data);
        } else {
            $data = array(
                'status' => 2,
                'message' => 'Error.'
            );

            echo json_encode($data);
        }
    }

    //proses input jurnal artikel
    public function add_proccess_2()
    {
        $POST = $this->input->post();
        $tgl_input = date('Y-m-d', strtotime($POST['tanggal_input']));
        // var_dump($tgl_input);
        // die();
        $data_input = array(
            'nama_jurnal' => $_POST['nama_jurnal'],
            'id_jurnal_nama' => $_POST['id_jurnal_nama'],
            'volume' => $_POST['volume'],
            'nomor' => $_POST['nomor'],
            'tahun' => '' . $_POST['tahun'] . '-' . $_POST['periode'] . '-00',
            'judul' => $_POST['judul'],
            'penulis' => $_POST['penulis'],
            'halaman' => $_POST['halaman'],
            'artikel' => $_POST['artikel'],
            'link' => $_POST['link'],
            'tgl_input' => $tgl_input . ' ' . $_POST['jam'] . ':00',
        );


        if ($this->jurnal_model->insert_jurnal_artikel($data_input)) {
            $data = array(
                'status' => 1,
                'message' => 'Data Berhasil Disimpan.'
            );
            echo json_encode($data);
        } else {
            $data = array(
                'status' => 2,
                'message' => 'Error.'
            );

            echo json_encode($data);
        }
    }


    public function detail_edit()
    {
        $id = (int)$this->input->post('id');
        $data = $this->list_jurnal_model->get_detail_jurnal_nama($id);
        // var_dump($data);
        // die();
        echo json_encode($data);
    }
}
