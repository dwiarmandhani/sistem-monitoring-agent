<?php

class Agentoperational extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('agentoperational/m_agentoperational');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    function index()
    {
        $data['agentoperational'] = $this->m_agentoperational->getAgent("tbl_agent_operational")->result_array();

        $this->load->view('agentoperational/v_agentoperational', $data);
    }
    public function tambah()
    {
        $query = "SELECT * FROM tbl_user WHERE user_role_id = 2";
        $data['dataagent'] = $this->db->query($query)->result_array();
        $queryGrade = "SELECT * FROM tbl_grade_ao";
        $data['datagrade'] = $this->db->query($queryGrade)->result_array();

        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('agent_name', 'Nama', 'required');
        $validation->set_rules('agent_grade', 'Grade', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('agentoperational/v_tambah', $data);
        } else {
            $this->m_agentoperational->tambahAgent();
            redirect('agentoperational/agentoperational');
        }
    }

    public function hapus($id)
    {
        $this->m_agentoperational->hapus($id);
        redirect('agentoperational/agentoperational');
    }

    public function ubah($id)
    {
        $query = "SELECT * FROM tbl_user WHERE user_role_id = 2";
        $data['dataagent'] = $this->db->query($query)->result_array();
        $queryGrade = "SELECT * FROM tbl_grade_ao";
        $data['datagrade'] = $this->db->query($queryGrade)->result_array();

        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['agent'] = $this->m_agentoperational->getById($id);

        $validation->set_rules('agent_name', 'Nama', 'required');
        $validation->set_rules('agent_grade', 'Grade', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('agentoperational/v_ubah', $data);
        } else {
            $this->m_agentoperational->ubahAgent();
            redirect('agentoperational/agentoperational');
        }
    }
}
