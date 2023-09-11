<?php 
 
class Mastergradeao extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('master/m_gradeao');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		
		$data['dataAO'] = $this->m_gradeao->getGradeAO("tbl_grade_ao")->result_array();
		// print_r($data);
		$this->load->view('master/gradeao/v_mastergradeao', $data);
		
	}

	public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('grade_name', 'grade_name', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/gradeao/v_tambah');
        } else {
          $this->m_gradeao->tambahGrade();
          redirect('gradeagent');
        }
    }
	public function hapus($id)
    {
        $this->m_gradeao->hapus($id);
        redirect('gradeagent');
    }

	public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['grade'] = $this->m_gradeao->getById($id);

        $validation->set_rules('grade_name', 'grade_name', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('master/gradeao/v_ubah', $data);
        } else {
            $this->m_gradeao->ubahGrade();
			redirect('gradeagent');
        }
	}

}