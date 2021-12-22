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
        $this->load->model('LaporanPengajuan_model');
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');
        $this->form_validation->set_message('valid_email', 'Penulisan %s tidak sesuai format!');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pengajuan Surat';

        $this->form_validation->set_rules('nama_pengirim', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_induk', 'NIS/NIK', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required|trim');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim');
        $this->form_validation->set_rules('jenis_pengajuan', 'Pengajuan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pengajuansurat/pengajuansurat_vw', $data);
            $this->load->view('templates/footer');
        } else {
            $this->LaporanPengajuan_model->pengajuanSurat();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data surat masuk berhasil ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuansurat');
        }
    }
}
