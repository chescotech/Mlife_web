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

    // Webcam picture

    public function saveTempCamImage()
    {
        // var_dump($_FILES);

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $this->session->set_userdata([
            'attachments' => $_FILES["image"]["name"],
        ]);
    }

    // Uploaded image from folder 

    public function saveTempImage()
    {
        // var_dump($_FILES);

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        // if(isset($_POST["submit"])) {
        //   $check = getimagesize($_FILES["file"]["tmp_name"]);
        //   if($check !== false) {
        //     echo "File is an image - " . $check["mime"] . ".";
        //     $uploadOk = 1;
        //   } else {
        //     echo "File is not an image.";
        //     $uploadOk = 0;
        //   }
        // }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["file"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        // && $imageFileType != "gif" ) {
        //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        //   $uploadOk = 0;
        // }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }


        if ($this->session->userdata('attachments') == '') {
            $this->session->set_userdata([
                'attachments' => $_FILES["file"]["name"],
            ]);
        } else {
            $filelink =  $this->session->userdata('attachments') . ', ' . $_FILES["file"]["name"];

            var_dump($filelink);
            var_dump($this->session->userdata('attachments'));
            var_dump($_FILES["file"]["name"]);

            $this->session->set_userdata([
                'attachments' => $filelink,
            ]);
        }
    }

    //Inser data into temp_table
    function saveDataToTemp()
    {
        // First, Fetch some data
        $coveredArr  = $this->session->userdata('coveredArr');
        $surnameArr  = $this->session->userdata('surnameArr');
        $othernameArr  = $this->session->userdata('othernameArr');
        $dobArr  = $this->session->userdata('dobArr');
        $genderArr  = $this->session->userdata('genderArr');
        $nrcArr  = $this->session->userdata('nrcArr');
        $premiumArr  = $this->session->userdata('premiumArr');
        $suminputArr  = $this->session->userdata('suminputArr');

        // $mainArr = array_merge($coveredArr, $surnameArr, $othernameArr, $dobArr, $premiumArr, $suminputArr, $nrcArr, $genderArr);
        // var_dump($mainArr);

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

        // for ($i = 0; $i <br COUNT($coveredArr); $i++) {

        //     $this->db->insert('temparray', array(
        //         'covered' =>    $coveredArr,
        //         'surname' =>    $surnameArr,
        //         'othername' =>    $othernameArr,
        //         'dob' =>    $dobArr,
        //         'gender' =>    $genderArr,
        //         'nrc' =>    $nrcArr,
        //         'premium' =>    $premiumArr,
        //         'suminput' =>    $suminputArr,
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


        if ($this->input->post("recharge", true)) {

            $this->session->set_userdata([
                'phoneNumber' => $this->input->post("phoneNumber", true),
                'policy_type' => $this->input->post("2", true),
                'plan_id' => $this->input->post("6", true),
                'plan_code' => $this->input->post("7", true),
                'premium' => $this->input->post("5", true),
                'sumasured' => $this->input->post("4", true),
                'phone_no' => $this->input->post("numberPhone", true),
            ]);

            $this->MobilePaymentProcessor($this->input->post("numberPhone", true), $this->input->post("4", true));
        } else if ($this->input->post("Reg_type", true) == "Company") {
            // var_dump($this->input->post('premium', true));

            $this->session->set_userdata([
                'c_name' => $this->input->post("c_name", true),
                'c_reg' => $this->input->post("c_reg", true),
                'postalAddress' => $this->input->post("postalAddress", true),
                'physicalAddress' => $this->input->post("physicalAddress", true),
                'emailAddress' => $this->input->post("emailAddress", true),
                'phoneNumber' => $this->input->post("phoneNumber", true),
                'policy_type' => $this->input->post("2", true),
                'plan_id' => $this->input->post("6", true),
                'plan_code' => $this->input->post("7", true),
                'premium' => $this->input->post("5", true),
                'sumasured' => $this->input->post("4", true),
                'paymentId' => $this->input->post("paymentId", true),
                'recharge' => $this->input->post("recharge", true),
                'phone_no' => $this->input->post("numberPhone", true),
                'total' => $this->input->post("total", true),
                'agentCode' => $this->input->post("agent", true),
                'Reg_type' => $this->input->post("Reg_type", true),
                'premiumArr' => $this->input->post('premium', true),
                'suminputArr' => $this->input->post('suminput', true),
                'nrcArr' => $this->input->post('nrc1', true),
                'genderArr' => $this->input->post('gender', true),
                'dobArr' => $this->input->post('dob', true),
                'othernameArr' => $this->input->post('othername', true),
                'surnameArr' => $this->input->post('surname', true),
                'coveredArr' => $this->input->post('covered', true),
                'groupTotal' => $this->input->post('groupTotal'),

            ]);

            // var_dump($this->session->userdata("groupTotal"));
            // var_dump($this->session->userdata("phone_no"));
            $this->MobilePaymentProcessor($this->session->userdata("phone_no"), $this->session->userdata("groupTotal"));
        } else {
            // if ($this->input->post("airtel_number", true) != NULL) {
            $this->session->set_userdata([
                'last_name' => $this->input->post("last_name", true),
                'other_name' => $this->input->post("other_name", true),
                'full_name' => $this->input->post("last_name", true) . '' . $this->input->post("other_name", true),
                'postalAddress' => $this->input->post("postalAddress", true),
                'physicalAddress' => $this->input->post("physicalAddress", true),
                'emailAddress' => $this->input->post("emailAddress", true),
                'phoneNumber' => $this->input->post("phoneNumber", true),
                'date1' => $this->input->post("date1", true),
                'nrc' => $this->input->post("nrc", true),
                'occupations' => $this->input->post("occupations", true),
                'gender1' => $this->input->post("gender1", true),
                'policy_type' => $this->input->post("2", true),
                'plan_id' => $this->input->post("6", true),
                'plan_code' => $this->input->post("7", true),
                'premium' => $this->input->post("5", true),
                'sumasured' => $this->input->post("4", true),
                'paymentId' => $this->input->post("paymentId", true),
                'recharge' => $this->input->post("recharge", true),
                'phone_no' => $this->input->post("numberPhone", true),
                'Reg_type' => $this->input->post("Reg_type", true),
                'total' => $this->input->post("total", true),
                'agentCode' => $this->input->post("agent", true),
            ]);
            // }

            $this->MobilePaymentProcessor($this->session->userdata("phone_no"), $this->session->userdata("premium"));
        }

        $this->createCustomerTemp($this->session->userdata('Reg_type'));
    }

    function MobilePaymentProcessor($number, $amount)
    {
        $phone_no  = $number;
        $reference = $phone_no . date("his");

        $this->session->set_userdata([
            'ref' => $reference,
        ]);

        $soap_request = '<?xml version="1.0" encoding="UTF-8"?>
                            <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:kon="http://konik.cgrate.com">
                                <soapenv:Header>
                                    <wsse:Security soapenv:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                                        <wsse:UsernameToken wsu:Id="UsernameToken-1" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
                                        <wsse:Username>1404370669353</wsse:Username>
                                        <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">VdGGDo6I</wsse:Password>
                                        </wsse:UsernameToken>
                                    </wsse:Security>
                            </soapenv:Header>
                            <soapenv:Body>
                                <kon:processCustomerPayment>
                                    <transactionAmount>' . $amount . '</transactionAmount>
                                    <customerMobile>' . $phone_no . '</customerMobile>
                                        <paymentReference>' . $this->session->userdata('ref') . '</paymentReference>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

            <div id="paymentBanner" style="width:100%; height: 100%;" >
                <div class="ui icon message" style="width:50%; padding:10px; margin:auto; margin-top:40px;">
                    <i class="fa fa-circle-o-notch notched circle loading " style="font-size:60px; padding-left:20px; margin-right:30px;"></i>
                    <div class="content">
                        <div class="header">
                            Waiting for you to authorize transaction
                        </div>
                        <ul class="list">
                            <li>Please verify the transaction from your mobile money account</li>
                            <li>Enter your pin then click on the continue to proceed</li>
                        </ul>

                        <div id="countdown"></div>
                        <progress value="0" max="10" id="progressBar"></progress>
                    </div>
                </div>
            </div>
            <script>
                    var timeleft = 10;
                    var downloadTimer = setInterval(function(){
                    if(timeleft <= 0){
                        clearInterval(downloadTimer);
                        document.getElementById("countdown").innerHTML = "Validating transaction...";
                        $.ajax({
                            url: "' . base_url('website/appointment/done') . '",
                            type: "POST",
                            dataType: "html",
                            success: function(data) {
                                $("#paymentBanner").html(data)
                            },
                            error: function() {
                                alert("failed");
                            }
                        });
                    }else {
                        document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
                      }
                    document.getElementById("progressBar").value = 10 - timeleft;
                        timeleft -= 1;
                    }, 1100);

                   
                </script>';
    }

    public function paymentSucc()
    {
        $created_date = date('Y-m-d H:i:s');

        $mainFiles = $this->session->userdata('files');

        if ($this->input->post("recharge", true)) {
            // $created_date = date('Y-m-d H:i:s');
            $this->db->insert('payment_receipts', array(
                'receipt_no'   => '0972160250054858',
                'customer_id'   => $this->session->userdata('customer_id'),
                'policy_id' => $this->session->userdata('policy_id'),
                'policy_no' => $this->session->userdata('policy_code'),
                'policy_holder' => $this->session->userdata('member_full_name'),
                'plan_id' => $this->session->userdata('plan_id'),
                'policy_member_id' =>  $this->session->userdata('policy_member_id'),
                'date' => $created_date,
                'collection_mode_id' => $this->session->userdata('paymentId'),
                'doc_reference_date'   => $created_date,
                'amount'   => $this->session->userdata('premium'),
                'company_id'   => 16,
            ));
        } else {

            if ($this->session->userdata('Reg_type') == "Company") {
                // var_dump($this->session->userdata('c_name'));

                $this->saveDataToTemp();

                $tableData = $this->getTemp();

                $this->db->insert('customers', array(
                    'f_name' => '',
                    'l_name' => '',
                    'c_name'   => $this->session->userdata('c_name'),
                    'c_register_no'   => $this->session->userdata('c_reg'),
                    // 'date_of_birth' => $rows->dob,
                    // 'gender'   => $rows->gender,
                    // 'contact_person' => $this->input->post('f_name',true),
                    // 'nrc'      => $rows->nrc,
                    'mobile_no' => $this->session->userdata('phoneNumber'),
                    'email_id' => $this->session->userdata('emailAddress'),
                    'address1' => $this->session->userdata('physicalAddress'),
                    'address2' => $this->session->userdata('postalAddress'),
                    'customer_type' => 'Group',
                    'created_by' => $this->session->userdata('agentCode'),
                    'created_date' => $created_date,
                    'company_id' => 16,
                    'attachments' => $this->session->userdata('attachments')
                ));



                $customerId = $this->db->insert_id();
                $policy_code = "DTI" . "-000000-" . $customerId;
                // $customerIdRow = $customerId->result();

                foreach ($tableData->result() as $rows) {
                    // var_dump($rows);

                    // Insert data in the Policies table
                    $this->db->insert('policies', array(
                        'customer_id'   => $customerId,
                        'policy_type'   => 'Company',
                        'plan_id' => $this->session->userdata('plan_id'),
                        'policy_code' => $policy_code,
                        'agent_id' => $this->session->userdata("agentCode"),
                        'policy_status'   => 'Active',
                        'currency_id'   => '6',
                        'created_by'   => $this->session->userdata('agentCode'),
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
                        ->where('customer_id', $customerId)
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
                        'benf_relation_id' => $customerId,
                        'beneficiary_name' => $created_date,
                        'beneficiary_name' => $rows->surname . +" " . +$rows->othername,
                        'beneficiary_nrc' => $rows->nrc,
                        'beneficiary_mobile_no' => $this->session->userdata('phoneNumber'),
                        'beneficiary_address' => $this->session->userdata('physicalAddress'),
                        'valid_from_date' => $created_date,
                        'valid_to_date' => $created_date,
                        // 'member_status' => $created_date,
                        'created_by' => $this->session->userdata('agentCode'),
                        'created_date' => $created_date,
                        'updated_by' => 0,
                        'updated_date' => '0000-00-00 00:00:00',
                        'deleted_by' => 0,
                        'deleted_date' => '0000-00-00 00:00:00',
                        'company_id' => 16,

                    ));

                    $policyMemderId = $this->db->select('id')
                        ->from('policy_member')
                        ->where('policy_id', $policyIdRow[0]->id)
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
                }
                // insert in payments

                $this->db->insert('payment_receipts', array(
                    'receipt_no'   => '0972160250054856',
                    'customer_id'   => $customerId,
                    'policy_id' => $policyIdRow[0]->id,
                    'policy_no' => $policy_code,
                    'policy_holder' => $this->session->userdata('c_name'),
                    'plan_id' => $this->session->userdata('plan_id'),
                    'policy_member_id' => $policyMemderIdRow[0]->id,
                    'date' => $created_date,
                    'collection_mode_id' => $this->session->userdata('paymentId'),
                    'doc_reference_date'   => $created_date,
                    'amount'   => $this->session->userdata('groupTotal'),
                    'company_id'   => 16,
                ));

                $this->db->query("DELETE FROM temparray");

                // redirect('home');
            } else {

                if ($this->session->userdata('recharge')) {

                    // $this->db->insert('payment_receipts', array(
                    //     'receipt_no'   => '0972160250054856',
                    //     'customer_id'   => $customerId,
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
                    'occupation_id' => $this->session->userdata('occupations'),
                    'customer_type' => 'Individual',
                    'created_by' => $this->session->userdata('agentCode'),
                    'created_date' => $created_date,
                    'attachments' => $this->session->userdata('attachments'),
                    'company_id' => 16,
                ));



                // get customer id from customers table

                $customerId = $this->db->insert_id();

                // $customerIdRow = $customerId->result();

                // var_dump($customerIdRow[0]->id);

                $policy_code = "DTI" . "-000000-" . $customerId;

                // Insert data in the Policies table
                $this->db->insert('policies', array(
                    'customer_id'   => $customerId,
                    'policy_type'   => 'Individual',
                    'plan_id' => $this->session->userdata('plan_id'),
                    'policy_code' => $policy_code,
                    'agent_id' => $this->session->userdata("agentCode"),
                    'policy_status'   => 'Active',
                    'currency_id'   => '6',
                    'created_by'   => $this->session->userdata('agentCode'),
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
                    ->where('customer_id', $customerId)
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
                    'benf_relation_id' => $customerId,
                    'beneficiary_name' => $created_date,
                    'beneficiary_name' => $this->session->userdata('last_name') . +" " . +$this->session->userdata('other_name'),
                    'beneficiary_nrc' => $this->session->userdata('nrc'),
                    'beneficiary_mobile_no' => $this->session->userdata('phoneNumber'),
                    'beneficiary_address' => $this->session->userdata('physicalAddress'),
                    'valid_from_date' => $created_date,
                    'valid_to_date' => $created_date,
                    // 'member_status' => $created_date,
                    'created_by' => $this->session->userdata('agentCode'),
                    'created_date' => $created_date,
                    'updated_by' => 0,
                    'updated_date' => '0000-00-00 00:00:00',
                    'deleted_by' => 0,
                    'deleted_date' => '0000-00-00 00:00:00',
                    'company_id' => 16,

                ));

                $policyMemderId = $this->db->select('id')
                    ->from('policy_member')
                    ->where('policy_id', $policyIdRow[0]->id)
                    ->get();

                $policyMemderIdRow = $policyMemderId->result();

                // var_dump($policyMemderIdRow[0]->id);

                // Insert data into policy dependents
                $this->db->insert('policy_dependents', array(
                    'policy_member_id'   => $policyMemderIdRow[0]->id,
                    'group_policy_id'   => 0,
                    'dependent_name' => $this->session->userdata('last_name') . " " . $this->session->userdata('other_name'),
                    'planDependent_id' => $this->session->userdata('plan_id'),
                    'gender' => $this->session->userdata('gender1'),
                    'NRC' => $this->session->userdata('nrc'),
                    'date_of_birth' => $this->session->userdata('date1'),
                    'premium'   => $this->session->userdata('premium'),
                ));

                // insert in payments

                $this->db->insert('payment_receipts', array(
                    'receipt_no'   => '0972160250054856',
                    'customer_id'   => $customerId,
                    'policy_id' => $policyIdRow[0]->id,
                    'policy_no' => $policy_code,
                    'policy_holder' => $this->session->userdata('last_name') . " " . $this->session->userdata('other_name'),
                    'plan_id' => $this->session->userdata('plan_id'),
                    'policy_member_id' => $policyMemderIdRow[0]->id,
                    'date' => $created_date,
                    'collection_mode_id' => $this->session->userdata('paymentId'),
                    'doc_reference_date'   => $created_date,
                    'amount'   => $this->session->userdata('premium'),
                    'company_id'   => 16,
                ));


                // redirect('home');

            }

            $this->DeleteCustomer_temp($this->session->userdata('Reg_type'));

            $this->session->set_userdata([
                'attachments' => '',
            ]);
        }
    }

    function createCustomerTemp($type)
    {
        $created_date = date('Y-m-d H:i:s');

        if ($type == "Company") {
            $this->db->insert('customers_temp', array(
                'f_name' => '',
                'l_name' => '',
                'c_name'   => $this->session->userdata('c_name'),
                'c_register_no'   => $this->session->userdata('c_reg'),
                // 'date_of_birth' => $rows->dob,
                // 'gender'   => $rows->gender,
                // 'contact_person' => $this->input->post('f_name',true),
                // 'nrc'      => $rows->nrc,
                'mobile_no' => $this->session->userdata('phoneNumber'),
                'email_id' => $this->session->userdata('emailAddress'),
                'address1' => $this->session->userdata('physicalAddress'),
                'address2' => $this->session->userdata('postalAddress'),
                'customer_type' => 'Group',
                'created_by' => $this->session->userdata('agentCode'),
                'status' => 'Inactive',
                'created_date' => $created_date,
                'company_id' => 16,
               
            ));
        } else {
            $this->db->insert('customers_temp', array(
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
                'occupation_id' => $this->session->userdata('occupations'),
                'customer_type' => 'Individual',
                'created_by' => $this->session->userdata('agentCode'),
                'status' => 'Inactive',
                'created_date' => $created_date,                
                'company_id' => 16,
            ));
        }
    }


    function DeleteCustomer_temp($type)
    {
        if ($type != "Company") {
            $nrc = $this->session->userdata('nrc');
            $this->db->query("DELETE FROM customers_temp WHERE nrc='$nrc' ");
        } else {
            $c_name = $this->session->userdata('c_name');
            $this->db->query("DELETE FROM customers_temp WHERE c_name='$c_name' ");
        }
    }

    public function paymentError()
    {
        redirect('home');
    }

    public function goHome()
    {
        redirect('home');
    }

    // public function checkMobilePayment(){

    // }

    public function done()
    {
        $reference = $this->session->userdata('ref');
        // $reference = '0972160250054856';
        // echo $reference;

        $status = $this->check_payment_status($this->session->userdata('ref'));
        // $status = true

        // var_dump($status);
        // $this->paymentSucc();

        if (strlen(stristr($status, "Succ")) > 0) {

            $this->paymentSucc();

            echo '
            <link href="' . base_url('assets_web/css/semantic.css') . '" type="text/css" rel="stylesheet">
            <div style="width:100%; height: 100%;" >
                ' . form_open_multipart("website/appointment/goHome", 'id="processInfo"') . '
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
            </div>';
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
                            <li>You must make your mobile money password is correct.</li>
                            <li>You need to have sufficient funds in your mobile money account.</li>
                        </ul>

                        <button type="submit" id="paymentError" class="ui orange button">
                            Back
                        </button>

                        <a href=' . base_url("website/appointment/mobile") . ' id="paymentError" class="ui orange button">
                            Retry again
                        </a>
                    </div>
                    ' . form_close() . '
                </div>
                ';
        }
    }


    function check_payment_status($reference)
    {
        // var_dump($reference);
        // var_dump($this->session->userdata("agentCode"));

        $soap_request = '<?xml version="1.0" encoding="UTF-8"?>
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:kon="http://konik.cgrate.com">
          <soapenv:Header>
              <wsse:Security soapenv:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                 <wsse:UsernameToken wsu:Id="UsernameToken-1" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
                    <wsse:Username>1404370669353</wsse:Username>
                    <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">VdGGDo6I</wsse:Password>
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
        // var_dump($transactionStatus);

        return $transactionStatus;
    }

    public function getPayAsGoIndividual()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->not_like('cover_types.title', 'GROUP')
            ->not_like('plans.plan_name', 'COMB')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'PAY AS')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;
            // var_dump($planrow);

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
            <div class='card-body'>

                <h5 style='color:#3b3b3b'>
                    $PlanName
                </h5>

                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>
                        <div style='border:none; border-bottom:1px solid #3b3b3b'>
                            Sum assured <strong style='color:teal; font-size:19px'>K
                            $f_sum_assured
                            </strong>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        Get Started at <strong>K
                        $f_fixed_premium</strong>
                    </li>
                </ul>
                <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . " class='selection_btn btn btn-primary'>Select
                    Cover
                </button>
            </div>
            </div>";
        }
    }

    public function getPayAsGoGroup()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->like('cover_types.title', 'GROUP')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'PAY AS')
            ->not_like('plans.plan_name', 'COMB')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
                        <div class='card-body'>

                        <h5 style='color:#3b3b3b'>
                             $PlanName
                        </h5>

                        <ul class='list-group list-group-flush'>
                             <li class='list-group-item'>
                                    <div style='border:none; border-bottom:1px solid #3b3b3b'>
                                            Sum assured <strong style='color:teal; font-size:19px'>K$f_sum_assured</strong>
                                    </div>
                            </li>
                            <li class='list-group-item'>
                                Get Started at <strong>K$f_fixed_premium</strong>
                            </li>
                        </ul>
                        <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_group' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . " class='selection_btn btn btn-primary'>Select
                             Cover
                        </button>
                    </div>
                    </div>";
        }
    }

    public function getPerTripCoverSingle()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->not_like('cover_types.title', 'GROUP')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'TRIP')
            ->not_like('plans.plan_name', 'COMBI')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
                <div class='card-body'>

                    <h5 style='color:#3b3b3b'>
                        $PlanName
                    </h5>

                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>
                            <div style='border:none; border-bottom:1px solid #3b3b3b'>
                                Sum assured <strong style='color:teal; font-size:19px'>K
                                $f_sum_assured
                                </strong>
                            </div>
                        </li>
                        <li class='list-group-item'>
                            Get Started at <strong>K
                            $f_fixed_premium</strong>
                        </li>
                    </ul>
                    <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "  class='selection_btn btn btn-primary'>Select
                        Cover
                    </button>
                </div>
                </div>";
        }
    }

    public function getPerTripCoverGroup()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->like('cover_types.title', 'GROUP')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'TRIP')
            ->not_like('plans.plan_name', 'COMBI')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
                <div class='card-body'>
                        <h5 style='color:#3b3b3b'>
                    $PlanName
                </h5>

                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>
                            <div style='border:none; border-bottom:1px solid #3b3b3b'>
                                Sum assured <strong style='color:teal; font-size:19px'>K
                                $f_sum_assured
                                </strong>
                            </div>
                        </li>
                        <li class='list-group-item'>
                            Get Started at <strong>K
                            $f_fixed_premium</strong>
                        </li>
                    </ul>
                    <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_group' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . " class='selection_btn btn btn-primary'>Select
                        Cover
                    </button>
                </div>
                </div>";
        }
    }
    public function getWayofLifeSingle()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->not_like('cover_types.title', 'GROUP')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'WAY')
            ->not_like('plans.plan_name', 'COMBI')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
            <div class='card-body'>

                <h5 style='color:#3b3b3b'>
                    $PlanName
                </h5>

                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>
                        <div style='border:none; border-bottom:1px solid #3b3b3b'>
                            Sum assured <strong style='color:teal; font-size:19px'>K
                            $f_sum_assured
                            </strong>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        Get Started at <strong>K
                        $f_fixed_premium</strong>
                    </li>
                </ul>
                <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . " class='selection_btn btn btn-primary'>Select
                    Cover
                </button>
            </div>
            </div>";
        }
    }

    public function getWayofLifeGroup()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->like('cover_types.title', 'GROUP')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'WAY')
            ->not_like('plans.plan_name', 'COMBI')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
                    <div class='card-body'>

                        <h5 style='color:#3b3b3b'>
                            $PlanName
                        </h5>

                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>
                                <div style='border:none; border-bottom:1px solid #3b3b3b'>
                                    Sum assured <strong style='color:teal; font-size:19px'>K
                                    $f_sum_assured
                                    </strong>
                                </div>
                            </li>
                            <li class='list-group-item'>
                                Get Started at <strong>K
                                $f_fixed_premium</strong>
                            </li>
                        </ul>
                        <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_group' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . " class='selection_btn btn btn-primary'>Select
                            Cover
                        </button>
                    </div>
                    </div>";
        }
    }

    public function getFamilyCoverSingle()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->not_like('cover_types.title', 'GROUP')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'FAMILY')
            ->not_like('plans.plan_name', 'COMB')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
                <div class='card-body'>

                    <h5 style='color:#3b3b3b'>
                        $PlanName
                    </h5>

                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>
                            <div style='border:none; border-bottom:1px solid #3b3b3b'>
                                Sum assured <strong style='color:teal; font-size:19px'>K
                                $f_sum_assured
                                </strong>
                            </div>
                        </li>
                        <li class='list-group-item'>
                            Get Started at <strong>K
                            $f_fixed_premium</strong>
                        </li>
                    </ul>
                    <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . " class='selection_btn btn btn-primary'>Select
                        Cover
                    </butoon>
                </div>
                </div>";
        }
    }

    public function getFamilyCoverGroups()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->like('cover_types.title', 'GROUP')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'FAMILY')
            ->not_like('plans.plan_name', 'COMB')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
                        <div class='card-body'>

                            <h5 style='color:#3b3b3b'>
                                $PlanName
                            </h5>

                            <ul class='list-group list-group-flush'>
                                <li class='list-group-item'>
                                    <div style='border:none; border-bottom:1px solid #3b3b3b'>
                                        Sum assured <strong style='color:teal; font-size:19px'>K
                                        $f_sum_assured
                                        </strong>
                                    </div>
                                </li>
                                <li class='list-group-item'>
                                    Get Started at <strong>K
                                    $f_fixed_premium</strong>
                                </li>
                            </ul>
                            <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_group_family' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . " class='selection_btn btn btn-primary'>Select
                                Cover
                            </button>
                        </div>
                        </div>";
        }
    }

    public function getStudentSingle()
    {
        $cover_benefits_id = $this->db->select("id")
            ->from('cover_benefits')
            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
            ->get()
            ->result();

        $product_id  = $this->db->select("id")
            ->from('products')
            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
            ->get()
            ->result();

        $plansList = $this->db->select("plans.plan_code,plans.plan_name,plan_id,sum_assured,fixed_premium,min_age,max_age,cover_types.title")
            ->from('plan_dependents')
            ->join('plans', 'plans.id=plan_dependents.plan_id', 'inner')
            ->join('cover_types', 'cover_types.id=plans.cover_type_id', 'inner')
            ->where('cover_benefits_type', $cover_benefits_id[0]->id)
            ->not_like('cover_types.title', 'GROUP')
            ->like('plans.product_id', $product_id[0]->id)
            ->like('plans.plan_name', 'DTI STUDENT')
            ->order_by("sum_assured", "ASC")
            ->get()
            ->result();

        // var_dump($plansList);

        foreach ($plansList as $planrow) {
            $PlanName = $planrow->plan_name;
            $Sum_assured = $planrow->sum_assured;
            $Fixed_premium = $planrow->fixed_premium;
            $plan_id = $planrow->plan_id;
            $plan_code = $planrow->plan_code;

            $f_sum_assured = number_format($Sum_assured);
            $f_fixed_premium = number_format($Fixed_premium);

            echo "<div class='card' style='width: 18rem; margin:5px'>
            <div class='card-body'>

                <h5 style='color:#3b3b3b'>
                    $PlanName
                </h5>

                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>
                        <div style='border:none; border-bottom:1px solid #3b3b3b'>
                            Sum assured <strong style='color:teal; font-size:19px'>K
                            $f_sum_assured
                            </strong>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        Get Started at <strong>K
                        $f_fixed_premium</strong>
                    </li>
                </ul>
                <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . " class='selection_btn btn btn-primary'>Select
                    Cover
                </button>
            </div>
            </div>";
        }
    }

    public function uploadCSVfile()
    {

        $uniqid = rand(1,90000);

        $this->session->set_userdata([
            'docfile' => $uniqid,
        ]);

        $file_formats = array("csv");
        $filepath = "assets_web/docs/excel/";
        $_SESSION['filepath'] = $filepath;

        // if (isset($_POST['submitbtn']) && $_POST['submitbtn'] == "Submit") {

            $name = $_FILES['imagefile']['name']; // filename to get file's extension
            $size = $_FILES['imagefile']['size'];

            if (strlen($name)) {
                $extension = substr($name, strrpos($name, '.') + 1);
                if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
                    if ($size < (8048 * 1024)) { // check it if it's bigger than 2 mb or no

                        $full_file = $filepath . $uniqid . '.csv';
                        $tmp = $_FILES['imagefile']['tmp_name'];
                        if (move_uploaded_file($tmp, $full_file)) {
                            // echo '<img class="preview" alt="" src="'.$filepath.'/img.jpg" />';
                            // echo '<img src="assets_web/img/mlifelogo.png" style="width:63%" class="img-responsive">';
                            echo $this->session->userdata('docfile');
                        } else {
                            echo "Could not move the file.";
                            // echo '<img src="assets_web/img/mlifelogo.png" style="width:63%" class="img-responsive">';
                        }
                    } else {
                        echo "Your file is too large. Maximum size allowed is 8MB.";
                    }
                } else {
                    echo "Invalid file format. Please upload a valid .csv file";
                }
            } else {
                echo "Please select a .csv file..!";
            }

            die();
        // }else{
        //     echo "Invalid";
        // }
    }

    public function planName()
    {
        $PlanName = $_POST['planname'];
        $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code, plan_id, plans.plan_name AS plan_name,
                    sum_assured,fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                    inner JOIN plans on plans.id=plan_dependents.plan_id
                    inner join cover_types on cover_types.id=plans.cover_type_id
                    INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                    WHERE  plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                    AND (plans.plan_name LIKE '%COMBI%' )
                    AND plan_name = '$PlanName' GROUP BY title
                ");

        $results_details = $plansList_details->result_array();
        $results_no = $plansList_details->num_rows();
        echo "Combined sums assured: <br>";
        if ($results_no > 0) {
            echo $results_no." sums found ".$PlanName;
            // print_r($results_details);
            foreach ($results_details as $planrow_details) {
                // echo $planrow_details['sum_assured']." sums found ".$results_details;
                $title = $planrow_details['title'];
                $Sum_assured = $planrow_details['sum_assured'];

                $f_sum_assured = number_format($Sum_assured);

                echo "<u> $title </u> : K
                $f_sum_assured </br>";
            }
        } else {
            echo "Error getting the sums!";
        }
    }

}