<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('SuratMasuk_model');
        $this->load->model('SuratKeluar_model');
        $this->load->model('LaporanPengajuan_model');
        $this->load->model('KelolaUser_model');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';

        $data['jml_suratmasuk'] = $this->SuratMasuk_model->jumlahSuratMasuk();
        $data['jml_suratkeluar'] = $this->SuratKeluar_model->jumlahSuratKeluar();
        $data['jml_laporanpengajuan'] = $this->LaporanPengajuan_model->jumlahLaporanPengajuan();
        $data['jml_users'] = $this->KelolaUser_model->jumlahUsers();

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/dashboard_vw', $data);
        $this->load->view('templates/footer');
    }
}
