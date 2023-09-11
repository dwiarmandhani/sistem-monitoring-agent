<?php

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	function index()
	{
		$queryProspekNumber = "SELECT * FROM tbl_prospek";
		$data['jumlahProspek'] = $this->db->query($queryProspekNumber)->num_rows();
		$querySuerveyNumer = "SELECT * FROM tbl_survey";
		$data['jumlahSurvey'] = $this->db->query($querySuerveyNumer)->num_rows();
		$queryMinat = "SELECT * FROM tbl_survey WHERE survey_minat = 'BERMINAT MENGAJUKAN'";
		$data['jumlahBerminat'] = $this->db->query($queryMinat)->num_rows();
		$queryAgent = "SELECT * FROM tbl_agent_operational";
		$data['jumlahAgent'] = $this->db->query($queryAgent)->num_rows();
		$this->load->view('v_dashboard', $data);
	}
}
