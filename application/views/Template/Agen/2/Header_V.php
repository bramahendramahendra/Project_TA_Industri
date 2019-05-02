<!doctype html>
<html class="no-js" lang="en">

    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard v.1.0 | Adminpro - Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/dashboard_agen/img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/bootstrap.min.css">
        <!-- Font Awesome CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/font-awesome.min.css">
        <!-- adminpro icon CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/adminpro-custon-icon.css">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/meanmenu.min.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/jquery.mCustomScrollbar.min.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/animate.css">
        <!-- data-table CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/data-table/bootstrap-editable.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/normalize.css">
        <!-- buttons CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/buttons.css">
        <!-- charts C3 CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/c3.min.css">
        <!-- datapicker CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/datapicker/datepicker3.css">
        <!-- forms CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/form/all-type-forms.css">
        <!-- modals CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/modals.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/style.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard_agen/css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        
        <!-- Header top area start-->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="admin-logo">
                            <a href="#"><img src="<?= base_url(); ?>assets/dashboard_agen/img/logo/log.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-0 col-xs-12">
                        <div class="header-top-menu">
                            <ul class="nav navbar-nav mai-top-nav">
                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
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
                                        <span class="admin-name"><?= $data_user_agen->first_name; ?></span>
                                        <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                    </a>
                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                        <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>My Account</a>
                                        </li>
                                        <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                        </li>
                                        <li><a href="<?= site_url() ?>Agen/Logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header top area end-->
        <!-- Main Menu area start-->
        <div class="main-menu-area mg-tb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs custom-menu-wrap">
                            <li class="active"><a href="<?= site_url() ?>Agen/Dashboard">Home</a>
                            </li>
                            <li class="active"> <a href="<?= site_url() ?>Agen/Pesanan">Pesanan</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu area End-->
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="dashboard.html">Dashboard v.1</a>
                                            </li>
                                            <li><a href="dashboard-2.html">Dashboard v.2</a>
                                            </li>
                                            <li><a href="analytics.html">Analytics</a>
                                            </li>
                                            <li><a href="widgets.html">Widgets</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="inbox.html">Inbox</a>
                                            </li>
                                            <li><a href="view-mail.html">View Mail</a>
                                            </li>
                                            <li><a href="compose-mail.html">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="others" class="collapse dropdown-header-top">
                                            <li><a href="profile.html">Profile</a>
                                            </li>
                                            <li><a href="contact-client.html">Contact Client</a>
                                            </li>
                                            <li><a href="contact-client-v.1.html">Contact Client v.1</a>
                                            </li>
                                            <li><a href="project-list.html">Project List</a>
                                            </li>
                                            <li><a href="project-details.html">Project Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="google-map.html">Google Map</a>
                                            </li>
                                            <li><a href="data-maps.html">Data Maps</a>
                                            </li>
                                            <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                            </li>
                                            <li><a href="x-editable.html">X-Editable</a>
                                            </li>
                                            <li><a href="code-editor.html">Code Editor</a>
                                            </li>
                                            <li><a href="tree-view.html">Tree View</a>
                                            </li>
                                            <li><a href="preloader.html">Preloader</a>
                                            </li>
                                            <li><a href="images-cropper.html">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            <li><a href="bar-charts.html">Bar Charts</a>
                                            </li>
                                            <li><a href="line-charts.html">Line Charts</a>
                                            </li>
                                            <li><a href="area-charts.html">Area Charts</a>
                                            </li>
                                            <li><a href="rounded-chart.html">Rounded Charts</a>
                                            </li>
                                            <li><a href="c3.html">C3 Charts</a>
                                            </li>
                                            <li><a href="sparkline.html">Sparkline Charts</a>
                                            </li>
                                            <li><a href="peity.html">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="static-table.html">Static Table</a>
                                            </li>
                                            <li><a href="data-table.html">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Login</a>
                                            </li>
                                            <li><a href="register.html">Register</a>
                                            </li>
                                            <li><a href="captcha.html">Captcha</a>
                                            </li>
                                            <li><a href="checkout.html">Checkout</a>
                                            </li>
                                            <li><a href="contact.html">Contacts</a>
                                            </li>
                                            <li><a href="review.html">Review</a>
                                            </li>
                                            <li><a href="order.html">Order</a>
                                            </li>
                                            <li><a href="comment.html">Comment</a>
                                            </li>
                                        </ul>
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
        <div class="breadcome-area mg-t-40 mg-b-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list shadow-reset">
                            <div class="breadcome-heading">
                                <h2><?= $name_page?></h2>
                            </div>
                            <ul class="breadcome-menu">
                                <button type="button" class="btn btn-custon-rounded-three btn-primary" data-toggle="modal" data-target="#Lengkapi-Profile">Lengkapi Profile</button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->