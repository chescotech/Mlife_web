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

        $date_filter = "  ";
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
                                    <th> Transaction Date</th>
                                    <th> Policy Number</th>                                   
                                    <th> Agent Code</th>
                                     <th> Agent Names</th>
                                     
                                    <th> Customer names</th>
                                                                 
                                    <th> Plan Name</th>                                  
                                    <th> Premium Received</th>
                                    <th> Commission Rate</th>
                                    <th> Commission (ZMW)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = $this->db->query("SELECT policies.policy_code,plans.plan_name,payment_receipts.date,agents.agent_code,agents.f_name AS f_name,agents.l_name,payment_receipts.amount,payment_receipts.date,customers.f_name,customers.l_name  from payment_receipts
                                    left join 	policy_member  on policy_member.id = payment_receipts.policy_member_id 
                                    left join 	policies  on policies.id = policy_member.policy_id
                                    LEFT join 	plans  on plans.id = policies.plan_id 
                                   LEFT join agents  on agents.id=policies.agent_id
                                   LEFT join 	products  on products.id = plans.product_id 
                                   LEFT join 	customers  on customers.id = policies.customer_id 
                                   left join 	collectionmodes  on collectionmodes.id = policy_member.collection_mode_id
                                     WHERE payment_receipts.date BETWEEN '$from' AND '$to' AND agents.agent_code='$agent_code'
                                ");
                                
                                if ($query->num_rows()) {
                                    $results = $query->result_array();
                                    foreach ($results as $result) {

                                        //$policy_code = $result['policy_code'];
                                        //$policy_type = $result['policy_type'];
                                        // $policy_date = $result['policy_date'];
                                        $customer_fName = $result['fname'];
                                        $customer_lName = $result['lname'];
                                        //$customer_nrc = $result['cs_nrc'];
                                        //$customer_mobile = $result['cs_mobile'];
                                        //$customer_otherName = $result['cs_cname'];
                                        //$policy_member_fName = $result['pm_fname'];
                                        //$policy_member_lName = $result['pm_lname'];
                                        //$policy_member_gender = $result['pm_gender'];
                                        //$policy_member_nrc = $result['pm_nrc'];
                                        //$pm_employee_no = $result['employee_no'];
                                        //$pm_employer = $result['pm_emplr'];
                                        $plan_name = $result['plan_name'];
                                        // $//product_title = $result['title'];
                                        //$payment_mode = $result['pm_cmode'];
                                        $agent_code = $result['agent_code'];
                                        // $agent_fName = $result['ag_fname'];
                                        // $agent_lName = $result['ag_lname'];

                                        $receipt_date = $result['date'];
                                        $policy_code = $result['policy_code'];
                                        $commission_rate = 5; //$result['commission_rate'];
                                        // $modal_premium = $result['modal_premium'];
                                        $premium_received = $result['amount'];

                                        $commission = ($commission_rate/100)*$premium_received; //$result['commission'];
                                        $total_commission += $commission;
                                        ?>

                                        <tr>
                                            <td> <?php echo $receipt_date ?> </td>
                                            <td> <?php echo $policy_code; ?> </td>   
                                            <td> <?php echo $agent_code ?> </td>
                                             <td> <?php echo $this->session->userdata('agent_fullname')  ?> </td>
                                            <td> <?php echo $result['f_name'].' '.$result['l_name']; ?> </td>
                                           
                                            <td> <?php echo $plan_name ?> </td>


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

    $(function () {
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