<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8" />
        <title>Real Count - Web Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />


        <script src="<?php echo base_url() ?>assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo.png" alt="">
                        </span>
                        <i>
                            <img src="assets/images/logo_sm.png" alt="">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        

                       

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Anderson <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ti-user"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ti-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ti-lock"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="<?php echo base_url() ?>auth/logout" class="dropdown-item notify-item">
                                    <i class="ti-power-off"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="user-details">
                    <div class="pull-left">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                    </div>
                    <div class="user-info">
                        <a href="#">Stanley Jones</a>
                        <p class="text-muted m-0">Administrator</p>
                    </div>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="<?php echo base_url() ?>">
                                <i class="ti-home"></i><span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url() ?>tps">
                                <i class="mdi mdi-animation"></i><span> Suara</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>petugas">
                                <i class="mdi mdi-account-supervisor"></i><span> Petugas</span>
                            </a>
                        </li>

                        


                        <?php if ($this->session->userdata('session_kategori') == 'kecamatan'): ?>
                        <li>
                            <a href="<?php echo base_url() ?>tes">
                                <i class="mdi mdi-account-supervisor"></i><span> Pendaftaran TPS</span>
                            </a>
                        </li>
                        <?php endif ?>


                        

                        <li>
                            <a href="<?php echo base_url() ?>wilayah">
                                <i class="mdi mdi-earth"></i><span> Wilayah</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>akun">
                                <i class="mdi mdi-account-circle"></i><span> Akun</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>list_api">
                                <i class="mdi mdi-key"></i><span> API</span>
                            </a>
                        </li>

                        

                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                  
                    <div class="container-fluid">
                      


