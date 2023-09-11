<?php

class Survey extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('master/m_company');
        $this->load->model('survey/m_survey');

        $this->load->helper('url');

        // $this->load->library('upload');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    public function index()
    {
        $query = "SELECT * FROM tbl_survey s
        INNER JOIN tbl_company com
        on s.survey_company_id = com.company_id
        INNER JOIN tbl_user ao
        on s.survey_agent_user_id = ao.user_id";
        $data['survey'] = $this->db->query($query)->result_array();

        $this->load->view('survey/v_survey', $data);
    }

    public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('survey_date_visit', 'Tanggal', 'required');
        $validation->set_rules('survey_company_name', 'Nama Perusahaan', 'required');
        $validation->set_rules('survey_pic_name', 'PIC', 'required');
        $validation->set_rules('survey_pic_phone', 'No Telpon', 'required');
        // $validation->set_rules('survey_documentation', 'Dokumentasi', 'required');
        $validation->set_rules('survey_minat', 'Keberminatan', 'required');
        $validation->set_rules('survey_produk', 'Produk', 'required');
        // $validation->set_rules('survey_sub_produk', 'Sub Produk', 'required');
        $validation->set_rules('survey_plafond', 'Plafond', 'required');
        $validation->set_rules('survey_place', 'Tempat', 'required');
        $validation->set_rules('survey_agunan', 'Agunan', 'required');
        $validation->set_rules('survey_holding', 'Holding', 'required');
        $validation->set_rules('survey_alasan', 'Alasan', 'required');

        //data pilihan perusahaan
        $data['company'] = $this->m_company->getCompany("tbl_company")->result_array();
        // //data kategori produk
        // $queryProdukKat = "SELECT produk_kategori FROM tbl_produk";
        // $data['produk'] = $this->db->query($queryProdukKat)->result_array();

        //data kategori produk UMKM
        $queryProdukUmkm = "SELECT produk_name FROM tbl_produk WHERE produk_kategori = 'UMKM'";
        $data['umkm'] = $this->db->query($queryProdukUmkm)->result_array();
        //data kategori produk komersial
        $queryProdukKomersial = "SELECT produk_name FROM tbl_produk WHERE produk_kategori = 'KOMERSIAL'";
        $data['komersial'] = $this->db->query($queryProdukKomersial)->result_array();

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('survey/v_tambah', $data);
        } else {
            $gambar = [];

            $count = count($_FILES['survey_documentation']['name']);
            for ($i = 0; $i < $count; $i++) {

                if (!empty($_FILES['survey_documentation']['name'][$i])) {

                    $_FILES['file']['name'] = $_FILES['survey_documentation']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['survey_documentation']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['survey_documentation']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['survey_documentation']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['survey_documentation']['size'][$i];

                    $config['upload_path'] = 'upload/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size'] = '5000';
                    $config['file_name'] = $_FILES['survey_documentation']['name'][$i];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('file')) {
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];

                        $gambar['survey_documentation'][] = $filename;
                    }
                }
            }

            // var_dump($gambar);
            // die;

            $this->m_survey->tambahSurvey($gambar);
            redirect('survey/survey');
        }
    }
}
