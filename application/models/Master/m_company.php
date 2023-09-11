<?php

class M_company extends CI_Model
{
    private $_table = "tbl_company";

    function getCompany($table)
    {
        return $this->db->get($table);
    }
    public function tambahCompany()
    {
        $data = array(
            'company_name' => $this->input->post('company_name', true),
            'company_industri_id' => $this->input->post('company_industri_id', true),
            'company_industri_name' => $this->input->post('company_industri_name', true),
            'company_address' => $this->input->post('company_address', true),
            'company_phone' => $this->input->post('company_phone', true),
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }
    public function hapus($id)
    {
        $this->db->where('company_id', $id);
        $this->db->delete($this->_table);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['company_id' => $id])->row_array();
    }
    public function ubahCompany()
    {
        $data = array(
            'company_name' => $this->input->post('company_name', true),
            'company_industri_id' => $this->input->post('company_industri_id', true),
            'company_industri_name' => $this->input->post('company_industri_name', true),
            'company_address' => $this->input->post('company_address', true),
            'company_phone' => $this->input->post('company_phone', true),
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('company_id', $this->input->post('company_id'));
        $this->db->update($this->_table, $data);
    }
}
