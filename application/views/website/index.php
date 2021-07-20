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

    <!-- Export to PDF DATATables -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    
</head>

<body>
    <!-- header -->
    <?php @$this->load->view('website/includes/header'); ?>
    <!-- /.Main header -->

    <?php 
        $uniqid = "rand(1,90000)"; 
        $_SESSION['uniqid'] = $uniqid;
    ?>

    <!-- main content -->
    <?php echo (!empty($content) ? $content : null) ?>
    <!-- end main content -->

    <!-- /.appointment block -->

    <!-- ./footer -->
    <?php @$this->load->view('website/includes/footer'); ?>
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

        <!-- Export to PDF - Datatable -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>

</body>





<!-- uploadecel Modal -->
<div class="modal fade" id="uploadexcel" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div style="color: #3b3b3b" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #3b3b3b" id="staticBackdrop1Label">
                    Upload a Valid .csv Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Upload EXCEL DOC... -->
                <?php

                $file_formats = array("csv");
                $filepath = "assets_web/docs/excel/";
                $_SESSION['filepath'] = $filepath;

                if (isset($_POST['submitbtn']) && $_POST['submitbtn']=="Submit") {

                    $name = $_FILES['imagefile']['name']; // filename to get file's extension
                    $size = $_FILES['imagefile']['size'];                    
                    
                    if (strlen($name)) {
                        $extension = substr($name, strrpos($name, '.')+1);
                        if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
                            if ($size < (8048 * 1024)) { // check it if it's bigger than 2 mb or no
                                
                                $full_file = $filepath . $uniqid.'.csv';
                                $tmp = $_FILES['imagefile']['tmp_name'];
                                    if (move_uploaded_file($tmp, $full_file)) {
                                        // echo '<img class="preview" alt="" src="'.$filepath.'/img.jpg" />';
                                        // echo '<img src="assets_web/img/mlifelogo.png" style="width:63%" class="img-responsive">';
                                        echo "<script>alert('File uploaded successfully.')</script>";
                                    } else {
                                        echo "<script>alert('Could not move the file.')</script>";
                                        // echo '<img src="assets_web/img/mlifelogo.png" style="width:63%" class="img-responsive">';
                                    }
                            } else {
                                echo "<script>alert('Your file is too large. Maximum size allowed is 8MB.')</script>";
                            }
                        } else {
                                echo "<script>alert('Invalid file format. Please upload a valid .csv file')</script>";
                        }
                    } else {
                        echo "<script>alert('Please select a .csv file..!')</script>";
                    }
                    die();
                }
                
            ?>
            <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.js"></script>
            <script type="text/javascript" >
                $(document).ready(function() {
                    $('#submitbtn').click(function() {
                        $("#viewimage").html('');
                        $("#viewimage").html('<img src="img/loading.gif" />');
                        $(".uploadform").ajaxForm({
                            target: '#viewimage'
                        }).submit();
                    });
                });
            </script> 
            <!-- <h2> <img src="assets_web/img/mlifelogo.png" style="width:63%" class="img-responsive"> </h2> -->
 
            <form class="uploadform" method="post" enctype="multipart/form-data" action=''>
                Upload your image <input type="file" name="imagefile" />
				<input type="submit" value="Submit" name="submitbtn" id="submitbtn">
			</form>
			
            <input type='hidden' id='viewimage' >
                <!-- Finish uploading doc -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end uploadecel Modal -->






</html>