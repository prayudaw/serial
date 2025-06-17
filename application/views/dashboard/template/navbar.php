    <header id="topnav">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span><?php echo $this->session->userdata('nama') ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item btn-logout">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="<?php echo base_url() ?>assets/img/perpus/bk-logo.png" alt="" height="65">
                            <!-- <span class="logo-lg-text-light">Zircos</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">Z</span> -->
                            <img src="<?php echo base_url() ?>assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="<?php echo base_url() . INDEX_URL ?>dashboard/jurnal/jurnal_tambah"> <i
                                    class="mdi mdi-view-dashboard"></i>Dashboard</a>
                        </li>
                        <li class="has-submenu">
                            <a href="<?php echo base_url() . INDEX_URL ?>dashboard/jurnal"> <i
                                    class=" mdi mdi-newspaper-variant-multiple-outline"></i>Jurnal
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="mdi mdi-plus-box-multiple-outline"></i>Tambah
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a
                                                href="<?php echo base_url() . INDEX_URL ?>dashboard/jurnal/jurnal_tambah">Serial
                                                Baru</a></li>
                                        <li><a href="<?php echo base_url() . INDEX_URL ?>dashboard/jurnal/tambah_edisi">Edisi
                                                Baru</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->
    </header>