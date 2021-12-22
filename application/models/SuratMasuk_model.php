<?php

class SuratMasuk_model extends CI_Model
{
    public function getAllSuratMasuk()
    {
        return $this->db->get('suratmasuk')->result_array();
    }

    public function getSuratMasukById($no_suratmasuk)
    {
        return $data['suratmasuk'] = $this->db->get_where('suratmasuk', ['no_suratmasuk' => $no_suratmasuk])->row_array();
    }

    public function tambahSuratMasuk()
    {
        $new_file = $this->upload->data('file_name');
        $this->db->set('file_surat', $new_file);

        $data = [
            "no_suratmasuk" => $this->input->post('no_suratmasuk', true),
            "pengirim" => $this->input->post('pengirim', true),
            "jenis_surat" => $this->input->post('jenis_surat', true),
            "perihal" => $this->input->post('perihal', true),
            "tgl_surat" => $this->input->post('tgl_surat', true),
            "tgl_diterima" => $this->input->post('tgl_diterima', true),
        ];

        $this->db->insert('suratmasuk', $data);
    }

    public function hapusSuratMasuk($no_suratmasuk)
    {
        return $this->db->delete('suratmasuk', ['no_suratmasuk' => $no_suratmasuk]);
    }

    public function editSuratMasuk($id)
    {
        $data = [
            "no_suratmasuk" => $this->input->post('no_suratmasuk', true),
            "pengirim" => $this->input->post('pengirim', true),
            "jenis_surat" => $this->input->post('jenis_surat', true),
            "perihal" => $this->input->post('perihal', true),
            "tgl_surat" => $this->input->post('tgl_surat', true),
            "tgl_diterima" => $this->input->post('tgl_diterima', true)
        ];

        $this->db->where('no_suratmasuk', $id);
        $this->db->update('suratmasuk', $data);
    }
}
