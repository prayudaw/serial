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
        // $this->load->view('welcome_message');
    }

    public function cari()
    {
        $this->load->helper('security');
        $s             = $this->input->post('search');
        $keyword     = xss_clean($s);
        $keywords    = encode_php_tags($keyword);
        if ($keywords != "") {
            redirect(base_url(INDEX_URL . 'jurnal/search?s=' . $keywords), 'refresh');
        } else {
            redirect(base_url());
        }
    }

    public function search()
    {
        $this->load->helper('security');
        $keyword     = xss_clean($_GET['s']);
        $keywords    = encode_php_tags($keyword);

        $get_data_search = $this->jurnal_model->get_search($keyword);

        $data = array(
            'search' => $_GET['s'],
            'list_search' => $get_data_search,
            'count_result' => count($get_data_search)
        );
        $this->load->view('jurnal/pencarian', $data);
    }

    //menampilkan view berdasarkan category
    public function kategori($nama_kategori)
    {
        if ($nama_kategori == 'jurnal') {
            $cat = 'Jurnal';
        }

        if ($nama_kategori == 'majalah') {
            $cat = 'Majalah';
        }

        if ($nama_kategori == 'bulletin') {
            $cat = 'Bulletin';
        }

        if ($nama_kategori == 'newsletter') {
            $cat = 'News Letter';
        }

        if ($nama_kategori == 'surat_kabar') {
            $cat = 'Surat Kabar';
        }

        if ($nama_kategori == 'tabloid') {
            $cat = 'Tabloid';
        }


        //get data
        $getListData = $this->jurnal_model->getListDataByCategory($cat);

        $arr = array();
        foreach ($getListData as $key => $value) {
            $getVolumelist = $this->jurnal_model->getArtikelVolume($value['judul']);
            $arr[$key]['judul_jurnal'] = $value['judul'];
            $arr[$key]['list_volume'] = $getVolumelist;
            foreach ($getVolumelist as $k => $v) {
                $getNomorArtikelByVolume = $this->jurnal_model->getNomorArtikelByVolume($v['nama_jurnal'], $v['volume']);
                $arr[$key]['list_volume'][$k]['nomor'] = $getNomorArtikelByVolume;
            }
        }

        $data = array(
            'title' =>  $cat,
            'list_cat' => $arr,
            'jumlah_artikel' => count($getListData)
        );
        $this->load->view('jurnal/list_kategori', $data);
    }

    public function list_artikel($id_jurnal, $vol, $no)
    {
        $getDataJurnal = $this->jurnal_model->getDataJurnal($id_jurnal);

        $get_data_list = $this->jurnal_model->getListByJurnalVol($id_jurnal, $vol, $no);

        $data = array(
            'title' => 'List ' . $getDataJurnal['judul'] . '  Volume ' . $vol . ' No ' . $no,
            'get_list' => $get_data_list
        );
        $this->load->view('jurnal/list_artikel', $data);
    }


    public function detail($id)
    {

        $data = array(
            'detail' => $this->jurnal_model->getArtikelByID($id)
        );

        // var_dump($data);
        // die();
        $this->load->view('jurnal/detail', $data);
    }
}