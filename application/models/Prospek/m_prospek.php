<?php

class M_prospek extends CI_Model
{
    function getProspek($table)
    {
        return $this->db->get($table);
    }
    function tambahProspek()
    {
        $company_name = $this->input->post('company_name', true);

        $query = "SELECT * FROM tbl_company com
                    INNER JOIN tbl_industri ind
                    on com.company_industri_id = ind.industri_id
                    WHERE com.company_name = '$company_name'";
        // $query = "SELECT * FROM tbl_prospek pro
        //             INNER JOIN tbl_industri ind
        //             on pro.industri_id = ind.industri_id
        //             INNER JOIN tbl_company com
        //             on pro.company_id = com.company_id

        //             WHERE com.company_name = '$company_name'";
        $hasil = $this->db->query($query)->row();
        // var_dump($hasil);
        // die;
        $data = array(
            'industri_id' => $hasil->industri_id,
            'company_id' => $hasil->company_id
        );
        $this->db->insert('tbl_prospek', $data);
    }
    function getById($id)
    {
        $query = "SELECT * FROM tbl_prospek pro
        INNER JOIN tbl_industri ind
        on pro.industri_id = ind.industri_id
        INNER JOIN tbl_company com
        on pro.company_id = com.company_id
        
        WHERE pro.prospek_id = '$id'";
        return $this->db->query($query)->row_array();
    }
    function ubahProspek()
    {
        $company_name = $this->input->post('company_name', true);

        $query = "SELECT * FROM tbl_company com
                    INNER JOIN tbl_industri ind
                    on com.company_industri_id = ind.industri_id
                    WHERE com.company_name = '$company_name'";
        $hasil = $this->db->query($query)->row();
        $data = array(
            'industri_id' => $hasil->industri_id,
            'company_id' => $hasil->company_id
        );
        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('prospek_id', $this->input->post('prospek_id'));
        $this->db->update('tbl_prospek', $data);
    }
    public function hapus($id)
    {
        $this->db->where('prospek_id', $id);
        $this->db->delete('tbl_prospek');
    }
}
