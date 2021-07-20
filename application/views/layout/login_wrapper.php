<?php
defined('BASEPATH') or exit('No direct script access allowed');
//get site_align setting
$settings = $this->db->select("site_align")
    ->get('setting')
    ->row();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keyword" content="<?= (!empty($setting->meta_keyword) ? $setting->meta_keyword : null) ?>" />
    <meta name="description" content="<?= (!empty($setting->meta_tag) ? $setting->meta_tag : null) ?>" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= (!empty($basics->favicon) ? base_url($basics->favicon) : base_url('assets_web/img/placeholder/favicon.png')) ?>" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mlife Travel Insurance</title>

    <!-- CSS -->
    <link href="<?= base_url('assets_web/vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets_web/vendor/mdb/css/mdb.min.css') ?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets_web/css/animate.min.css') ?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets_web/vendor/fontawesome/css/all.min.css') ?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets_web/vendor/themify-icons/themify-icons.min.css') ?>" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets_web/vendor/et-line-font/et-line.min.css') ?>" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets_web/vendor/metismenu/metisMenu.min.css') ?>" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets_web/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets_web/vendor/OwlCarousel2/dist/assets/owl.carousel.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets_web/vendor/OwlCarousel2/dist/assets/owl.theme.default.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets_web/vendor/select2/dist/css/select2.min.css') ?>" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets_web/vendor/select2/dist/css/select2-bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets_web/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets_web/css/style.css') ?>" type="text/css" rel="stylesheet">
    <!-- <link href="<?= base_url('assets_web/font/flaticon.css') ?>" type="text/css" rel="stylesheet"> -->
    <link href="<?= base_url('assets_web/vendor/bs-stepper/css/bs-stepper.css') ?>" type="text/css" rel="stylesheet" media="all">


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

</head>

<body>
    <!-- header -->
    <?php @$this->load->view('website/includes/header'); ?>
    <!-- /.Main header -->

    <!-- main content -->
    <?php echo (!empty($content) ? $content : null) ?>
    <!-- end main content -->






    <div class="login-wrapper">
        <div class="container-center">

            <div class="login">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <img src="assets_web/img/mlifelogo.png" style="width:90%" class="img-responsive">
                        </div>
                        <div class="header-title">
                            <!-- <h3>Madison Domestic Travel</h3> -->
                            <br>
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
                        <input type="text" style="border: 1px solid #ccc" placeholder="agent code" name="agentcode" id="agentcode" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="password"><?= display('password') ?></label>
                        <input type="password" style="border: 1px solid #ccc" placeholder="<?= display('password') ?>" name="password" id="password" class="form-control">
                    </div>

                    <input type="hidden" name="user_role" value="1">

                    <div>
                        <button type="submit" class="btn btn-block btn-primary"><?= display('login') ?></button>
                    </div>
                    <div style="margin-top: 10px;">
                        <a href="<?= base_url('resetpass') ?>" class="btn btn-block btn-secondary"> Reset Password</a>
                    </div>
                    </form>
                </div>


            </div>





        </div>
    </div>






    <!-- /.appointment block -->

    <!-- <?php @$this->load->view('website/includes/footer'); ?> -->
    <!-- ./footer -->
    <!-- ./sub footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets_web/vendor/jquery/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/jquery/jquery.validate.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/bs-stepper/js/index.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/mdb/js/mdb.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/metismenu/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/OwlCarousel2/dist/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/select2/dist/js/select2.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/masonry/dist/masonry.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/js/file-upload.js') ?>"></script>
    <script src="<?= base_url('assets_web/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets_web/js/script.js') ?>"></script>
    <script>
        (function() {
            var w = window;
            if (w.ChannelIO) {
                return (window.console.error || window.console.log || function() {})('ChannelIO script included twice.');
            }
            var ch = function() {
                ch.c(arguments);
            };
            ch.q = [];
            ch.c = function(args) {
                ch.q.push(args);
            };
            w.ChannelIO = ch;

            function l() {
                if (w.ChannelIOInitialized) {
                    return;
                }
                w.ChannelIOInitialized = true;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
                s.charset = 'UTF-8';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
            if (document.readyState === 'complete') {
                l();
            } else if (window.attachEvent) {
                window.attachEvent('onload', l);
            } else {
                window.addEventListener('DOMContentLoaded', l, false);
                window.addEventListener('load', l, false);
            }
        })();
        ChannelIO('boot', {
            "pluginKey": "da6082d8-aa19-4be3-a861-6ce8ccf08595"
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {


            $('#userLang').on("change", function() {
                var userLang = $('#userLang').val();

                $.ajax({
                    url: '<?= base_url('home/chane_language/') ?>',
                    type: 'post',
                    data: {
                        '<?= $this->security->get_csrf_token_name(); ?>': '<?= $this->security->get_csrf_hash(); ?>',
                        userLang
                    },
                    success: function(data) {
                        location.reload();
                    },
                    error: function() {
                        alert('failed');
                    }
                });
            });


        });
    </script>
</body>

</html>