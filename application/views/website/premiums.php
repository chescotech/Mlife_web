<style>
    .content {
        width: 100%;
        height: 100vh;
        background-color: #FCFCFC;
    }

    .container {
        width: 100%;
        height: 100%;
        text-align: center;
    }

    .login {
        width: 90%;
        margin: auto;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 10px;
        margin-top: 50px;
        align-items: center;
    }

    .topbar {
        height: 40px;
        width: 100%;
        background-color: #09265D;
        padding: 10px;
        -moz-box-shadow: 0px 1px 2px 2px #ccc;
        -webkit-box-shadow: 0px 1px 2px 2px #ccc;
        box-shadow: 0px 1px 2px 2px #ccc;
        position: fixed;
        width: 100%;
        z-index: 1000;
    }
    .hidden {
        display: none;
    }
</style>
    <div class="container">
        <h6 style="padding-top: 50px;"></h6>

        <!-- Message & exception -->
        <div style="width: 90%; margin: auto;">
            <div class="col-sm-12">
                <?php if ($this->session->flashdata('exception') != null) {  ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('exception'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="login">
            <?= form_open_multipart('premium/premiumValidate', 'id="processInfo"') ?>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="typushi" value="indie" id="individual" checked>
                        <label style="color: #191515" class="form-check-label" for="individual">
                            Pay as an Individual
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="typushi" value="com" id="company">
                        <label style="color: #191515" class="form-check-label" for="company" autocomplete="off">
                           Pay as a Company
                        </label>
                    </div>
                </div>
            </div>

            <!-- Individual data -->
            <div class="form-row " id="individual_data">
                <h5>Enter NRC Number</h5>
                <div class="input-group">
                    <input style="border: 1px solid #ccc" type="text" id="nrc_input" name='nrc' class="form-control" placeholder="Enter NRC number" aria-label="Text input with radio button" autocomplete="off">
                </div>
            </div>
            <!-- Company data -->
            <div class="form-row hidden" id="company_data">
                <h5>Enter Policy Number</h5>
                <div class="input-group">
                    <input style="border: 1px solid #ccc" type="text" id="policy_input" name='policy_code' class="form-control" placeholder="Enter Policy No." aria-label="Text input with radio button" autocomplete="off">
                </div>
            </div>


            <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-block btn-primary">
                    Next
                </button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./assets_web/vendor/dropzone-5.7.0/dist/dropzone.js"></script>

<script type="text/javascript">
    $('#individual').on('change', function(e) {
        if ($(this).is(':checked')) {
            $("input[name='Reg_type'").val("Individual");
            registion_type = 'individual'

            $('#individual_data').collapse('show')
            $('#individual_data').removeClass('hidden')
            $('#company_data').collapse('hide')
            $('#company_data').addClass('hidden')
        }
    })
    $('#company').on('change', function(e) {
        if ($(this).is(':checked')) {
            $("input[name='Reg_type'").val("Company");
            registion_type = 'company'


            $('#company_data').collapse('show')
            $('#company_data').removeClass('hidden')
            $('#individual_data').collapse('hide')
            $('#individual_data').addClass('hidden')
        }
    })
</script>