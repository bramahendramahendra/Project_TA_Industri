<!-- Start Body -->
<div class=" bg-img1 size1 overlay1" style="background-image: url('<?= base_url(); ?>assets/landing/images/landing/background.jpg');">
   
    
    <!-- login Start-->
    <div class="login-form-area ">
        <div class="container-fluid ">
            <div class="row mg-t-per ">
                <div class="col-lg-4"></div>

                <form id="adminpro-form" class="adminpro-form" method="post" action="<?= site_url() ?>Agen/Login/Sign_In">
                    <div class="col-lg-4">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <a href="#">
                                            <h1 style="color:#03a9f4; font-size:35px;"><b><?= $title; ?></b></h1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if(isset($_SESSION['FailedLogin'])) { ?>
                                <div class="alert alert-warning alert-success-style3">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                    </button>
                                    <span class="adminpro-icon adminpro-warning-danger admin-check-sucess"></span>
                                    <p><strong>Perhatian!</strong> Username dan Password tidak terdaftar.</p>
                                </div>
                            <?php } ?>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="basic-login-inner">
                                        <h3>Sign In</h3>
                                        <p>Agen yang sudah terdaftar, dapat login dibawah ini</p>
                                        <form action="<?= site_url() ?>Agen/Login/Sign_In" method="post">
                                        
                                            <div class="form-group-inner">
                                                <label>Username</label>
                                                <input type="username" class="form-control" placeholder="Enter Username" name="username"/>
                                                <?php echo form_error('username'); ?>
                                            </div>
                                            <div class="form-group-inner">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Enter password" name="password" />
                                                <?php echo form_error('password'); ?>
                                            </div>
                                            <div class="login-btn-inner">
                                                <div class="inline-remember-me">
                                                    
                                                    <label>
                                                        <input type="checkbox" class="i-checks"> Remember me 
                                                    </label>
                                                    
                                                </div>
                                            </div>
                                            <div class="login-btn-inner">
                                                <div class="inline-remember-me">
                                                    <label>
                                                        <a href="<?= site_url() ?>Landing" class="btn btn-sm btn-primary pull-right login-submit-cs">Back</a>
                                                    </label>
                                                    <label>
                                                        <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Log In</button>
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="basic-login-inner basic-ele-mg-t-20">
                                        <h3>Belum daftar?</h3>
                                        <p>Silahkan mendaftar agen terlebih dahulu:</p>
                                        <div class="create-account-sign">
                                            <a href="#" data-toggle="modal" data-target="#SignUp">
                                                <i class="fa fa-sign-in big-icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
    <!-- login End-->

</div>
<!-- End Body -->

<!-- start modal -->
<!-- Register modal -->
<div id="SignUp" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <div class="modal-login-form-inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="logo">
                                <a href="#">
                                    <h1 style="color:#03a9f4; font-size:35px;"><b><?= $title; ?></b></h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="basic-login-inner modal-basic-inner">
                                <h3>Sign Up</h3>
                                <p>Silahkan isi registrasi anda dalam membuat akun.</p>
                                <form action="<?= site_url() ?>Agen/Register" method="post">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="login2">Full Name</label>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" />
                                                <?php echo form_error('first_name'); ?>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" />
                                                <?php echo form_error('last_name'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="login2">Username</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" placeholder="Enter Username" name="username" />
                                                <?php echo form_error('username'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="login2">Email</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" placeholder="Enter Email" name="email"/>
                                                <?php echo form_error('email'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="login2">Password</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" placeholder="Enter Password" name="password" />
                                                <?php echo form_error('password'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="login2"> Confirm Password</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" placeholder="Enter Confirm Password" name="confirm_password" />
                                                <?php echo form_error('confirm_password'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="login-btn-inner">
                                        <div class="row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-8">
                                                <label>
                                                    <input type="checkbox" class="i-checks" name="term_of_service"> I agree all statements in <a href="">Terms of service</a>
                                                    <?php echo form_error('term_of_service'); ?>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-2">
                                                <div class="login-horizental">
                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="button" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="login-horizental">
                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Sign Up</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success SignUp -->
<div id="SuccessSignUp" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <i class="fa fa-check modal-check-pro"></i>
                <h2>Success!</h2>
                <p>Anda berhasil mendaftar sebagai agen PT ZETKA NIAGATAMA</p>
            </div>
            <div class="modal-footer footer-modal-admin">
                <a href="#" data-dismiss="modal">Done</a>
            </div>
        </div>
    </div>
</div>

<!-- Failed SignUp -->
<div id="FailedSignUp" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                <h2>Danger!</h2>
                <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
            </div>
            <div class="modal-footer footer-modal-admin">
                <a data-dismiss="modal" href="#">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
    
    