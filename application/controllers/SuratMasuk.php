<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratMasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('SuratMasuk_model');
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');
        $this->form_validation->set_message('valid_email', 'Penulisan %s tidak sesuai format!');
        $this->form_validation->set_message('matches', '%s tidak sama!');
        $this->form_validation->set_message('min_length', '%s terlalu pendek!');
        $this->form_validation->set_message('is_unique', '%s sudah pernah terdaftar!');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Surat Masuk';
        $data['suratmasuk'] = $this->SuratMasuk_model->getAllSuratMasuk();

        $this->load->view('templates/header', $data);
        $this->load->view('suratmasuk/suratmasuk_vw', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Tambah Surat Masuk';

        $this->form_validation->set_rules('no_suratmasuk', 'No. Surat', 'required|trim|is_unique[suratmasuk.no_suratmasuk]');
        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required|trim');
        $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required|trim');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required|trim');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['upload_eror'] = 'File tidak boleh kosong';

            $this->load->view('templates/header', $data);
            $this->load->view('suratmasuk/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_file = $_FILES['file_surat']['name'];

            if ($upload_file) {

                $config['allowed_types']        = 'pdf|doc|docx';
                $config['max_size']             = 0;
                $config['upload_path']          = './uploads/suratmasuk';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_surat')) {
                    $this->SuratMasuk_model->tambahSuratMasuk();
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data surat masuk berhasil ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');
                    redirect('suratmasuk');
                } else {
                    $eror = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $eror . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');

                    $this->load->view('templates/header', $data);
                    $this->load->view('suratmasuk/tambah', $data);
                    $this->load->view('templates/footer');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Upload file tidak boleh kosong!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                $this->load->view('templates/header', $data);
                $this->load->view('suratmasuk/tambah', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function hapus($no_suratmasuk)
    {
        $data['suratmasuk'] = $this->db->get_where('suratmasuk', ['no_suratmasuk' => $no_suratmasuk])->row_array();
        $nama_file = $data['suratmasuk']['file_surat'];

        unlink("./uploads/suratmasuk/$nama_file");
        $this->SuratMasuk_model->hapusSuratMasuk($no_suratmasuk);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data surat masuk berhasil dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('suratmasuk');
    }

    public function edit($no_suratmasuk)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['suratmasuk'] = $this->db->get_where('suratmasuk', ['no_suratmasuk' => $no_suratmasuk])->row_array();
        $data['judul'] = 'Edit Surat Masuk';
        $id = $data['suratmasuk']['no_suratmasuk'];

        $new['no_baru'] = $this->input->post('no_suratmasuk');

        if ($data['suratmasuk']['no_suratmasuk'] == $new['no_baru']) {
            $this->form_validation->set_rules('no_suratmasuk', 'No. Surat', 'required|trim');
        } else {
            $this->form_validation->set_rules('no_suratmasuk', 'No. Surat', 'required|trim|is_unique[suratmasuk.no_suratmasuk]');
        }

        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required|trim');
        $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required|trim');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required|trim');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('suratmasuk/edit', $data);
            $this->load->view('templates/footer');
        } else {


            $upload_file = $_FILES['file_surat']['name'];

            if ($upload_file) {
                $config['allowed_types']        = 'pdf|doc|docx';
                $config['max_size']             = 0;
                $config['upload_path']          = './uploads/suratmasuk';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_surat')) {
                    $nama_file = $data['suratmasuk']['file_surat'];
                    unlink("./uploads/suratmasuk/$nama_file");

                    $new_file = $this->upload->data('file_name');
                    $this->db->set('file_surat', $new_file);
                } else {
                    $eror = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<small class="text-danger">' . $eror . '</small>');

                    $this->load->view('templates/header', $data);
                    $this->load->view('suratmasuk/edit', $data);
                    $this->load->view('templates/footer');
                }
            }
            $this->SuratMasuk_model->editSuratMasuk($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data surat masuk berhasil diedit!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('suratmasuk');
        }
    }

    public function detail($no_suratmasuk)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['suratmasuk'] = $this->SuratMasuk_model->getSuratMasukById($no_suratmasuk);

        $data['judul'] = 'Detail Surat Masuk';

        $this->load->view('templates/header', $data);
        $this->load->view('suratmasuk/detail', $data);
        $this->load->view('templates/footer');
    }
}
