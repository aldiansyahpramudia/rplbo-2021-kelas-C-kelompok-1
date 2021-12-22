<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanPengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('LaporanPengajuan_model');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporanpengajuan'] = $this->LaporanPengajuan_model->getAllLaporanPengajuan();
        $data['judul'] = 'Laporan Pengajuan Surat';

        $this->load->view('templates/header', $data);
        $this->load->view('laporanpengajuan/laporanpengajuan_vw', $data);
        $this->load->view('templates/footer');
    }
}
