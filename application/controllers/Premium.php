<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Premium extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model(array(
			'website/home_model',
			'website/menu_model',
		));

		// if ($this->session->userdata('isPremiumLogIn') == true)
		// 	redirect('premiumuser');
	}

	public function index($id = null)
	{
		$config = array();
		$config["base_url"] = base_url() . "premium/index";

		$this->pagination->initialize($config);

		$data['title'] = display('premium');
		#-------------------------------#
		$data['setting'] = $this->home_model->setting();
		// redirect if website status is disabled
		if ($data['setting']->status == 0)
			redirect(base_url('login'));
		$data['basics'] = $this->home_model->basic_setting();

		$data['languageList'] = $this->home_model->languageList();
		$data['section'] = $this->home_model->section('premium');
		$data['parent_menu'] = $this->menu_model->get_parent_menu();
		$data["links"] = $this->pagination->create_links();
		$data['content'] = $this->load->view('website/premiums', $data, true);
		$this->load->view('website/index', $data);
	}


	public function premiumValidate()
	{
		$this->form_validation->set_rules('nrc', 'NRC Number', 'required|max_length[50]');

		if ($this->form_validation->run() === true) {
			// $this->checkPremiumUser();
			$isUser = $this->checkPremiumUser();

			if ($isUser) {
				redirect('premiumuser');
			} else {
				$message['exception'] = 'NRC does not exsits';
				$this->session->set_flashdata($message);
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			$message['exception'] = validation_errors();
			$this->session->set_flashdata($message);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	// check if a user already exists from the mlife customer table

	public function checkPremiumUser()
	{
		$num_rows = $this->db->select('cus.nrc,cus.f_name,cus.l_name,cus.c_name,cus.nrc,cus.mobile_no,cus.email_id,cus.address1,cus.address2,cus.attachments,pop.plan_id,pop.sum_assured,pop.fixed_premium,pom.id,pom.policy_id,po.customer_id,po.policy_code')
			->from('customers AS cus')
			->join('policies AS po','po.customer_id=cus.id', 'inner')
			->join('policy_member AS pom','pom.policy_id=po.id', 'inner')
			->join('plan_dependents AS pop','pop.plan_id=po.plan_id', 'inner')
			->where('cus.nrc', $this->input->post('nrc', true))
			->get();

			$userInfo = $num_rows->result();
			// var_dump($userInfo);

		if ($num_rows->num_rows() > 0) {

			$this->session->set_userdata([
				'isPremiumLogIn' => true,
				'nrc' => $userInfo[0]->nrc,
				'sum_assured' => $userInfo[0]->sum_assured,
				'fixed_premium' => $userInfo[0]->fixed_premium,
				'plan_id' => $userInfo[0]->plan_id,
				'policy_id' => $userInfo[0]->policy_id,
				'policy_code' => $userInfo[0]->policy_code,
				'policy_member_id' => $userInfo[0]->id,
				'customer_id' => $userInfo[0]->customer_id,
				'f_name' => $userInfo[0]->f_name,
				'l_name' => $userInfo[0]->l_name,
				'c_name' => $userInfo[0]->c_name,
				'mobile_no' => $userInfo[0]->mobile_no,
				'email_id' => $userInfo[0]->email_id,
				'address1' => $userInfo[0]->address1,
				'address2' => $userInfo[0]->address2,
				'attachments' => $userInfo[0]->attachments,
				'full_name' =>$userInfo[0]->f_name." ". $userInfo[0]->l_name
			]);

			return True;
		} else {
			return False;
		}
	}
}
