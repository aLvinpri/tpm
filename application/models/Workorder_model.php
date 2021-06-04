<?php
class Workorder_model extends CI_model
{
    public function getPilihMesin()
    {
        $this->db->select('id_mesin, nm_mesin, no_urut');
        $this->db->order_by('id_mesin', 'ASC');
        return $this->db->get('mesin')->result_array();
    }

    public function getPilihMaintenance()
    {
        $this->db->select('nama');
        return $this->db->get('kar')->result_array();
    }

    public function inputDataWo()
    {
        $data = [
            "id_no" => "",
            "id_wo" => $this->input->post('txtbag', true) . '/' . $this->input->post('txtlok', true) . '/' . $this->input->post('no', true),
            "id_mesin" => $this->input->post('idmesin', true),
            "id_lostime" => $this->input->post('txtlosstime', true),
            "date_current" => $this->input->post('tgl_input', true),
            "dibuat_oleh" => $this->input->post('txtdibuat', true),
            "diterima_oleh" => $this->input->post('rd_diterima', true),
            "problem" => $this->input->post('txtpermasalahan', true),
            "penyebab" => $this->input->post('txtpenyebab', true),
            "tindakan" => $this->input->post('txttindakan', true),
            "tgl_dikerjakan" => $this->input->post('tgl_dikerjakan', true),
            "diserahkan" => $this->input->post('txtdiserahkan', true),
            "tgl_diserahkan" => $this->input->post('tgl_diserahkan', true),
            "jenis_pekerjaan" => $this->input->post('txtjenis_pekerjaan', true),
            "status_mesin" => $this->input->post('status', true),
            "diterima" => $this->input->post('txtditerima', true),
            "pelaksana" => $this->input->post('txtpelaksana', true)
        ];

        $this->db->insert('doc_wo', $data);
    }

    public function getLastIdWo()
    {
        $this->db->select_max('id_no');
        $query = $this->db->get('doc_wo')->row_array();
        return $query;
        // $query = $this->db->get('my_table', 2);
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
