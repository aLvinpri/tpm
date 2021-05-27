<?php
class Workorder_model extends CI_model
{
    public function getPilihMesin()
    {
        $this->db->select('id_mesin, nm_mesin, no_urut');
        $this->db->order_by('id_mesin', 'ASC');
        return $this->db->get('mesin')->result_array();
    }

    public function tambahDataWorkorder()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->insert('Workorder', $data);
    }

    public function hapusDataWorkorder($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('Workorder', ['id' => $id]);
    }

    public function getWorkorderById($id)
    {
        return $this->db->get_where('Workorder', ['id' => $id])->row_array();
    }

    public function ubahDataWorkorder()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('Workorder', $data);
    }

    public function cariDataWorkorder()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('Workorder')->result_array();
    }
}
