<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
            'dashboard_model',
            'user_dashboard_model',
            'setting_model',
            'noticeboard/notice_model',
            'messages/message_model',
            'website/home_model'
        ));
    }

    public function index()
    {
        // redirect to dashboard home page

        $this->form_validation->set_rules('agentcode', 'Agent code', 'required|max_length[32]');
        $this->form_validation->set_rules('password', display('password'), 'required|max_length[32]|md5');

        #-------------------------------#

        $data['user'] = (object)$postData = [
            'agentcode' => $this->input->post('agentcode', true),
            'password'  => md5($this->input->post('password', true)),
        ];


        #-------------------------------#
        if ($this->form_validation->run() === true) {
            //check user data
            $agentData = $this->check_agentcode();

            if ($agentData === NULL) {
                $this->session->set_flashdata('exception', 'Agent code or Password Error');
                // redirect to login form
                redirect('login');
            } else {
                // codeigniter session stored data          
                $session_data = $this->session->set_userdata([ 
                    'isLogIn'          => true,
                    'agent_f_name'     => $agentData->f_name,
                    'agent_l_name'     => $agentData->l_name,
                    'agent_fullname'   => $agentData->f_name . " " . $agentData->l_name,
                    'agent_code'       => $agentData->agent_code,
                    'agent_commission' => $agentData->agent_commission,
                    'mobile_no'        => $agentData->mobile_no,
                    'phone_no'         => $agentData->phone_no,
                ]);

                redirect('home');
                // var_dump($agentData);
            }
        } else {
            $this->load->view('layout/login_wrapper', $data);
        }
    }

    public function check_agentcode()
    {

        $agentExists = $this->db->select('
                                            f_name, 
                                            l_name, 
                                            agent_code,
                                            agent_commission, 
                                            email_id,
                                            mobile_no, 
                                            phone_no
                                            ')
            ->where('agent_code', $this->input->post('agentcode', true))
            ->get('agents')
            ->row();


        return $agentExists;
    }

    public function logout()
    {
        #store user log
        $user_log = array(
            'user_id'   => $this->session->userdata('user_id'),
            'out_time'   => date('H:i:s'),
            'status'   => 0
        );
        $this->dashboard_model->log_update($user_log);
        #---------------------------------------#

        $this->session->sess_destroy();
        redirect('home');
    }
};
