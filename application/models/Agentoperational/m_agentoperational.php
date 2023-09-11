<?php

class M_agentoperational extends CI_Model
{
    function getAgent($table)
    {
        return $this->db->get($table);
    }
    function tambahAgent()
    {
        $name = $this->input->post('agent_name', true);
        $query = "SELECT user_id FROM tbl_user WHERE user_namalengkap = '$name'";
        $hasil = $this->db->query($query)->row();

        $data = array(
            'agent_user_id' => $hasil->user_id,
            'agent_name' => $this->input->post('agent_name', true),
            'agent_grade' => $this->input->post('agent_grade', true)
        );
        $this->db->insert('tbl_agent_operational', $data);
    }
    public function hapus($id)
    {
        $this->db->where('agent_id', $id);
        $this->db->delete('tbl_agent_operational');
    }

    public function getById($id)
    {
        return $this->db->get_where('tbl_agent_operational', ['agent_id' => $id])->row_array();
    }

    public function ubahAgent()
    {
        $name = $this->input->post('agent_name', true);
        $query = "SELECT user_id FROM tbl_user WHERE user_namalengkap = '$name'";
        $hasil = $this->db->query($query)->row();

        $data = array(
            'agent_user_id' => $hasil->user_id,
            'agent_name' => $this->input->post('agent_name', true),
            'agent_grade' => $this->input->post('agent_grade', true)
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('agent_id', $this->input->post('agent_id'));
        $this->db->update('tbl_agent_operational', $data);
    }
}
