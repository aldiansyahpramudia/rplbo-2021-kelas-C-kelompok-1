<?php

class KelolaUser_model extends CI_Model
{
    public function getAllUsers()
    {
        return $this->db->get('users')->result_array();
    }

    public function getUsersById($id)
    {
        return $data['users'] = $this->db->get_where('users', ['id' => $id])->row_array();
    }

    public function hapusUser($id)
    {
        return $this->db->delete('users', ['id' => $id]);
    }

    public function editKelolaUser($id)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "role_id" => $this->input->post('role_id', true)
        ];

        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }
}
