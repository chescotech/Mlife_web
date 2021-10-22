<?php
//get language setting
$settings = $this->db->select("language")->get('setting')->row();
?>
<header class="mainHeader">
    <!-- /.Top bar -->
    <div class="order-md-first sidebar-toggle-btn">
        <button type="button" id="sidebarCollapse" class="btn">
            <i class="ti-menu"></i>
        </button>
    </div>

    <script>
(function(w,d,u){
var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'https://mlife.3cx.sc/upload/crm/site_button/loader_1_xivbn3.js');
</script>

    <!-- /.Middle bar -->
    <nav class="navbar navbar-expand-lg d-none d-lg-block header-sticky">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item <?php if (!empty($parent->sub)) {
                                            echo "dropdown";
                                        } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                        <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/') ?>">
                        <img src="assets_web/img/mlifelogo.png" style="width:63%" class="img-responsive">
                        </a>
                    </li>

                    <li class="nav-item <?php if (!empty($parent->sub)) {
                                            echo "dropdown";
                                        } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                        <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/') ?>">Home</a>
                    </li>

                    <?php if (!$this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item <?php if (!empty($parent->sub)) {
                                                echo "dropdown";
                                            } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                            <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/') ?>">Register</a>
                        </li>
                    <?php } ?>

                    <?php if ($this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item <?php if (!empty($parent->sub)) {
                                                echo "dropdown";
                                            } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                            <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/doctors/timetable') ?>">My Commission</a>
                        </li>
                    <?php } ?>

                    <li class="nav-item <?php if (!empty($parent->sub)) {
                                            echo "dropdown";
                                        } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                        <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/premium') ?>">Pay Premium</a>
                    </li>

                    <?php if (!$this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item <?php if (!empty($parent->sub)) {
                                                echo "dropdown";
                                            } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                            <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/term') ?>">Terms And Conditions</a>
                        </li>
                    <?php } ?>
                    <!-- Parent menu -->
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if ($this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item nav-btn">
                            <div class="nav-link js-scroll-trigger">
                                <i class="fa fa-user"></i>
                                <?php echo $this->session->userdata('agent_fullname') ?>
                            </div>
                        </li>
                        <li class="nav-item nav-btn">
                            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('logout') ?>"><i class="icon-calendar"></i>Log Out</a>
                        </li>
                    <?php } ?>

                    <?php if (!$this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item nav-btn">
                            <a class="nav-link js-scroll-trigger" href="<?= base_url($parent->url . '/login') ?>"><i class="icon-calendar"></i>Agent Login</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- /. Navbar -->
    <style>
            #sidebar{
                background-color: #304060;
                color: #FFFFFF;
            }
            #sidebar ul li a{
                color: #FFFFFF!important;
            }
    </style>

    <nav id="sidebar" class="sidebar-nav sidear-right">
        <div id="dismiss">
            <i class="ti-arrow-right"></i>
        </div>
        <ul class="metismenu list-unstyled" id="mobile-menu">
            <!-- Parent menu -->
            <ul class="navbar-nav mr-auto">

                    <li class="nav-item <?php if (!empty($parent->sub)) {
                                            echo "dropdown";
                                        } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                        <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/') ?>">
                        <img src="assets_web/img/mlifelogo.png" style="width:100%" class="img-responsive">
                        </a>
                    </li>

                    <li class="nav-item <?php if (!empty($parent->sub)) {
                                            echo "dropdown";
                                        } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                        <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/') ?>">Home</a>
                    </li>

                    <?php if (!$this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item <?php if (!empty($parent->sub)) {
                                                echo "dropdown";
                                            } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                            <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/') ?>">Register</a>
                        </li>
                    <?php } ?>

                    <?php if ($this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item <?php if (!empty($parent->sub)) {
                                                echo "dropdown";
                                            } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                            <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/doctors/timetable') ?>">My Commission</a>
                        </li>
                    <?php } ?>

                    <li class="nav-item <?php if (!empty($parent->sub)) {
                                            echo "dropdown";
                                        } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                        <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/premium') ?>">Pay Premium</a>
                    </li>

                        <li class="nav-item <?php if (!empty($parent->sub)) {
                                                echo "dropdown";
                                            } ?> <?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">
                            <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/term') ?>">Terms And Conditions</a>
                        </li>
                    <!-- Parent menu -->
                </ul>
        </ul>
        <ul class="navbar-nav ml-auto">
                    <?php if ($this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item nav-btn">
                            <div class="nav-link js-scroll-trigger">
                                <i class="fa fa-user"></i>
                                <?php echo $this->session->userdata('agent_fullname') ?>
                            </div>
                        </li>
                        <li class="nav-item nav-btn">
                            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('logout') ?>"><i class="icon-calendar"></i>Log Out</a>
                        </li>
                    <?php } ?>

                    <?php if (!$this->session->userdata('isLogIn')) { ?>
                        <li class="nav-item nav-btn">
                            <a class="nav-link js-scroll-trigger" href="<?= base_url($parent->url . '/login') ?>"><i class="icon-calendar"></i>Agent Login</a>
                        </li>
                    <?php } ?>

                </ul>
    </nav>
    <div class="overlay"></div>
    <!-- /.End of mobile menu side bar -->
</header>