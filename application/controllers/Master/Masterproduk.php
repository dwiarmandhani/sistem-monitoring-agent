<?php 
 
class Masterproduk extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('master/m_produk');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		
		$data['dataproduk'] = $this->m_produk->getProduk("tbl_produk")->result_array();
		// print_r($data);
		$this->load->view('master/produk/v_produk', $data);
		
	}

	public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('produk_name', 'produk_name', 'required');
        $validation->set_rules('produk_kategori', 'produk_kategori', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/produk/v_tambah');
        } else {
          $this->m_produk->tambahProduk();
          redirect('produk');
        }
    }
	public function hapus($id)
    {
        $this->m_produk->hapus($id);
        redirect('produk');
    }

	public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['produk'] = $this->m_produk->getById($id);

        $validation->set_rules('produk_name', 'produk_name', 'required');
        $validation->set_rules('produk_kategori', 'produk_kategori', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/produk/v_ubah', $data);
        } else {
            $this->m_produk->ubahProduk();
			redirect('produk');
        }
	}

}