<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('jurnal_model');
        $this->load->model('auth_model');
        $check = $this->auth_model->current_user();
        //var_dump($check);die();
        if ($check != 1) {
            redirect(INDEX_URL . 'login');
        }
    }



    public function index()
    {
        $this->load->view('dashboard/jurnal/tambah_serial');
    }
}
