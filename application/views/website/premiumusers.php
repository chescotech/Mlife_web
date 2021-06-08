<!--  
Make a query to get policies info based on the policy 
memmber id
-->

<?php
$policies_rows = $this->db->select('*')
    ->from('policies AS po')
    ->where('po.id', $this->session->userdata('policy_id'))
    ->join('plans As pl', 'pl.plan_code=po.policy_code', 'left')
    ->join('plan_dependents As pld', 'pld.id=pl.id', 'left')
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

    .content {
        width: 60%;
        margin: 50px auto;
    }
</style>

<div class="mainView row">
    <!-- <div>sidebar</div> -->

    <div class="content">
        <div style="margin-bottom: 30px">
            <h5>Your premiums</h5>
        </div>
        <?php

        foreach ($policiesInfo as $policyInfo) {
            $PlanName = $policyInfo->plan_name;
            $Sum_assured = $policyInfo->sum_assured;
            $Fixed_premium = $policyInfo->fixed_premium;
            $plan_id = $policyInfo->plan_id;
            $plan_code = $policyInfo->plan_code;

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
                                Sum assured 
                                <strong style='color:teal; font-size:19px'>
                                    K$f_sum_assured
                                </strong>
                            </div>
                        </li>
                        <li class='list-group-item'>
                            Get Started at <strong>K$f_fixed_premium</strong>
                        </li>
                    </ul>
                    <button data-type='Accidental pay_as_u_go premium_per_individual_single $f_sum_assured $f_fixed_premium $plan_id $plan_code' class='selection_btn btn btn-primary'>Select
                        Cover
                    </button>
                    </div>
                    </div>";
        }
        ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button id="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Make Payment</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets_web/vendor/jquery/jquery-3.3.1.min.js') ?>"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<script type="text/javascript">
    $(".selection_btn").on('click', function(e) {
        $('#staticBackdrop').modal('show')

        var data = $(this).data("type")
        arr = data.split(' ')

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
    })

    $('#close').on('click', function() {
        $('#staticBackdrop').modal('hide')
    })
</script>