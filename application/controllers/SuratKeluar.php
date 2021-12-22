<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratKeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('SuratKeluar_model');
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');
        $this->form_validation->set_message('valid_email', 'Penulisan %s tidak sesuai format!');
        $this->form_validation->set_message('matches', '%s tidak sama!');
        $this->form_validation->set_message('min_length', '%s terlalu pendek!');
        $this->form_validation->set_message('is_unique', '%s sudah pernah terdaftar!');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Surat Keluar';
        $data['suratkeluar'] = $this->SuratKeluar_model->getAllSuratKeluar();

        $this->load->view('templates/header', $data);
        $this->load->view('suratkeluar/suratkeluar_vw', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Tambah Surat Keluar';

        $this->form_validation->set_rules('no_suratkeluar', 'No. Surat', 'required|trim|is_unique[suratkeluar.no_suratkeluar]');
        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required|trim');
        $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required|trim');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required|trim');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('suratkeluar/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_file = $_FILES['file_surat']['name'];

            if ($upload_file) {

                $config['allowed_types']        = 'pdf|doc|docx';
                $config['max_size']             = 0;
                $config['upload_path']          = './uploads/suratkeluar';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_surat')) {
                    $this->SuratKeluar_model->tambahSuratKeluar();
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data surat keluar berhasil ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');
                    redirect('suratkeluar');
                } else {
                    $eror = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $eror . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');

                    $this->load->view('templates/header', $data);
                    $this->load->view('suratkeluar/tambah', $data);
                    $this->load->view('templates/footer');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Upload file tidak boleh kosong!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                $this->load->view('templates/header', $data);
                $this->load->view('suratkeluar/tambah', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function hapus($no_suratkeluar)
    {
        $data['suratkeluar'] = $this->db->get_where('suratkeluar', ['no_suratkeluar' => $no_suratkeluar])->row_array();
        $nama_file = $data['suratkeluar']['file_surat'];

        unlink("./uploads/suratkeluar/$nama_file");
        $this->SuratKeluar_model->hapusSuratKeluar($no_suratkeluar);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data surat keluar berhasil dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('suratkeluar');
    }

    public function edit($no_suratkeluar)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['suratkeluar'] = $this->db->get_where('suratkeluar', ['no_suratkeluar' => $no_suratkeluar])->row_array();
        $data['judul'] = 'Edit Surat Keluar';
        $id = $data['suratkeluar']['no_suratkeluar'];

        $new['no_baru'] = $this->input->post('no_suratkeluar');

        if ($data['suratkeluar']['no_suratkeluar'] == $new['no_baru']) {
            $this->form_validation->set_rules('no_suratkeluar', 'No. Surat', 'required|trim');
        } else {
            $this->form_validation->set_rules('no_suratkeluar', 'No. Surat', 'required|trim|is_unique[suratkeluar.no_suratkeluar]');
        }

        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required|trim');
        $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required|trim');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required|trim');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('suratkeluar/edit', $data);
            $this->load->view('templates/footer');
        } else {


            $upload_file = $_FILES['file_surat']['name'];

            if ($upload_file) {
                $config['allowed_types']        = 'pdf|doc|docx';
                $config['max_size']             = 0;
                $config['upload_path']          = './uploads/suratkeluar';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_surat')) {
                    $nama_file = $data['suratkeluar']['file_surat'];
                    unlink("./uploads/suratkeluar/$nama_file");

                    $new_file = $this->upload->data('file_name');
                    $this->db->set('file_surat', $new_file);
                } else {
                    $eror = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<small class="text-danger">' . $eror . '</small>');

                    $this->load->view('templates/header', $data);
                    $this->load->view('suratkeluar/edit', $data);
                    $this->load->view('templates/footer');
                }
            }
            $this->SuratKeluar_model->editSuratKeluar($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data surat keluar berhasil diedit!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('suratkeluar');
        }
    }

    public function detail($no_suratkeluar)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['suratkeluar'] = $this->SuratKeluar_model->getSuratKeluarById($no_suratkeluar);

        $data['judul'] = 'Detail Surat Keluar';

        $this->load->view('templates/header', $data);
        $this->load->view('suratkeluar/detail', $data);
        $this->load->view('templates/footer');
    }
}
