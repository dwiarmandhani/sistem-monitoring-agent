<?php 
 
class M_jenisindustri extends CI_Model{
	private $_table = "tbl_industri";
	private $_company = "tbl_company";

	function getJenisIndustri($table){		
		return $this->db->get($table);
	}
	public function tambahIndustri()
    {
        $data = array(
            'industri_name' => $this->input->post('industri_name', true),
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

	public function hapus($id)
    {
        $this->db->where('industri_id', $id);
        $this->db->delete($this->_table);
    }

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ['industri_id' => $id])->row_array();
    }

	public function ubahIndustri()
    {
        $data = array(
            'industri_name' => $this->input->post('industri_name'),
        );
        
        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('industri_id', $this->input->post('industri_id'));
        $this->db->update($this->_table, $data);

        

    } 

    public function ubahCompanyIndustri(){
        $dataCompany = array(
            'company_industri_name' => $this->input->post('industri_name'),
        );
        $this->db->where('company_industri_id',  $this->input->post('industri_id'));
        $this->db->update($this->_company, $dataCompany);
    }
}