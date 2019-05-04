<div class=" bg-img1 size1 overlay1" style="background-image: url('<?= base_url(); ?>assets/landing/images/landing/background.jpg');">
    
    <!-- Register Start-->
    <div class="login-form-area ">
        <div class="container-fluid">
            <div class="row mg-t-30 mg-b-15">
                <div class="col-lg-3"></div>
                <form action="<?= site_url('Admin/Register/Sign_Up'); ?>" method="post" id="adminpro-register-form" class="adminpro-form">
                    <div class="col-lg-6">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <a href="#">
                                            <h1 style="color:white"><b><?= $title; ?></b></h1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <h1><?= $title_form; ?></h1>
                                    </div>
                                </div>
                            </div>
                            <?php
                                if(isset($_SESSION['FailedRegister'])) { ?>
                                    <div class="alert alert-warning alert-success-style3">
                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                        </button>
                                        <span class="adminpro-icon adminpro-warning-danger admin-check-sucess"></span>
                                        <p><strong>Perhatian!</strong> Username dan Email sudah terdaftar.</p>
                                    </div>
                            <?php    } 
                            ?>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Nama Lengkap</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="login-input-area register-mg-rt">
                                                <input type="text" name="first_name" />
                                                <i class="fa fa-user login-user"></i>
                                            </div>
                                            <?php echo form_error('first_name'); ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="login-input-area">
                                                <input type="text" name="last_name" />
                                                <i class="fa fa-user login-user"></i>
                                            </div>
                                            <?php echo form_error('last_name'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Username</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="username1" />
                                        <i class="fa fa-user login-user"></i>
                                    </div>
                                    <?php echo form_error('username1'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Email</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="email" name="email1" />
                                        <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                    </div>
                                    <?php echo form_error('email1'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Password</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" name="password1" />
                                        <i class="fa fa-lock login-user"></i>
                                    </div>
                                    <?php echo form_error('password1'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Confirm Password</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" name="confirm_password" />
                                        <i class="fa fa-lock login-user"></i>
                                    </div>
                                    <?php echo form_error('confirm_password'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="login-keep-me register-check">
                                        <label class="checkbox">
                                            <input type="checkbox" name="term_of_service">
                                            <i></i>I agree all statements in <a>Terms of service</a>
                                        </label>
                                    </div>
                                    <?php echo form_error('term_of_service'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <a href="<?= site_url(); ?>Landing" type="submit" class="login-button login-button-rg">Close</a>
                                        <button type="submit" class="login-button login-button-lg">Register</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4">
                                    <div class="" >
                                        <label style="color:white">Have already an account?<a href="<?= site_url(); ?>Admin/Login">Login here</a></label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!-- Register End-->
    
</div>