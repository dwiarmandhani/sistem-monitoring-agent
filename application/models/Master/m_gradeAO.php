<?php 
 
class M_gradeao extends CI_Model{
	private $_table = "tbl_grade_ao";

	function getGradeAO($table){		
		return $this->db->get($table);
	}
	public function tambahGrade()
    {
        $data = array(
            'grade_name' => $this->input->post('grade_name', true),
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

	public function hapus($id)
    {
        $this->db->where('grade_id', $id);
        $this->db->delete($this->_table);
    }

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ['grade_id' => $id])->row_array();
    }

	public function ubahGrade()
    {
        $data = array(
            'grade_name' => $this->input->post('grade_name'),
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('grade_id', $this->input->post('grade_id'));
        $this->db->update($this->_table, $data);

    } 
}