<?php 
 
class Masterindustri extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('master/m_jenisindustri');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		
		$data['dataIndustri'] = $this->m_jenisindustri->getJenisIndustri("tbl_industri")->result_array();
		// print_r($data);
		$this->load->view('master/jenisindustri/v_jenisindustri', $data);
		
	}

	public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('industri_name', 'industri_name', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/jenisindustri/v_tambah');
        } else {
          $this->m_jenisindustri->tambahIndustri();
          redirect('industri');
        }
    }
	public function hapus($id)
    {
        $this->m_jenisindustri->hapus($id);
        
        $dataCompany = array(
            'company_industri_id' => '',
            'company_industri_name' => '',
        );
        $this->db->where('company_industri_id',  $id);
        $this->db->update('tbl_company', $dataCompany);
        redirect('industri');
    }

	public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['industri'] = $this->m_jenisindustri->getById($id);

        $validation->set_rules('industri_name', 'industri_name', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/jenisindustri/v_ubah', $data);
        } else {
            $this->m_jenisindustri->ubahIndustri();
            $this->m_jenisindustri->ubahCompanyIndustri();
			redirect('industri');
        }
	}

}