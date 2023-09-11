<?php 
 
class Mastercompany extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('master/m_company');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		
		$data['datacompany'] = $this->m_company->getCompany("tbl_company")->result_array();
		// print_r($data);
		$this->load->view('master/company/v_company', $data);
		
	}
    public function tambah()
    {
        $data['dataindustri'] = $this->m_company->getCompany("tbl_industri")->result_array();
		// $this->load->view('master/company/v_tambah', $data);
        
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('company_name', 'company_name', 'required');
        $validation->set_rules('company_industri_name', 'company_industri_name', 'required');
        $validation->set_rules('company_address', 'company_address', 'required');
        $validation->set_rules('company_phone', 'company_phone', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/company/v_tambah', $data);
        } else {
          $this->m_company->tambahCompany();
          redirect('company');
        }
    }
    public function hapus($id)
    {
        $this->m_company->hapus($id);
        redirect('company');
    }
    public function ubah($id)
    {
        $data['dataindustri'] = $this->m_company->getCompany("tbl_industri")->result_array();
		// $this->load->view('master/company/v_tambah', $data);
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['company'] = $this->m_company->getById($id);

        $validation->set_rules('company_name', 'company_name', 'required');
        $validation->set_rules('company_industri_id', 'company_industri_id', 'required');
        $validation->set_rules('company_industri_name', 'company_industri_name', 'required');
        $validation->set_rules('company_address', 'company_address', 'required');
        $validation->set_rules('company_phone', 'company_phone', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/company/v_ubah', $data);
        } else {
            $this->m_company->ubahCompany();
			redirect('company');
        }
	}
}