<?php

class M_survey extends CI_Model
{
    function getSurvey($table)
    {
        return $this->db->get($table);
    }
    function tambahSurvey($gambar)
    {
        $gambar_new = json_encode($gambar);
        $companyname = $this->input->post('survey_company_name', true);
        $companyQuery = "SELECT company_id, company_name FROM tbl_company WHERE company_name = '$companyname'";
        $dataCompany = $this->db->query($companyQuery)->row();
        $agentname = $this->session->userdata('nama');
        $agentQuery = "SELECT user_id FROM tbl_user WHERE username = '$agentname'";
        $dataAgent = $this->db->query($agentQuery)->row();
        // var_dump($dataAgent);
        // die;


        $data = array(
            'survey_date_visit' => $this->input->post('survey_date_visit', true),
            'survey_company_name' => $dataCompany->company_name,
            'survey_pic_name' => $this->input->post('survey_pic_name', true),
            'survey_pic_phone' => $this->input->post('survey_pic_phone', true),
            'survey_documentation' => $gambar_new,
            'survey_minat' => $this->input->post('survey_minat', true),
            'survey_produk' => $this->input->post('survey_produk', true),
            'survey_sub_produk' => $this->input->post('survey_sub_produk', true),
            'survey_plafond' => $this->input->post('survey_plafond', true),
            'survey_tempat' => $this->input->post('survey_place', true),
            'survey_agunan' => $this->input->post('survey_agunan', true),
            'survey_product_holding' => $this->input->post('survey_holding', true),
            'survey_alasan' => $this->input->post('survey_alasan', true),
            'survey_company_id' => $dataCompany->company_id,
            'survey_agent_user_id' => isset($dataAgent) ? $dataAgent->user_id : 99,
        );
        $this->db->insert('tbl_survey', $data);
    }
}
