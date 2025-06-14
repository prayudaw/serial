<?php

class Auth_model extends CI_Model
{
    private $_table = "operator";
    const SESSION_KEY = 'kd_operator';
    const SESSION_NAMA = 'nama';
    const SESSION_INSIAL = 'inisial';
    const SESSION_LEVEL = 'level';

    public $db_siprus;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->db_siprus = $this->load->database('siprus', true);
    }


    public function login($username, $password)
    {
        $this->db_siprus->from($this->_table);
        $this->db_siprus->where('inisial', $username);
        $this->db_siprus->where('password', $password);
        $query = $this->db_siprus->get();
        // echo $this->db_siprus->last_query();
        // die();
        $user = $query->row();

        // cek apakah user sudah terdaftar?
        if (!$user) {
            return FALSE;
        }
        // bikin session
        $set_session = array(
            self::SESSION_KEY => $user->kd_operator,
            self::SESSION_NAMA => $user->nama,
            self::SESSION_INSIAL => $user->inisial,
            self::SESSION_LEVEL => $user->level,
        );
        $this->session->set_userdata($set_session);
        return $this->session->has_userdata(self::SESSION_KEY);
    }

    public function current_user()
    {
        if (!$this->session->has_userdata(self::SESSION_KEY)) {
            return null;
        }

        $user_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where($this->_table, array('kd_operator' => $user_id));
        //var_dump($query->result_array());die();
        return $query->num_rows();
    }

    public function logout()
    {
        $this->session->unset_userdata(self::SESSION_KEY);
        return !$this->session->has_userdata(self::SESSION_KEY);
    }
}
