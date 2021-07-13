<?php
class Importdata_model extends CI_model
{
    public function getPilihMesin()
    {
        $this->db->select('id_mesin, nm_mesin, no_urut');
        $this->db->order_by('id_mesin', 'ASC');
        return $this->db->get('mesin')->result_array();
    }
}
