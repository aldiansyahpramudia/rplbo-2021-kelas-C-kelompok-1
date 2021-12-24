<?php

class LaporanPengajuan_model extends CI_Model
{
    public function getAllLaporanPengajuan()
    {
        return $this->db->get('laporanpengajuan')->result_array();
    }

    public function getLaporanPengajuanById($id_pengajuan)
    {
        return $data['laporanpengajuan'] = $this->db->get_where('laporanpengajuan', ['id_pengajuan' => $id_pengajuan])->row_array();
    }

    public function pengajuanSurat()
    {
        $data = [
            "id" => $this->input->post('id'),
            "nama_pengirim" => $this->input->post('nama_pengirim', true),
            "no_induk" => $this->input->post('no_induk', true),
            "email" => $this->input->post('email', true),
            "jenis_surat" => $this->input->post('jenis_surat', true),
            "perihal" => $this->input->post('perihal', true),
            "keterangan" => $this->input->post('keterangan', true),
            "jenis_pengajuan" => $this->input->post('jenis_pengajuan', true),
            "status" => "Belum Diproses",
            "tgl_diajukan" => time()
        ];

        $this->db->insert('laporanpengajuan', $data);
    }

    public function hapusLaporanPengajuan($id_pengajuan)
    {
        return $this->db->delete('laporanpengajuan', ['id_pengajuan' => $id_pengajuan]);
    }

    public function proses($id_pengajuan)
    {
        $data = ["status" => "Sedang Diproses"];

        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('laporanpengajuan', $data);
    }

    public function selesai($id_pengajuan)
    {
        $data = ["status" => "Selesai Diproses"];

        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('laporanpengajuan', $data);
    }

    public function diterima($id_pengajuan)
    {
        $data = ["status" => "Diterima"];

        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('laporanpengajuan', $data);
    }

    public function ditolak($id_pengajuan)
    {
        $data = ["status" => "Ditolak"];

        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('laporanpengajuan', $data);
    }

    public function jumlahLaporanPengajuan()
    {
        return $this->db->get('laporanpengajuan')->num_rows();
    }
}
