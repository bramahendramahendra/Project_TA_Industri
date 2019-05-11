<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PT Zetka Niagatama</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/landing/images/icons/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/bootstrap.min.css">
        <!-- Font Awesome CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/font-awesome.min.css">
        <!-- adminpro icon CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/adminpro-custon-icon.css">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/meanmenu.min.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/jquery.mCustomScrollbar.min.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/animate.css">
        <!-- data-table CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/data-table/bootstrap-editable.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/normalize.css">
        <!-- modals CSS
		    ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/modals.css">
        <!-- buttons CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/buttons.css">
        <!-- charts CSS
		    ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/charts.css">
        <!-- charts C3 CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/c3.min.css">
        <!-- chosen CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/chosen/bootstrap-chosen.css">
        <!-- select2 CSS
		============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/select2/select2.min.css">
        <!-- datapicker CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/datapicker/datepicker3.css">
        <!-- forms CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/form/all-type-forms.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/style.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="darklayout">

        <!-- Header top area start-->
        <div class="wrapper-pro">
            <!-- start sidebar -->
            <div class="left-sidebar-pro">
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/message/1.jpg" alt="" />
                        </a>
                        <h3><?= $data_user_admin->first_name.' '.$data_user_admin->last_name; ?></h3>
                        <p><?= $status; ?></p>
                        <strong><?= $status_singkatan; ?></strong>
                    </div>
                    <div class="left-custom-menu-adp-wrap">
                        <ul class="nav navbar-nav left-sidebar-menu-pro">
                            <li class="nav-item">
                                <a href="<?= site_url() ?>Admin/Dashboard" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa big-icon fa-home"></i> 
                                    <span class="mini-dn">Home</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url() ?>Admin/Agen" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa big-icon fa-user"></i> 
                                    <span class="mini-dn">Agen</span> 
                                </a>
                               
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url() ?>Admin/Pesanan" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa big-icon fa-table"></i> 
                                    <span class="mini-dn">Pesanan</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" data-toggle="modal" data-target="#Search-Charts" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa big-icon fa-bar-chart-o"></i> 
                                    <span class="mini-dn">Charts</span> 
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa big-icon fa-bar-chart-o"></i> 
                                    <span class="mini-dn">Reports</span> 
                                    <span class="indicator-right-menu mini-dn">
                                        <i class="fa indicator-mn fa-angle-left"></i>
                                    </span>
                                </a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                    <a href="" data-toggle="modal" data-target="#Search-Charts-Tipe" class="dropdown-item">Reports Tipe</a>
                                    <a href="" data-toggle="modal" data-target="#Search-Charts" class="dropdown-item">Reports Bulan</a>
                                    <a href="" data-toggle="modal" data-target="#Search-Charts-Tahunan" class="dropdown-item">Reports Tahun</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa big-icon fa-bar-chart-o"></i> 
                                    <span class="mini-dn">Reports 2017</span> 
                                    <span class="indicator-right-menu mini-dn">
                                        <i class="fa indicator-mn fa-angle-left"></i>
                                    </span>
                                </a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                    <a href="<?= site_url() ?>Admin/P2017" class="dropdown-item">Table</a>
                                    <a href="" data-toggle="modal" data-target="#Search-Charts-2017" class="dropdown-item">Reports</a>
                                    <a href="<?= site_url() ?>Admin/P2017_Charts" class="dropdown-item">Reports Tahun</a>
                                </div>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa big-icon fa-bar-chart-o"></i> 
                                    <span class="mini-dn">Charts</span> 
                                    <span class="indicator-right-menu mini-dn">
                                        <i class="fa indicator-mn fa-angle-left"></i>
                                    </span>
                                </a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                    <a href="<?= site_url() ?>Admin/Keuangan" class="dropdown-item">Januari</a>
                                    <a href="<?= site_url() ?>Admin/Penjualan" class="dropdown-item">Februari</a>
                                    <a href="<?= site_url() ?>Admin/Keuangan" class="dropdown-item">Maret</a>
                                    <a href="<?= site_url() ?>Admin/Penjualan" class="dropdown-item">April</a>
                                    <a href="<?= site_url() ?>Admin/Keuangan" class="dropdown-item">Mei</a>
                                    <a href="<?= site_url() ?>Admin/Penjualan" class="dropdown-item">Juni</a>
                                    <a href="<?= site_url() ?>Admin/Keuangan" class="dropdown-item">Juli</a>
                                    <a href="<?= site_url() ?>Admin/Penjualan" class="dropdown-item">Agustus</a>
                                    <a href="<?= site_url() ?>Admin/Keuangan" class="dropdown-item">September</a>
                                    <a href="<?= site_url() ?>Admin/Penjualan" class="dropdown-item">Oktober</a>
                                    <a href="<?= site_url() ?>Admin/Keuangan" class="dropdown-item">November</a>
                                    <a href="<?= site_url() ?>Admin/Penjualan" class="dropdown-item">Desember</a>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa big-icon fa-files-o"></i> 
                                    <span class="mini-dn">Department</span> 
                                    <span class="indicator-right-menu mini-dn">
                                        <i class="fa indicator-mn fa-angle-left"></i>
                                    </span>
                                </a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                    <a href="<?= site_url() ?>Admin/Keuangan" class="dropdown-item">Keuangan</a>
                                    <a href="<?= site_url() ?>Admin/Penjualan" class="dropdown-item">Penjualan</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end sidebar -->
            <div class="content-inner-all">
                <!-- start menu  -->
                <div class="header-top-area">
                    <div class="fixed-header-top">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div class="admin-logo logo-wrap-pro">
                                        <a href="#"><img src="img/logo/log.png" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="<?= site_url() ?>Admin/Dashboard" class="nav-link">Home</a>
                                            </li>
                                            <li class="nav-item"><a href="<?= site_url() ?>Admin/Agen" class="nav-link">Agen</a>
                                            </li> 
                                            <li class="nav-item"><a href="<?= site_url() ?>Admin/Pesanan" class="nav-link">Pesanan</a>
                                            </li> 
                                            <li class="nav-item"><a href="<?= site_url() ?>Admin/Charts" class="nav-link">Reports</a>
                                            </li> 
                                            <li class="nav-item"><a href="#" class="nav-link">About</a>
                                            </li>            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <span class="adminpro-icon adminpro-checked-pro"></span>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <span class="adminpro-icon adminpro-cloud-computing-down"></span>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <span class="adminpro-icon adminpro-shield"></span>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <span class="adminpro-icon adminpro-analytics-arrow"></span>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                    <span class="admin-name"><?= $data_user_admin->first_name; ?></span>
                                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                    <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>My Account</a>
                                                    </li>
                                                    <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                                    </li>
                                                    <li><a href="<?= site_url(); ?>Admin/Logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end menu  -->
                <!-- Header top area end-->
                <!-- Breadcome start-->
                <div class="breadcome-area mg-b-30 small-dn">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcome-heading">
                                                <h2>
                                                    <a href="#" class="bread-blod" style="color:white">Home</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <ul class="breadcome-menu">
                                                <button type="button"  data-toggle="modal" data-target="#Lengkapi-Profile" class="btn btn-custon-rounded-three btn-success">Lengkapi Profile</button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Breadcome End-->
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li>
                                                <a data-toggle="collapse" data-target="#Charts" href="<?= site_url() ?>Admin/Dashboard">Home 
                                                    <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span>
                                                </a>  
                                            </li>
                                            <li>
                                                <a data-toggle="collapse" data-target="#demo" href="<?= site_url() ?>Admin/Agen">Agen 
                                                    <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span>
                                                </a>
                                                
                                            </li>
                                            <li>
                                                <a data-toggle="collapse" data-target="#others" href="<?= site_url() ?>Admin/Pesanan">Pesanan 
                                                    <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span>
                                                </a>
                                            </li> 
                                            <li>
                                                <a data-toggle="collapse" data-target="#Chartsmob" href="<?= site_url() ?>Admin/Charts">Charts 
                                                    <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <!-- Breadcome start-->
                <div class="breadcome-area des-none">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcome-heading">
                                                <h2>
                                                    <a href="#" class="bread-blod" style="color:white">Home</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <ul class="breadcome-menu">
                                                <button type="button" data-toggle="modal" data-target="#Lengkapi-Profile" class="btn btn-custon-rounded-three btn-success">Lengkapi Profile</button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Breadcome End-->