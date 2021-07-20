<style>
    .coveredPersonTable {
        color: #3b3b3b
    }

    .my_table {

        color: white !important;
    }

    .my_table table td {
        color: white;
        background-color: #304050;
    }

    th {
        color: #5B9B94;
    }

    .center_table {
        padding: 50px;
        background-color: #304060;
    }

    /* Table scrolable */
    .Table_Div {
        height: 800px;
        overflow: auto;
    }

    .User_Table {
        width: 100%;

        border-collapse: collapse;
    }

    .User_Table th {
        text-align: left;
        color: white;
        border-right: 1px solid #ccc;
        background-color: #394E59;
    }

    .User_Table tbody td {
        border: 1px solid #f1f1f1;
    }
    button{
        color:red;
        background-color: #fefefe !important;
    }
</style>
<div style="background-color:#304060; height:40px"> </div>

<div style="padding:10px 10px 10px 90px; background-color:#4E5C77; color : white">
    <?php
    $agent_code = $this->session->userdata('agent_code');
    echo "<h3>Commission Report For <b>" . $this->session->userdata('agent_fullname') . "</b></h3>";
    // var_dump($agent_code)
    ?>
</div>



<div class="center_table">
    <div style='background-color: transparent'>
        <form action="#" method="POST">
            <div style="display: flex; background-color: transparent">
                <input style="width: 150px;" type="text" class="form-control datepicker" name="from" id="date1" placeholder="Starting date" required autocomplete="off">
                <input style="width: 150px; margin-left:10px;" type="text" class="form-control datepicker" name="to" id="date1" placeholder="Ending date" required autocomplete="off">
                <p style="width:10px"></p>
                <input type="submit" value="Generate Report" name="filter">
                <p style="width:10px"></p>
                <a href="" class="btn btn-sm btn-white">Resest</a>
            </div>
        </form>
        <br>
    </div>

    <?php


    // Filter By Date
    $date_filter = "";
    if (isset($_POST['filter'])) {
        $from1 = $_POST['from'];
        $to1 = $_POST['to'];

        $from = date('Y-m-d', strtotime($from1)) . " 00:00:00";
        $to = date('Y-m-d', strtotime($to1)) . " 00:00:00";

        // echo "$to and $from <br> $to1 and $from1";

        $date_filter = "AND receipt_date BETWEEN '$from' AND '$to' ";
    }
    ?>


    <div class="col-xs-12 tab-content">

        <div class="my_table">
            <div class="row">
                <div class="col-md-12">
                    <div class="Table_Div" style="overflow-x:auto;">
                        <table width="100%" id="example" class="datatable table table-striped table-bordered table-hover User_Table">
                            <thead>
                                <tr>
                                    <th> Debit Date</th>
                                    <th> Policy Number</th>                                    <th> Agen Code</th>
                                    <th> Customer First Name</th>
                                    <th> Customer Last Name</th>
                                    <th> Employer</th>
                                    <th> Plan Name</th>
                                    <th> Collection Mode</th>
                                    <th> Modal Premium</th>
                                    <th> Premium Received</th>
                                    <th> Commission Rate</th>
                                    <th> Commission (ZMW)</th>

                                </tr>
                            </thead>
                            <tbody>


                                <?php

                                $query = $this->db->query("SELECT rec.policy_member_id, pl.policy_code AS policy_code, pl.policy_type AS policy_type,
                                                    pm.policy_date AS 	policy_date, cs.f_name AS cs_fname, cs.l_name AS cs_lname, 
                                                    cs.nrc AS cs_nrc, cs.mobile_no AS cs_mobile, cs.c_name AS cs_cname, 
                                                    pm.member_f_name AS pm_fname, pm.member_l_name AS pm_lname, pm.gender AS pm_gender, 
                                                    pm.NRC_passport AS pm_nrc, pm.employee_no AS employee_no, 
                                                    coalesce(em.company_name,'') AS pm_emplr, pn.plan_name AS plan_name, pr.title AS title, 
                                                    cm.title AS pm_cmode, pl.agent_id, ag.agent_code, ag.f_name AS ag_fname, ag.l_name AS ag_lname, 
                                                    ag.NRC AS ag_nrc, ag.mobile_no AS ag_mobile, ag.agent_id AS ag_id, cr.currency_code AS cr_ccode, 
                                                    ag.commission_rate, rec.modal_premium, rec.premium_received, rec.paid_upto as debit_date, 
                                                    rec.icount as premium_count, rec.receipt_date, prec.id, prec.receipt_no, prec.doc_reference_no,
                                                    prec.remark, round(cast(rec.premium_received / 1.03 as decimal(10,2)),2) as prem_less_levy,
                                                    round(cast(round(cast(rec.premium_received / 1.03 as decimal(10,2)),2) * ag.commission_rate / 100 as decimal(10,2)),2) as commission, 
                                                    round(cast(cast(rec.premium_received as decimal(10,2)) - round(cast(rec.premium_received / 1.03 as decimal(10,2)),2) as decimal(10,2)),2) as levy
                                                    from 	vw_fully_received_premium rec
                                                    join	credit_entries crd on (crd.id = rec.credit_id)
                                                    join	payment_receipts prec on (prec.id = crd.rec_id)
                                                    join 	policy_member pm on (pm.id = rec.policy_member_id and pm.policy_id = rec.policy_id) 
                                                    join 	policies pl on (pl.id = pm.policy_id) 
                                                    join 	plans pn on (pn.id = pl.plan_id) 
                                                    join 	products pr on (pr.id = pn.product_id) 
                                                    join 	customers cs on (cs.id = pl.customer_id) 
                                                    join 	collectionmodes cm on (cm.id = pm.collection_mode_id) 
                                                    join 	currencies cr on (cr.id = pl.currency_id) 
                                                    join 	vw_agents ag on (ag.agent_id = pl.agent_id and ag.product_id = pn.product_id)
                                                    left outer join employers em on (em.id = pm.employer_id) 
                                                    where 	case when rec.receipt_date >= rec.paid_upto then rec.receipt_date else rec.paid_upto end >= '2019-01-01' 
                                                    and 	case when rec.receipt_date >= rec.paid_upto then rec.receipt_date else rec.paid_upto end <= '2019-01-31' 
                                                    and 	rec.paid_upto > '2018-12-31' and rec.paid_upto <= '2019-01-31'
                                                    and 	rec.paid_upto >= effective_from_date and rec.paid_upto <= effective_to_date 
                                                    and 	rec.icount >= commission_from_month and rec.icount <= commission_to_month
                                                    $date_filter
                                                    and     ag.agent_id = '$agent_code'
                                                ");

                                if ($query->num_rows()) {
                                    $results = $query->result_array();
                                    foreach ($results as $result) {

                                        $policy_code = $result['policy_code'];
                                        $policy_type = $result['policy_type'];
                                        $policy_date = $result['policy_date'];
                                        $customer_fName = $result['cs_fname'];
                                        $customer_lName = $result['cs_lname'];
                                        $customer_nrc = $result['cs_nrc'];
                                        $customer_mobile = $result['cs_mobile'];
                                        $customer_otherName = $result['cs_cname'];
                                        $policy_member_fName = $result['pm_fname'];
                                        $policy_member_lName = $result['pm_lname'];
                                        $policy_member_gender = $result['pm_gender'];
                                        $policy_member_nrc = $result['pm_nrc'];
                                        $pm_employee_no = $result['employee_no'];
                                        $pm_employer = $result['pm_emplr'];
                                        $plan_name = $result['plan_name'];
                                        $product_title = $result['title'];
                                        $payment_mode = $result['pm_cmode'];
                                        $agent_code = $result['agent_code'];
                                        $agent_fName = $result['ag_fname'];
                                        $agent_lName = $result['ag_lname'];

                                        $receipt_date = $result['receipt_date'];
                                        $policy_code = $result['policy_code'];
                                        $commission_rate = $result['commission_rate'];
                                        $modal_premium = $result['modal_premium'];
                                        $premium_received = $result['premium_received'];

                                        $commission = $result['commission'];
                                        $total_commission += $commission;

                                ?>

                                        <tr>
                                            <td> <?php echo $receipt_date ?> </td>
                                            <td> <?php echo $policy_code ?> </td>                                            <td> <?php echo $agent_code ?> </td>
                                            <td> <?php echo $customer_fName ?> </td>
                                            <td> <?php echo $customer_lName ?> </td>

                                            <td> <?php echo $pm_employer ?> </td>
                                            <td> <?php echo $plan_name ?> </td>
                                            <td> <?php echo $payment_mode ?> </td>
                                            <td> <?php echo $modal_premium ?> </td>
                                            <td> <?php echo $premium_received ?> </td>
                                            <td> <?php echo $commission_rate ?> </td>
                                            <td> <?php echo $commission ?> </td>

                                        </tr>

                                <?php
                                    }
                                } else {
                                    echo "NOTHING TO SHOW HERE";
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Total Commission (ZMW)</td>
                                    <th> <?php echo $total_commission ?> </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 200px;">

        </div>
    </div>

</div>

<script>
    // Scrollable table

    $(function() {
        Fixed_Header();
    });


    function Fixed_Header() {
        // $('.User_Table thead').css({
        //     'position': 'absolute'
        // });
        // var Header_Height = $('.User_Table thead').outerHeight();
        // $('.User_Table thead').css({
        //     'margin-top': "-" + Header_Height + "px"
        // });
        $('.User_Table').css({
            'margin-top': Header_Height + "px"
        });
    }
</script>