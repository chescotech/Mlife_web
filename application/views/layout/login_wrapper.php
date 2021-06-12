<?php
defined('BASEPATH') or exit('No direct script access allowed');
//get site_align setting
$settings = $this->db->select("site_align")
    ->get('setting')
    ->row();
?>

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
        margin: auto;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 10px;
        align-items: center;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= display('login') ?> - <?php echo (!empty($title) ? $title : null) ?></title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets_web/img/mlifelogo.png">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <?php if (!empty($settings->site_align) && $settings->site_align == "RTL") {  ?>
        <!-- THEME RTL -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/custom-rtl.css') ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- 7 stroke css -->
    <link href="<?php echo base_url(); ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
    <!-- style css -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />


</head>


<body>
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        <div class="container-center">

            <div class="login">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <img src="assets_web/img/mlifelogo.png" class="img-responsive">
                        </div>
                        <div class="header-title">
                            <h3>Madison Domestic Travel</h3>
                            <small><strong><?= display('please_login') ?></strong></small>
                        </div>
                    </div>
                    <div class="">
                        <br><br>
                        <!-- alert message -->
                        <?php if ($this->session->flashdata('message') != null) {  ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('exception') != null) {  ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo $this->session->flashdata('exception'); ?>
                            </div>
                        <?php } ?>

                        <?php if (validation_errors()) {  ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="panel-body">

                    <?php echo form_open('login', 'id="loginForm" novalidate'); ?>
                    <div class="form-group">
                        <label class="control-label" for="code">Agent Code</label>
                        <input type="text" placeholder="agent code" name="agentcode" id="agentcode" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="password"><?= display('password') ?></label>
                        <input type="password" placeholder="<?= display('password') ?>" name="password" id="password" class="form-control">
                    </div>

                    <input type="hidden" name="user_role" value="1">

                    <div>
                        <button type="submit" class="btn btn-block btn-primary"><?= display('login') ?></button>
                    </div>
                    </form>
                </div>

               
            </div>





        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
</body>

</html>