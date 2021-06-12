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
        width: 50%;
        margin: auto;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 10px;
        margin-top: 50px;
        align-items: center;
    }
</style>

<div class="content">
    <div class="container">
        <h6 style="padding-top: 50px;">Pay Your Premium</h6>
        
        <!-- Message & exception -->
        <div style="width: 50%; margin: auto;">
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

            <h5>Enter NRC Number</h5>
            <div class="input-group">
                <input style="border: 1px solid #ccc" type="text" id="nrc_input" name='nrc' class="form-control" placeholder="Enter NRC number" aria-label="Text input with radio button" autocomplete="off">
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