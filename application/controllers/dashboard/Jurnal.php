<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jurnal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jurnal_model');
    }

    public function index()
    {
        // die('tes');
        $this->load->view('page/notfound');
    }

    public function jurnal_tambah()
    {
        $this->load->view('dashboard/jurnal/tambah_jurnal');
    }

    public function tambah_edisi()
    {
        $get_jurnal_nama = $this->jurnal_model->get_jurnal_nama();
        $data = array(
            'title' => 'Tambah Edisi',
            'jurnal_nama_list' => $get_jurnal_nama
        );

        $this->load->view('dashboard/jurnal/tambah_edisi', $data);
    }

    //proses input jurnal nama
    public function add_proccess_1()
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

    public function list_jurn()
    {
        $data = array(
            'title' => 'List Jurnal'
        );
        $this->load->view('dashboard/jurnal/list_jurnal', $data);
    }
}