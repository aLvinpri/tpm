<?php
class Lihatdata_model extends CI_model
{
    public function getSparepart()
    {
        $this->db->select('*');
        $this->db->order_by('id_part', 'ASC');
        return $this->db->get('part')->result_array();
    }

    public function getDetailSparepart($id)
    {
        return $this->db->get_where('part', ['id_part' => $id])->result_array();
    }
}
 
