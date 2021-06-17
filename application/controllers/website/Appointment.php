<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appointment extends CI_Controller
{

    // create new user
    public function new_user()
    {

        $data['module'] = display("website");
        $data['title'] = display('registration');

        /* -------------- Validate user information ----------------- */
        $this->form_validation->set_rules('mobile', 'phone number ', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('terms', 'Terms and Conditions', 'required');

        $is_user_reg = true;

        if ($this->form_validation->run() === false) {
            $message['exception'] = validation_errors();
            $this->session->set_flashdata($message);
            redirect($_SERVER['HTTP_REFERER']);
        }

        if ($is_user_reg === true) {


            $message['nextTab'] = '
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                                        <script type="text/javascript">
                                            var target = $("#nav-profile-tab");
                                            target.removeClass("disabled");
                                            target.trigger("click");
                                        </script>
                                        ';

            $this->session->set_flashdata($message);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $message['exception'] = "Phone number already exists";
            $this->session->set_flashdata($message);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    // check if a user already exists from the mlife customer table

    public function checkUser()
    {
        $num_rows = $this->db->select('*')
            ->from('customers')
            ->where('mobile_no', $this->input->post('mobile', true))
            ->get();


        if ($num_rows > 0) {
            return False;
        } else {
            return True;
        }
    }

    // Get a registered user from db

    public function getUser()
    {
        $user_rows = $this->db->select('*')
            ->from('customers')
            ->where('mobile_no', $this->input->post('mobile', true))
            ->get();

        return $user_rows;
    }

    // Get a cover from mlife db

    public function getCovers()
    {
        $Cover_rows = $this->db->select('*')
            ->from('covers')
            ->get();

        return $Cover_rows;
    }

    // Get Premiums from mlife db

    public function getPremiums()
    {
        $Premiums_rows = $this->db->select('*')
            ->from('premiums')
            ->get();

        return $Premiums_rows;
    }

    //Inser data into temp_table
    function saveDataToTemp()
    {
        // First, Fetch some data
        $coveredArr  = $this->input->post('covered', true);
        $surnameArr  = $this->input->post('surname', true);
        $othernameArr  = $this->input->post('othername', true);
        $dobArr  = $this->input->post('dob', true);
        $genderArr  = $this->input->post('gender', true);
        $nrcArr  = $this->input->post('nrc1', true);
        $premiumArr  = $this->input->post('premium', true);
        $suminputArr  = $this->input->post('suminput', true);

        array_map(
            function (
                $covered,
                $surname,
                $othername,
                $dob,
                $gender,
                $nrc,
                $premium,
                $suminput
            ) {

                $this->db->insert('temparray', array(
                    'covered' =>    $covered,
                    'surname' =>    $surname,
                    'othername' =>    $othername,
                    'dob' =>    $dob,
                    'gender' =>    $gender,
                    'nrc' =>    $nrc,
                    'premium' =>    $premium,
                    'suminput' =>    $suminput,
                ));
            },
            $coveredArr,
            $surnameArr,
            $othernameArr,
            $dobArr,
            $genderArr,
            $nrcArr,
            $premiumArr,
            $suminputArr
        );

        // for ($i = 0; $i < COUNT($covered); $i++) {

        //     $this->db->insert('temparray', array(
        //         'covered' =>    $covered,
        //         'surname' =>    $surname,
        //         'othername' =>    $othername,
        //         'dob' =>    $dob,
        //         'gender' =>    $gender,
        //         'nrc' =>    $nrc,
        //         'premium' =>    $premium,
        //         'suminput' =>    $suminput,
        //     ));
        // }
    }

    //Inser data into temp_table
    function getTemp()
    {

        return  $this->db->select('*')
            ->from('temparray')
            ->get();
    }

    public function mobile()
    {
        // $TableDataArr = [];

        // foreach ($this->input->post('covered', true) as $covered) {
        //     array_push($TableDataArr, $covered);
        // }
        // foreach ($this->input->post('surname', true) as $surname) {
        //     array_push($TableDataArr, $surname);
        // }
        // foreach ($this->input->post('othername', true) as $othername) {
        //     array_push($TableDataArr, $othername);
        // }
        // foreach ($this->input->post('dob', true) as $dod) {
        //     array_push($TableDataArr, $dod);
        // }
        // foreach ($this->input->post('gender', true) as $gender) {
        //     array_push($TableDataArr, $gender);
        // }
        // foreach ($this->input->post('nrc', true) as $nrc) {
        //     array_push($TableDataArr, $nrc);
        // }
        // foreach ($this->input->post('premium', true) as $premium) {
        //     array_push($TableDataArr, $premium);
        // }
        // foreach ($this->input->post('suminput', true) as $suminput) {
        //     array_push($TableDataArr, $suminput);
        // }

       

        $this->session->set_userdata([
            'last_name' => $this->input->post("last_name", true),
            'other_name' => $this->input->post("other_name", true),
            'postalAddress' => $this->input->post("postalAddress", true),
            'physicalAddress' => $this->input->post("physicalAddress", true),
            'emailAddress' => $this->input->post("emailAddress", true),
            'phoneNumber' => $this->input->post("phoneNumber", true),
            'date1' => $this->input->post("date1", true),
            'nrc' => $this->input->post("nrc", true),
            'occupations' => $this->input->post("occupations", true),
            'gender1' => $this->input->post("gender1", true),
            'policy_type' => $this->input->post("2", true),
            'plan_id' => $this->input->post("5", true),
            'plan_code' => $this->input->post("6", true),
            'premium' => $this->input->post("4", true),
            'sumasured' => $this->input->post("5", true),
            'paymentId' => $this->input->post("id", true),
            'recharge' => $this->input->post("recharge", true),
            // 'tableData' => $TableDataArr,
        ]);

        $phone_no  = $this->input->post("airtel_number", true);
        $reference = $phone_no . date("his");

        $soap_request = '<?xml version="1.0" encoding="UTF-8"?>
                            <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:kon="http://konik.cgrate.com">
                                <soapenv:Header>
                                    <wsse:Security soapenv:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                                        <wsse:UsernameToken wsu:Id="UsernameToken-1" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
                                        <wsse:Username>1521182044029</wsse:Username>
                                        <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">P5oh5Xsj</wsse:Password>
                                        </wsse:UsernameToken>
                                    </wsse:Security>
                            </soapenv:Header>
                            <soapenv:Body>
                                <kon:processCustomerPayment>
                                    <transactionAmount>' . 1 . '</transactionAmount>
                                    <customerMobile>' . $phone_no . '</customerMobile>
                                        <paymentReference>' . $reference . '</paymentReference>
                                    </kon:processCustomerPayment>
                                </soapenv:Body>
                                </soapenv:Envelope>
                                ';

        $headers = array(
            "Content-type: text/xml",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: http://213.193.34.197:55555/Konik/KonikWs",
            "Content-length: " . strlen($soap_request),
        );

        $url = "http://213.193.34.197:55555/Konik/KonikWs";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $soap_request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $output = curl_exec($ch);
        curl_close($ch);

        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $output);

        // var_dump($reference);

        echo
        '
        <link href="' . base_url('assets_web/css/semantic.css') . '" type="text/css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        ' . form_open_multipart("website/appointment/done", 'id="processInfo"') . '
            <div style="width:100%; height: 100%;" >
                <div class="ui icon message" style="width:50%; padding:10px; margin:auto; margin-top:40px;">
                    <i class="fa fa-mobile" style="font-size:60px; padding-left:20px; margin-right:30px;"></i>
                    <div class="content">
                        <div class="header">
                            Transaction Verification
                        </div>
                        <ul class="list">
                            <li>Please verify the transaction from your mobile money account</li>
                            <li>Enter your pin then click on the continue to proceed</li>
                        </ul>
                        <div style="margin-top:15px;">
                            <input type="hidden" name="ref" value=' . $reference . ' >
                            <button type="submit" id="submitPayment" class="ui primary button">
                                Continue
                            </button>
                        </div>
                    </div>
                </div>
            </div>'
            . form_close() .
            '
             
            ';
    }

    public function paymentSucc()
    {
        $created_date = date('Y-m-d H:i:s');


        if ($this->session->userdata('policy_type') == "premium_group") {
            // var_dump($this->session->userdata('tableData'));
            $this->saveDataToTemp();

            $tableData = $this->getTemp();

            foreach ($tableData->result() as $rows) {
                // insert data into customers table

                $this->db->insert('customers', array(
                    'f_name'   => $rows->surname,
                    'l_name'   => $rows->othername,
                    'date_of_birth' => $rows->dob,
                    'gender'   => $rows->gender,
                    // 'contact_person' => $this->input->post('f_name',true),
                    'nrc'      => $rows->nrc,
                    'mobile_no' => $this->session->userdata('phoneNumber'),
                    'email_id' => $this->session->userdata('emailAddress'),
                    'address1' => $this->session->userdata('physicalAddress'),
                    'address2' => $this->session->userdata('postalAddress'),
                    'occupation_id' => '339',
                    'customer_type' => 'Individual',
                    'created_by' => 13,
                    'created_date' => $created_date,
                    'company_id' => 16,
                ));

                // get customer id from customers table

                $customerId = $this->db->select('id')
                    ->from('customers')
                    ->where('nrc', $rows->nrc)
                    ->get();

                $customerIdRow = $customerId->result();

                // var_dump($customerIdRow[0]->id);

                // Insert data in the Policies table
                $this->db->insert('policies', array(
                    'customer_id'   => $customerIdRow[0]->id,
                    'policy_type'   => 'Individual',
                    'plan_id' => $this->session->userdata('plan_id'),
                    'policy_code' => $this->session->userdata('plan_code'),
                    'agent_id' => 1,
                    'policy_status'   => 'Active',
                    'created_by'   => 0,
                    'created_date'   => $created_date,
                    'updated_by'   => 0,
                    'updated_date' => $created_date,
                    'deleted_by' => 0,
                    'deleted_date' => '0000-00-00 00:00:00',
                    'deleted_status'   => 'No',
                    'company_id' => 16,
                ));

                // Get policies id

                $policyId = $this->db->select('id')
                    ->from('policies')
                    ->where('customer_id', $customerIdRow[0]->id)
                    ->get();

                $policyIdRow = $policyId->result();

                // var_dump($this->session->userdata('plan_id'));
                // var_dump($policyIdRow[0]->id);

                // Insert data into policy member
                $this->db->insert('policy_member', array(
                    'policy_id'   => $policyIdRow[0]->id,
                    'member_f_name'   => $rows->surname,
                    'member_l_name' => $rows->othername,
                    'date_of_birth' => $rows->dob,
                    'gender' => $rows->gender,
                    'NRC_passport' => $rows->nrc,
                    'employee_no'   => 0,
                    'employer_id'   => 0,
                    'benf_relation_id' => $customerIdRow[0]->id,
                    'beneficiary_name' => $created_date,
                    'beneficiary_name' =>$rows->surname . +" " . +$rows->othername,
                    'beneficiary_nrc' => $rows->nrc,
                    'beneficiary_mobile_no' => $this->session->userdata('phoneNumber'),
                    'beneficiary_address' => $this->session->userdata('physicalAddress'),
                    'valid_from_date' => $created_date,
                    'valid_to_date' => $created_date,
                    // 'member_status' => $created_date,
                    'created_by' => 0,
                    'created_date' => $created_date,
                    'updated_by' => 0,
                    'updated_date' => '0000-00-00 00:00:00',
                    'deleted_by' => 0,
                    'deleted_date' => '0000-00-00 00:00:00',
                    'company_id' => 16,

                ));

                $policyMemderId = $this->db->select('id')
                    ->from('policy_member')
                    ->where('benf_relation_id', $customerIdRow[0]->id)
                    ->get();

                $policyMemderIdRow = $policyMemderId->result();

                // var_dump($policyMemderIdRow[0]->id);

                // Insert data into policy dependents
                $this->db->insert('policy_dependents', array(
                    'policy_member_id'   => $policyMemderIdRow[0]->id,
                    'group_policy_id'   => 0,
                    'dependent_name' => $rows->surname . +" " . +$rows->othername,
                    'planDependent_id' => $this->session->userdata('plan_id'),
                    'gender' => $rows->gender,
                    'NRC' => $rows->nrc,
                    'date_of_birth' => $rows->dob,
                    'premium'   => $this->session->userdata('premium'),
                ));

                // insert in payments

                $this->db->insert('payment_receipts', array(
                    'receipt_no'   => '0972160250054856',
                    'customer_id'   => $customerIdRow[0]->id,
                    'policy_id' => $policyIdRow[0]->id,
                    'policy_no' => $this->session->userdata('plan_code'),
                    'policy_holder' => $rows->surname . +" " . +$rows->othername,
                    'plan_id' => $this->session->userdata('plan_id'),
                    'date' => $created_date,
                    'collection_mode_id' => $this->session->userdata('paymentId'),
                    'doc_reference_date'   => $created_date,
                    'amount'   => $this->session->userdata('premium'),
                    'company_id'   => 16,
                ));
            }

            $this->db->query("DELETE FROM temparray");

            redirect('home');
        } else {

            if ($this->session->userdata('recharge')) {

                // $this->db->insert('payment_receipts', array(
                //     'receipt_no'   => '0972160250054856',
                //     'customer_id'   => $customerIdRow[0]->id,
                //     'policy_id' => $policyIdRow[0]->id,
                //     'policy_no' => $this->session->userdata('plan_code'),
                //     'policy_holder' => $this->session->userdata('last_name') . +" " . +$this->session->userdata('other_name'),
                //     'plan_id' => $this->session->userdata('plan_id'),
                //     'date' => $created_date,
                //     'collection_mode_id' => $this->session->userdata('paymentId'),
                //     'doc_reference_date'   => $created_date,
                //     'amount'   => $this->session->userdata('premium'),
                //     'company_id'   => 16,
                // ));

                return;
            }

            // insert data into customers table
            $this->db->insert('customers', array(
                'f_name'   => $this->session->userdata('last_name'),
                'l_name'   => $this->session->userdata('other_name'),
                'date_of_birth' => $this->session->userdata('date1'),
                'gender'   => $this->session->userdata('gender1'),
                // 'contact_person' => $this->input->post('f_name',true),
                'nrc'      => $this->session->userdata('nrc'),
                'mobile_no' => $this->session->userdata('phoneNumber'),
                'email_id' => $this->session->userdata('emailAddress'),
                'address1' => $this->session->userdata('physicalAddress'),
                'address2' => $this->session->userdata('postalAddress'),
                'occupation_id' => '339',
                'customer_type' => 'Individual',
                'created_by' => 13,
                'created_date' => $created_date,
                'company_id' => 16,
            ));

            // get customer id from customers table

            $customerId = $this->db->select('id')
                ->from('customers')
                ->where('nrc', $this->session->userdata('nrc'))
                ->get();

            $customerIdRow = $customerId->result();

            // var_dump($customerIdRow[0]->id);

            // Insert data in the Policies table
            $this->db->insert('policies', array(
                'customer_id'   => $customerIdRow[0]->id,
                'policy_type'   => 'Individual',
                'plan_id' => $this->session->userdata('plan_id'),
                'policy_code' => $this->session->userdata('plan_code'),
                'agent_id' => 1,
                'policy_status'   => 'Active',
                'created_by'   => 0,
                'created_date'   => $created_date,
                'updated_by'   => 0,
                'updated_date' => $created_date,
                'deleted_by' => 0,
                'deleted_date' => '0000-00-00 00:00:00',
                'deleted_status'   => 'No',
                'company_id' => 16,
            ));

            // Get policies id

            $policyId = $this->db->select('id')
                ->from('policies')
                ->where('customer_id', $customerIdRow[0]->id)
                ->get();

            $policyIdRow = $policyId->result();

            // var_dump($this->session->userdata('plan_id'));
            // var_dump($policyIdRow[0]->id);

            // Insert data into policy member
            $this->db->insert('policy_member', array(
                'policy_id'   => $policyIdRow[0]->id,
                'member_f_name'   => $this->session->userdata('last_name'),
                'member_l_name' => $this->session->userdata('other_name'),
                'date_of_birth' => $this->session->userdata('date1'),
                'gender' => $this->session->userdata('gender1'),
                'NRC_passport' => $this->session->userdata('nrc'),
                'employee_no'   => 0,
                'employer_id'   => 0,
                'benf_relation_id' => $customerIdRow[0]->id,
                'beneficiary_name' => $created_date,
                'beneficiary_name' => $this->session->userdata('last_name') . +" " . +$this->session->userdata('other_name'),
                'beneficiary_nrc' => $this->session->userdata('nrc'),
                'beneficiary_mobile_no' => $this->session->userdata('phoneNumber'),
                'beneficiary_address' => $this->session->userdata('physicalAddress'),
                'valid_from_date' => $created_date,
                'valid_to_date' => $created_date,
                // 'member_status' => $created_date,
                'created_by' => 0,
                'created_date' => $created_date,
                'updated_by' => 0,
                'updated_date' => '0000-00-00 00:00:00',
                'deleted_by' => 0,
                'deleted_date' => '0000-00-00 00:00:00',
                'company_id' => 16,

            ));

            $policyMemderId = $this->db->select('id')
                ->from('policy_member')
                ->where('benf_relation_id', $customerIdRow[0]->id)
                ->get();

            $policyMemderIdRow = $policyMemderId->result();

            // var_dump($policyMemderIdRow[0]->id);

            // Insert data into policy dependents
            $this->db->insert('policy_dependents', array(
                'policy_member_id'   => $policyMemderIdRow[0]->id,
                'group_policy_id'   => 0,
                'dependent_name' => $this->session->userdata('last_name') . +" " . +$this->session->userdata('other_name'),
                'planDependent_id' => $this->session->userdata('plan_id'),
                'gender' => $this->session->userdata('gender1'),
                'NRC' => $this->session->userdata('nrc'),
                'date_of_birth' => $this->session->userdata('date1'),
                'premium'   => $this->session->userdata('premium'),
            ));

            // insert in payments

            $this->db->insert('payment_receipts', array(
                'receipt_no'   => '0972160250054856',
                'customer_id'   => $customerIdRow[0]->id,
                'policy_id' => $policyIdRow[0]->id,
                'policy_no' => $this->session->userdata('plan_code'),
                'policy_holder' => $this->session->userdata('last_name') . +" " . +$this->session->userdata('other_name'),
                'plan_id' => $this->session->userdata('plan_id'),
                'date' => $created_date,
                'collection_mode_id' => $this->session->userdata('paymentId'),
                'doc_reference_date'   => $created_date,
                'amount'   => $this->session->userdata('premium'),
                'company_id'   => 16,
            ));


            redirect('home');
        }
    }

    public function paymentError()
    {
        redirect('home');
    }


    public function done()
    {
        $reference = $this->input->post('ref', true);
        // $reference = '0972160250054856';
        // echo $reference;

        $status = $this->check_payment_status($reference);

        if (strlen(stristr($status, "Succ")) > 0) {
            echo '
            <link href="' . base_url('assets_web/css/semantic.css') . '" type="text/css" rel="stylesheet">
            <div style="width:100%; height: 100%;" >
            ' . form_open_multipart("website/appointment/paymentSucc", 'id="processInfo"') . '
                <div class="ui success message" style="width:50%; padding:10px; margin:auto; margin-top:40px;">
                    <div class="header">
                        Your user registration was successful.
                    </div>
                    <p>You may now continue to home page</p>

                    <button type="submit" id="paymentSucc" class="ui green button">
                        Go Home
                    </button>
                </div>
                ' . form_close() . '
            </div>
            ';
        } else {
            echo '
                <link href="' . base_url('assets_web/css/semantic.css') . '" type="text/css" rel="stylesheet">
                <div style="width:100%; height: 100%;" >
                ' . form_open_multipart("website/appointment/paymentError", 'id="processInfo"') . '
                    <div class="ui error message" style="width:50%; padding:10px; margin:auto; margin-top:40px;">
                        <div class="header">
                            Transaction failed
                        </div>
                        <ul class="list">
                            <li>You must make your mobile money password is collect.</li>
                            <li>You need to have sufficient funds in your mobile money account.</li>
                        </ul>

                        <button type="submit" id="paymentError" class="ui orange button">
                            Back
                        </button>

                        <button type="submit" id="paymentError" class="ui orange button">
                            Retry again
                        </button>
                    </div>
                    ' . form_close() . '
                </div>
                ';
        }
    }


    function check_payment_status($reference)
    {
        $soap_request = '<?xml version="1.0" encoding="UTF-8"?>
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:kon="http://konik.cgrate.com">
          <soapenv:Header>
              <wsse:Security soapenv:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                 <wsse:UsernameToken wsu:Id="UsernameToken-1" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
                    <wsse:Username>1521182044029</wsse:Username>
                    <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">P5oh5Xsj</wsse:Password>
                 </wsse:UsernameToken>
              </wsse:Security>
        </soapenv:Header>
        <soapenv:Body>
           <kon:queryCustomerPayment>
              <paymentReference>' . $reference . '</paymentReference>
         </kon:queryCustomerPayment> 
        </soapenv:Body>
     </soapenv:Envelope>
     ';

        $headers = array(
            "Content-type: text/xml",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: http://213.193.34.197:55555/Konik/KonikWs",
            "Content-length: " . strlen($soap_request),
        );

        $url = "http://213.193.34.197:55555/Konik/KonikWs";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $soap_request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $output = curl_exec($ch);
        curl_close($ch);

        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $output);
        $xml = new SimpleXMLElement($response);
        $transactionStatus = $xml->xpath('//responseMessage')[0];
        //$transactionStatus = strip_tags($output);

        return $transactionStatus;
    }
}
