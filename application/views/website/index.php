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
(function(w,d,u){
var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'https://mlife.3cx.sc/upload/crm/site_button/loader_1_xivbn3.js');
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






</html>