<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanSurat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pengajuan Surat';

        $this->load->view('templates/header', $data);
        $this->load->view('pengajuansurat/pengajuansurat_vw', $data);
        $this->load->view('templates/footer');
    }
}
