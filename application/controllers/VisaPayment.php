<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisaPayment extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model(array(
			'website/home_model',
			'website/menu_model',
		));

	}

	public function index($id = null)
	{
		$config = array();
		$config["base_url"] = base_url() . "Unsupported/index";

		$this->pagination->initialize($config);

		$data['title'] = display('VisaPayment');
		#-------------------------------#
		$data['setting'] = $this->home_model->setting();
		// redirect if website status is disabled
		if ($data['setting']->status == 0)
			redirect(base_url('login'));
		$data['basics'] = $this->home_model->basic_setting();

		$data['languageList'] = $this->home_model->languageList();
		$data['section'] = $this->home_model->section('VisaPayment');
		$data['parent_menu'] = $this->menu_model->get_parent_menu();
		$data["links"] = $this->pagination->create_links();
		$data['content'] = $this->load->view('website/VisaPayment', $data, true);
		$this->load->view('website/index', $data);
	}
	
}
