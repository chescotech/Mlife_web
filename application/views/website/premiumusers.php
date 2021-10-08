<!--  
Make a query to get policies info based on the policy 
memmber id
-->

<?php
$policies_rows = $this->db->select('*')
    ->from('policies AS po')
    ->where('po.id', $this->session->userdata('policy_id'))
    ->join('plans As pl', 'pl.id=po.plan_id', 'inner')
    ->join('plan_dependents As pld', 'pld.id=pl.id', 'inner')
    ->get();

$policiesInfo = $policies_rows->result();

// // Get Plan info from plans table
// $plan_rows = $this->db->select('*')
//     ->from('plans')
//     ->where('plan_code', $policiesInfo[0]->policy_code)
//     ->get();

// $planInfo = $plan_rows->result();

// // Get Plan_dependents info from Plan_dependents
// $plan_dependentRows = $this->db->select('*')
//     ->from('plan_dependents')
//     ->where('id', $planInfo[0]->id)
//     ->get();

// $plan_dependentInfo = $plan_dependentRows->result();

// var_dump($policiesInfo)

?>

<style>
    .mainView {
        width: 100%;
        height: 100vh;
        background-color: #FBFBFB;
    }

    .container {
        display: flex;
        width: 100%;
    }

    .content {
        width: 60%;
        margin: 50px auto;
    }

    .userInfo {
        width: 30%;
        border: none;
        border-left: 1px solid #ccc;
        padding: 10px;
        padding-top: 20px;
    }

    .circularImage {
        width: 200px;
        height: 150px;
        border-radius: 10px;
        overflow: hidden;
        background-color: #D9D9D9;
        margin-bottom: 10px;
    }
</style>

<link href="<?php base_url('assets_web/css/semantic.css') ?>" type="text/css" rel="stylesheet">
<div class="mainView row">
    <!-- <div>sidebar</div> -->
    <div class="container">
        <div class="content">
            <div style="margin-bottom: 30px">
                <h5>Your Policy Details</h5>
            </div>
            <?php

            foreach ($policiesInfo as $policyInfo) {
                $PlanName = $policyInfo->plan_name;
                $Sum_assured = $policyInfo->sum_assured;
                $Fixed_premium = $policyInfo->fixed_premium;
                $plan_id = $policyInfo->plan_id;
                $plan_code = $policyInfo->plan_code;
                $policy_type = $policyInfo->policy_type;

                $f_sum_assured = number_format($this->session->userdata('sum_assured'));
                $f_fixed_premium = number_format($this->session->userdata('fixed_premium'));

                echo "<div class='card' style='width: 18rem; margin:5px'>
                    <div class='card-body'>

                        <h5 style='color:#3b3b3b'>
                            $PlanName
                        </h5>

                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>
                            <div style='border:none; border-bottom:1px solid #3b3b3b'>
                                Sum assured 
                                <strong style='color:teal; font-size:19px'>
                                    K$f_sum_assured
                                </strong>
                            </div>
                        </li>
                        <li class='list-group-item'>
                            Your Premium <strong>K$f_fixed_premium</strong>
                        </li>
                    </ul>
                    <button data-type='Accidental pay_as_u_go premium_per_individual_single $f_sum_assured $f_fixed_premium $plan_id $plan_code' class='selection_btn btn btn-primary'>
                        Make Payment
                    </button>
                    </div>
                    </div>";
            }
            ?>
        </div>
        <div class="userInfo">
            <div style="margin-bottom: 30px">
                <h5>Your Personal Details</h5>
            </div>

            <div>
                <div class="circularImage">
                    <img style="width:100%;" src="<?php if ($this->session->userdata('attachments') == '') {
                                                        echo 'assets_web/img/default-profile.png';
                                                    } else {
                                                        echo 'uploads/' . $this->session->userdata('attachments');
                                                    } ?>" alt="Profile">
                </div>
            </div>

            <div>
                <table style="width: 100%;">
                    <tr>
                        <td>Name</td>
                        <td><?php echo $this->session->userdata('full_name') ?></td>
                    </tr>
                    <tr>
                        <td>NRC Number</td>
                        <td><?php echo $this->session->userdata('nrc') ?></td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td><?php echo $this->session->userdata('mobile_no') ?></td>
                    </tr>
                    <tr>
                        <td>Email address</td>
                        <td><?php echo $this->session->userdata('email_id') ?></td>
                    </tr>
                    <tr>
                        <td>Physical Address</td>
                        <td><?php echo $this->session->userdata('address1') ?></td>
                    </tr>
                    <tr>
                        <td>Postal Address</td>
                        <td><?php echo $this->session->userdata('address2') ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button id="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card">

                        <div style="padding:8px" class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-mobilemoney-tab" style="color:#3b3b3b !important;" data-toggle="tab" href="#nav-mobilemoney" role="tab" aria-controls="nav-mobilemoney" aria-selected="true">
                                Mobile Money
                            </a>
                            <a class="nav-item nav-link" id="nav-visacard-tab" style="color:#3b3b3b !important;" data-toggle="tab" href="#nav-visacard" role="tab" aria-controls="nav-visacard" aria-selected="false">
                                VISA Card
                            </a>
                        </div>

                        <div class="container" style="color:#3b3b3b;">
                            <div class="row">
                                <div class="col-sm">
                                    <div style="padding: 5px; border: none; border-right: 1px solid #cccc">
                                        <div class="tab-content" id="nav-tabContent">

                                            <div class="tab-pane fade show active col-lg-8" style="margin:auto" id="nav-mobilemoney" role="tabpanel" aria-labelledby="nav-mobilemoney-tab">
                                                <?= form_open_multipart('website/appointment/mobile', 'id="processInfo"') ?>

                                                <?php
                                                $payment_query = $this->db->select("id,title")
                                                    ->from('collectionmodes')
                                                    ->get()
                                                    ->result();

                                                foreach ($payment_query as $payment_mode) {
                                                    $mop = $payment_mode->title; //$mop for mode of payment
                                                    $id = $payment_mode->id;
                                                    if (($mop == 'AIRTEL MOBILE MONEY') || ($mop == 'MTN MOBILE MONEY') || ($mop == 'ZAMTEL KWACHA')) {

                                                        if ($mop == 'AIRTEL MOBILE MONEY') {
                                                            $mop_logo = './assets_web/img/icons/airtel-icon-ug.png';
                                                            $input_name = $mop;
                                                            $input_id = 'airtel_input';
                                                            $radio_id = 'airtel';
                                                        } elseif ($mop == 'MTN MOBILE MONEY') {
                                                            $mop_logo = './assets_web/img/icons/download.png';
                                                            $input_name = $mop;
                                                            $input_id = 'mtn_input';
                                                            $radio_id = 'mtn';
                                                        } elseif ($mop == 'ZAMTEL KWACHA') {
                                                            $mop_logo = './assets_web/img/icons/0wZc1TWg.png';
                                                            $input_name = $mop;
                                                            $input_id = 'zamtel_input';
                                                            $radio_id = 'zamtel';
                                                        }

                                                ?>

                                                        <div style="width:100%">
                                                            <img style="width:20%" src="<?php echo $mop_logo ?>" alt="Logo">
                                                            <label style="color: #3b3b3b" for="<?php echo $radio_id ?>" class="form-label"><?php echo $mop ?></label>
                                                            <div class="input-group">

                                                                <div class="input-group-text">
                                                                    <input class="form-check-input mt-0" type="radio" value="" name="mobile_money" id="<?php echo $radio_id ?>" aria-label="Radio button for following text input" checked>
                                                                </div>

                                                                <input style="border: 1px solid #ccc" type="number" name="numberPhone" id="<?php echo $input_id ?>" class="form-control" placeholder="Enter phone number" aria-label="Text input with radio button" autocomplete="FALSE">
                                                                <input type="hidden" name="paymentId" value="<?php echo $id ?>">
                                                            </div>
                                                        </div>

                                                <?php
                                                    }
                                                }
                                                ?>


                                                <div style="height:50px;"></div>

                                                <button type="submit" class="btn btn-block btn-primary">
                                                    Make Payment
                                                </button>

                                                <div style="height:70px;"></div>

                                                <div id="backToCoverBtn"></div>

                                                <?= form_close() ?>


                                            </div>

                                            <div class="tab-pane fade show col-lg-7" style="margin:auto" id="nav-visacard" role="tabpanel" aria-labelledby="nav-visacard-tab">
                                                <div class="mb-3">
                                                    <div class="row"> <span class="header">Payment</span>
                                                        <div class="icons"> <img src="./assets_web/img/icons/visa.png" alt="" />
                                                            <img src="./assets_web/img/icons/mastercard-logo.png" alt="Mastercard" /> <img src="./assets_web/img/icons/maestro.png" alt="maestro" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb-3">
                                                            <label style="color: #3b3b3b" for="exampleFormControlInput1" class="form-label">Card Name</label>
                                                            <input style="border: 1px solid #ccc" type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label style="color: #3b3b3b" for="exampleFormControlInput2" class="form-label">Card Number</label>
                                                            <input style="border: 1px solid #ccc" type="email" class="form-control" id="exampleFormControlInput2" placeholder="">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label style="color: #3b3b3b" for="exampleFormControlInput3" class="form-label">Expiry Date</label>
                                                                <input style="border: 1px solid #ccc" type="text" class="form-control" placeholder="" aria-label="First name">
                                                            </div>
                                                            <div class="col">
                                                                <label style="color: #3b3b3b" for="exampleFormControlInput4" class="form-label">CVV</label>
                                                                <input style="border: 1px solid #ccc" type="text" class="form-control" placeholder="" aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="height:50px;"></div>

                                                <button type="button" class="btn btn-block btn-primary">
                                                    Make Payment
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="container">
                                        <div>
                                            <h3>Order Summary</h3>
                                        </div>
                                        <div id="oderContainer" style="padding-left: 20px">
                                            <div id="ordersummarycover"></div>
                                            <div id="ordersummarytype"></div>
                                            <div id="ordersummary3"></div>
                                            <div id="ordersummarycover4"></div>
                                            <h5 id="ordersummarycoverpay"></h5>
                                            <h5 id="ordersummarycoverassured"></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Make Payment</button>
                </div> -->
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets_web/vendor/jquery/jquery-3.3.1.min.js') ?>"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<script type="text/javascript">
    $(".selection_btn").on('click', function(e) {
        $('#staticBackdrop').modal('show')

        $("#ordersummarytype").children("div").remove();
        $("#ordersummarycoverassured").children("div").remove();
        $("#backToCoverBtn").children("div").remove();

        var arr = [];

        var cover_type_selected = '';
        var plan_type_selected = '';
        var policy_type_selected = '';
        var sum_assured_selected = '';
        var premium_amount_selected = '';



        var data = $(this).data("type")
        arr = data.split(' ')

        console.log(arr);

        cover_type_selected = arr[0];
        plan_type_selected = arr[1];
        policy_type_selected = arr[2];
        sum_assured_selected = arr[3];
        premium_amount_selected = arr[4];

        var processForm2 = document.getElementById('processInfo');

        arr.forEach((element, index) => {
            var hiddenInput = document.createElement('input');

            hiddenInput.type = 'hidden';
            hiddenInput.name = index;
            hiddenInput.value = element;
            processForm2.appendChild(hiddenInput);

            var br = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
            processForm2.appendChild(br);
        });

        var hiddenInputRecharge = document.createElement('input');

        hiddenInputRecharge.type = 'hidden';
        hiddenInputRecharge.name = 'recharge';
        hiddenInputRecharge.value = 'true';

        processForm2.appendChild(hiddenInputRecharge);



        $("#ordersummarytype").append(`
                                <div style="padding:5px;">
                                    <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                        <div style="color:#3b3b3b">
                                            <h5>Cover Type</h5>
                                            <h6>${cover_type_selected}</h6>
                                        </div>
                                </div>
                                    `)

        $("#ordersummarycoverassured").append(`
                                        <div style="padding:5px;">
                                            <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                            <div style="color:green">
                                                <h5>Amount Payable : <span style="color:red">K ${premium_amount_selected}.00</span></h5>
                                            </div>
                                        </div>
                                    `)
    })

    $('#close').on('click', function() {
        $('#staticBackdrop').modal('hide')
    })
</script>