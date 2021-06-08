<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Premiumuser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
            'website/home_model',
            'website/menu_model',
        ));

        if ($this->session->userdata('isPremiumLogIn') == false)
            redirect('premium');
    }

    public function index($id = null)
    {
        $config = array();
        $config["base_url"] = base_url() . "premiumuser/index";

        $this->pagination->initialize($config);

        $data['title'] = display('premiumuser');
        #-------------------------------#
        $data['setting'] = $this->home_model->setting();
        // redirect if website status is disabled
        if ($data['setting']->status == 0)
            redirect(base_url('premium'));
        $data['basics'] = $this->home_model->basic_setting();

        $data['languageList'] = $this->home_model->languageList();
        $data['section'] = $this->home_model->section('premiumusers');
        $data['parent_menu'] = $this->menu_model->get_parent_menu();
        $data["links"] = $this->pagination->create_links();
        $data['content'] = $this->load->view('website/premiumusers', $data, true);
        $this->load->view('website/index', $data);
    }
}
