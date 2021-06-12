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

    <!-- /.Middle bar -->
    <nav class="navbar navbar-expand-lg d-none d-lg-block header-sticky">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
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
                            <a style="color: #0a56ee;" class="nav-link" href="<?= base_url($parent->url . '/') ?>">Terms And Conditions</a>
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
    <nav id="sidebar" class="sidebar-nav">
        <div id="dismiss">
            <i class="ti-arrow-right"></i>
        </div>
        <ul class="metismenu list-unstyled" id="mobile-menu">
            <!-- Parent menu -->
            <?php if (!empty($parent_menu)) { ?>
                <?php foreach ($parent_menu as $parent) {
                    //print_r($parent);
                ?>
                    <li class="<?php echo (($this->uri->segment(1) == $parent->url) ? "active" : null) ?>">

                        <?php if (!empty($parent->sub)) { ?>
                            <a href="" aria-expanded="false">
                                <?= $parent->title ?>
                                <span class="fa arrow"></span></a>
                        <?php } else { ?>
                            <?php if ($parent->url == "page") { ?>
                                <a href="<?= base_url($parent->url . '/' . $parent->content_id) ?>"><?= $parent->title ?></a>
                            <?php } else { ?>
                                <a href="<?= base_url($parent->url) ?>"><?= $parent->title ?></a>
                            <?php } ?>
                        <?php } ?>

                        <!-- Sub Menu -->
                        <?php if (!empty($parent->sub)) { ?>
                            <ul aria-expanded="false">
                                <?php foreach ($parent->sub as $sub) {
                                    //$sub->content_id
                                ?>
                                    <li>


                                        <?php if (!empty($sub->sub)) { ?>
                                            <a href="" aria-expanded="false"><?= $sub->title ?><span class="fa arrow"></span></a>
                                        <?php } else { ?>
                                            <?php if ($sub->url == "page") { ?>
                                                <a href="<?= base_url($sub->url . '/' . $sub->content_id) ?>"><?= $sub->title ?></a>
                                            <?php } else { ?>
                                                <a href="<?= base_url($sub->url) ?>"><?= $sub->title ?></a>
                                            <?php } ?>
                                        <?php } ?>

                                        <!-- Sub Sub Menu -->
                                        <?php if (!empty($sub->sub)) { ?>
                                            <ul aria-expanded="false">
                                                <?php foreach ($sub->sub as $subs) { ?>
                                                    <li><a href="<?= base_url($subs->url . '/' . $subs->content_id) ?>"><?= $subs->title ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </nav>
    <div class="overlay"></div>
    <!-- /.End of mobile menu side bar -->
</header>