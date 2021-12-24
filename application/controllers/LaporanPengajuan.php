<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanPengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

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

    public function riwayat()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporanpengajuan'] = $this->LaporanPengajuan_model->getAllLaporanPengajuan();
        $data['judul'] = 'Riwayat Laporan Pengajuan Surat';

        $this->load->view('templates/header', $data);
        $this->load->view('laporanpengajuan/riwayatlaporan_vw', $data);
        $this->load->view('templates/footer');
    }


    public function detail($id_pengajuan)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporanpengajuan'] = $this->LaporanPengajuan_model->getLaporanPengajuanById($id_pengajuan);

        $data['judul'] = 'Detail Pengajuan Surat';

        $this->load->view('templates/header', $data);
        $this->load->view('laporanpengajuan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function proses($id_pengajuan)
    {
        $this->LaporanPengajuan_model->proses($id_pengajuan);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Laporan Pengajuan Sedang Diproses!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('laporanpengajuan');
    }

    public function selesai($id_pengajuan)
    {
        $this->LaporanPengajuan_model->selesai($id_pengajuan);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Laporan Pengajuan Selesai Diproses!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('laporanpengajuan');
    }

    public function diterima($id_pengajuan)
    {
        $this->LaporanPengajuan_model->diterima($id_pengajuan);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Laporan Pengajuan Selesai Diproses!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('laporanpengajuan');
    }

    public function ditolak($id_pengajuan)
    {
        $this->LaporanPengajuan_model->ditolak($id_pengajuan);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Laporan Pengajuan Telah Ditolak!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('laporanpengajuan');
    }

    public function hapus($id_pengajuan)
    {
        $data['laporanpengajuan'] = $this->db->get_where('laporanpengajuan', ['id_pengajuan' => $id_pengajuan])->row_array();

        $this->LaporanPengajuan_model->hapusLaporanPengajuan($id_pengajuan);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Laporan Pengajuan Telah Selesai!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('laporanpengajuan/riwayat');
    }
}
