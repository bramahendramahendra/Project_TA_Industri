<div class=" bg-img1 size1 overlay1" style="background-image: url('<?= base_url(); ?>assets/landing/images/landing/background.jpg');">
    
    <!-- login Start-->
    <div class="login-form-area ">
        <div class="container-fluid ">
            <div class="row mg-t-per mg-b-40mg-b-40">
                <div class="col-lg-4"></div>
                    <form action="<?= site_url('Admin/Login/Sign_In'); ?>" method="post" id="adminpro-form" class="adminpro-form">
                        <div class="col-lg-4">
                            <div class="login-bg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="logo">
                                            <a href="#">
                                                <h1 style="color:white"><b>PT Zetka Niagatama</b></h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="login-title">
                                            <h1><?= $title; ?></h1>
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
                                <?php } 
                                ?>
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
                                            <p>Password</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="password" name="password1" />
                                            <i class="fa fa-lock login-user"></i>
                                        </div>
                                        <?php echo form_error('password1'); ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="forgot-password">
                                                    <a href="#">Forgot password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-keep-me">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="remember" ><i></i>Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-button-pro">
                                            <a href="<?= site_url(); ?>Landing" type="submit" class="login-button login-button-rg">Back</a>
                                            <button type="submit" class="login-button login-button-lg">Log in</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <div class="forgot-password">
                                            <a href="<?= site_url(); ?>Admin/Register">Create an account</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4"></div>
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