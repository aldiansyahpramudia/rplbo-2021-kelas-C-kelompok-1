<?php

class LaporanPengajuan_model extends CI_Model {
    public function getAllLaporanPengajuan()
    {
        return $this->db->get('laporanpengajuan')->result_array();
    }
}