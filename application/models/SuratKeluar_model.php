<?php

class SuratKeluar_model extends CI_Model
{
    public function getAllSuratKeluar()
    {
        return $this->db->get('suratkeluar')->result_array();
    }

    public function getSuratKeluarById($no_suratkeluar)
    {
        return $data['suratkeluar'] = $this->db->get_where('suratkeluar', ['no_suratkeluar' => $no_suratkeluar])->row_array();
    }

    public function tambahSuratKeluar()
    {
        $new_file = $this->upload->data('file_name');
        $this->db->set('file_surat', $new_file);

        $data = [
            "no_suratkeluar" => $this->input->post('no_suratkeluar', true),
            "pengirim" => $this->input->post('pengirim', true),
            "jenis_surat" => $this->input->post('jenis_surat', true),
            "perihal" => $this->input->post('perihal', true),
            "tgl_surat" => $this->input->post('tgl_surat', true),
            "tgl_diterima" => $this->input->post('tgl_diterima', true)
        ];

        $this->db->insert('suratkeluar', $data);
    }

    public function hapusSuratKeluar($no_suratkeluar)
    {
        $this->db->where('no_suratkeluar', $no_suratkeluar);
        $this->db->delete('suratkeluar');
    }

    public function editSuratKeluar($id)
    {
        $data = [
            "no_suratkeluar" => $this->input->post('no_suratkeluar', true),
            "pengirim" => $this->input->post('pengirim', true),
            "jenis_surat" => $this->input->post('jenis_surat', true),
            "perihal" => $this->input->post('perihal', true),
            "tgl_surat" => $this->input->post('tgl_surat', true),
            "tgl_diterima" => $this->input->post('tgl_diterima', true)
        ];

        $this->db->where('no_suratkeluar', $id);
        $this->db->update('suratkeluar', $data);
    }
}
