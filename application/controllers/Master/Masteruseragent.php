<?php 
 
class Masteruseragent extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('master/m_useragent');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$where = array(
			'user_role' => 'user_agent'
		);
		$data['dataAgent'] = $this->m_useragent->getAgent("tbl_user",$where)->result();
		// print_r($data);
		$this->load->view('master/useragent/v_masteruseragent', $data);
		
	}
	public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('user_namalengkap', 'user_namalengkap', 'required');
        $validation->set_rules('username', 'username', 'required');
        $validation->set_rules('user_password', 'user_password', 'required');
        // $validation->set_rules('user_role_id', 'user_role_id', 'required');
        // $validation->set_rules('user_role', 'user_role', 'required');
        $validation->set_rules('user_phone', 'user_phone', 'required');
        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/useragent/v_tambah');
        } else {
		
          $this->m_useragent->tambahUserAgent();
          redirect('useragent');
        }
    }
	public function hapus($id)
    {
        $this->m_useragent->hapus($id);
        redirect('useragent');
    }
	public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['useragent'] = $this->m_useragent->getById($id);

        $validation->set_rules('user_namalengkap', 'user_namalengkap', 'required');
        $validation->set_rules('username', 'username', 'required');
        $validation->set_rules('user_password', 'user_password', 'required');
        // $validation->set_rules('user_role_id', 'user_role_id', 'required');
        // $validation->set_rules('user_role', 'user_role', 'required');
        $validation->set_rules('user_phone', 'user_phone', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/useragent/v_ubah', $data);
        } else {
            $this->m_useragent->ubahUserAgent();
			redirect('useragent');
        }
	}
}