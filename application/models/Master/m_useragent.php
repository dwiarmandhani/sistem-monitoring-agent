<?php 
 
class M_useragent extends CI_Model{
	private $_table = "tbl_user";
	private $_tableRole = "tbl_user_role";
	function getAgent($table,$where){		
		return $this->db->get_where($table,$where);
	}
	public function tambahUserAgent()
    {
        $data = array(
            'user_namalengkap' => $this->input->post('user_namalengkap', true),
            'username' => $this->input->post('username', true),
            'user_password' => md5($this->input->post('user_password', true)),
            'user_role_id' => $this->input->post('user_role_id', true),
            'user_role' => $this->input->post('user_role', true),
            'user_phone' => $this->input->post('user_phone', true),
        );
        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }
    public function hapus($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete($this->_table);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['user_id' => $id])->row_array();
    }
    public function ubahUserAgent()
    {
        $data = array(
            'user_namalengkap' => $this->input->post('user_namalengkap', true),
            'username' => $this->input->post('username', true),
            'user_password' => md5($this->input->post('user_password', true)),
            'user_role_id' => $this->input->post('user_role_id', true),
            'user_role' => $this->input->post('user_role', true),
            'user_phone' => $this->input->post('user_phone', true),
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('user_id', $this->input->post('user_id'));
        $this->db->update($this->_table, $data);

    } 
}