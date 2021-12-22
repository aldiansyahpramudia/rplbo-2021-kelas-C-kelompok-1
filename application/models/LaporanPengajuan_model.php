<?php

class LaporanPengajuan_model extends CI_Model
{
    public function getAllLaporanPengajuan()
    {
        return $this->db->get('laporanpengajuan')->result_array();
    }

    public function pengajuanSurat()
    {
        $data = [
            "nama_pengirim" => $this->input->post('nama_pengirim', true),
            "no_induk" => $this->input->post('no_induk', true),
            "email" => $this->input->post('email', true),
            "jenis_surat" => $this->input->post('jenis_surat', true),
            "perihal" => $this->input->post('perihal', true),
            "keterangan" => $this->input->post('keterangan', true),
            "jenis_pengajuan" => $this->input->post('jenis_pengajuan', true),
        ];

        $this->db->insert('laporanpengajuan', $data);
    }
}
