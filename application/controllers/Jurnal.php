<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurnal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jurnal_model');
        // $this->load->model('auth_model');

        // $check = $this->auth_model->current_user();
        // //var_dump($check);die();
        // if ($check != 1) {
        //     redirect(INDEX_URL . 'login');
        // }
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
}
