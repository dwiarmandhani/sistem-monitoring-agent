<?php 
 
class Masteruseradmin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('master/m_useradmin');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$where = array(
			'user_role' => 'admin',
			'username !=' => $this->session->userdata('nama')
		);
		$data['dataAdmin'] = $this->m_useradmin->getAdmin("tbl_user",$where)->result();
		// print_r($data);
		$this->load->view('master/useradmin/v_masteruseradmin', $data);
		
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
            $this->load->view('master/useradmin/v_tambah');
        } else {
		
          $this->m_useradmin->tambahAdmin();
          redirect('useradmin');
        }
    }
	public function hapus($id)
    {
        $this->m_useradmin->hapus($id);
        redirect('useradmin');
    }

	public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['admin'] = $this->m_useradmin->getById($id);

        $validation->set_rules('user_namalengkap', 'user_namalengkap', 'required');
        $validation->set_rules('username', 'username', 'required');
        $validation->set_rules('user_password', 'user_password', 'required');
        // $validation->set_rules('user_role_id', 'user_role_id', 'required');
        // $validation->set_rules('user_role', 'user_role', 'required');
        $validation->set_rules('user_phone', 'user_phone', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/useradmin/v_ubah', $data);
        } else {
            $this->m_useradmin->ubahAdmin();
			redirect('useradmin');
        }
	}
}