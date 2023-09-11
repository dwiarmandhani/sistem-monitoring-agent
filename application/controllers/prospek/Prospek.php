<?php

class Prospek extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('prospek/m_prospek');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    function index()
    {
        $query = "SELECT * FROM tbl_prospek pro
                    INNER JOIN tbl_industri ind
                    on pro.industri_id = ind.industri_id
                    INNER JOIN tbl_company com
                    on pro.company_id = com.company_id";
        $data['prospek'] = $this->db->query($query)->result_array();

        $this->load->view('prospek/v_prospek', $data);
    }
    function tambah()
    {
        $query = "SELECT company_name FROM tbl_company";
        $data['company'] = $this->db->query($query)->result_array();

        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $validation->set_rules('company_name', 'Nama', 'required');
        if ($validation->run() == FALSE) {
            $this->load->view('prospek/v_tambah', $data);
        } else {
            $this->m_prospek->tambahProspek();
            redirect('prospek/prospek');
        }
    }

    public function ubah($id)
    {
        $query = "SELECT company_name FROM tbl_company";
        $data['company'] = $this->db->query($query)->result_array();

        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['dataprospek'] = $this->m_prospek->getById($id);

        $validation->set_rules('company_name', 'Nama', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('prospek/v_ubah', $data);
        } else {
            $this->m_prospek->ubahProspek();
            redirect('prospek/prospek');
        }
    }
    public function hapus($id)
    {
        $this->m_prospek->hapus($id);
        redirect('prospek/prospek');
    }
}
