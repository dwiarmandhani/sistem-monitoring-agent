<?php 
 
class M_produk extends CI_Model{
	private $_table = "tbl_produk";

	function getProduk($table){		
		return $this->db->get($table);
	}
	public function tambahProduk()
    {
        $data = array(
            'produk_name' => $this->input->post('produk_name', true),
            'produk_kategori' => $this->input->post('produk_kategori', true)
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

	public function hapus($id)
    {
        $this->db->where('produk_id', $id);
        $this->db->delete($this->_table);
    }

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ['produk_id' => $id])->row_array();
    }

	public function ubahProduk()
    {
        $data = array(
            'produk_name' => $this->input->post('produk_name'),
            'produk_kategori' => $this->input->post('produk_kategori')
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('produk_id', $this->input->post('produk_id'));
        $this->db->update($this->_table, $data);

    } 
}