<!-- body start -->
<!-- profile start -->
<div class="user-profile-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="user-profile-wrap shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="user-profile-img">
                                        <img src="<?= base_url(); ?>assets/dashboard/img/notification/5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="user-profile-content">
                                        <h2><?= $data_user_admin->first_name.' '.$data_user_admin->last_name; ?></h2>
                                        <p class="profile-founder">Status :  <strong><?= $status;?></strong>
                                        </p>
                                        <p class="profile-des">It is a long established fact that a reader will be distracted of by the readable content of a page when looking at its layout.The point of using Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!-- <div class="user-profile-social-list">
                                <table class="table small m-b-xs">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>542</strong> Projects
                                            </td>
                                            <td>
                                                <strong>222</strong> Followers
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>612</strong> Comments
                                            </td>
                                            <td>
                                                <strong>542</strong> Articles
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>254</strong> Tags
                                            </td>
                                            <td>
                                                <strong>552</strong> Friends
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->
                        </div>
                        <div class="col-lg-3">
                            <div class="analytics-sparkle-line user-profile-sparkline">
                                <div class="analytics-content">
                                    <h5>Last Login :</h5>
                                    <h2><?= $data_user_admin->last_login; ?></h2>
                                    <!-- <div id="sparkline22"></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="user-prfile-activity-area mg-b-40 mg-t-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-profile-about shadow-reset">
                    <h2>About <?= $title;?></h2>
                    <p>It is a long established fact that a reader will be distracted of by the readable content of a page when looking at its layout.The point of using Lorem Ipsum.</p>
                    <p>If you are going to use a passage of Lorem Ipsum.</p>
                    
                </div>

            </div>
            
            <!-- <div class="col-lg-4">
                <div class="sparkline7-list profile-online-mg-t-30 shadow-reset">
                    <div class="sparkline7-hd">
                        <div class="main-spark7-hd">
                            <h1>Contact List</h1>
                            <div class="sparkline7-outline-icon">
                                <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline7-graph">
                        <div class="user-profile-contact user-profile-scrollbar">
                            <ul class="profile-contact-menu">
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/5.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/1.jpg" alt="" /> <span>Fire Foxy</span> <span class="contact-profile-online-f">31m</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/2.jpg" alt="" /> <span>Jhon Royita</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/3.jpg" alt="" /> <span>Selim Reza</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/4.jpg" alt="" /> <span>Navil khan</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/6.jpg" alt="" /> <span>Suhag Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/1.jpg" alt="" /> <span>Abir Shek</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/3.jpg" alt="" /> <span>Omi Poyel</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/4.jpg" alt="" /> <span>Emrul Khan</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/6.jpg" alt="" /> <span>Ismail Hossain</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/1.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/3.jpg" alt="" /> <span>Arif Khan</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/4.jpg" alt="" /> <span>Hridoy Ali</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/6.jpg" alt="" /> <span>Akramul Hasan</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/1.jpg" alt="" /> <span>Oishy Ray</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/5.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/1.jpg" alt="" /> <span>Tuktuki</span> <span class="contact-profile-online-f">31m</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/2.jpg" alt="" /> <span>Suvo Fram</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/3.jpg" alt="" /> <span>Arif Khan</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/4.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/6.jpg" alt="" /> <span>Emrul Khan</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/1.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>assets/dashboard/img/notification/3.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/4.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/6.jpg" alt="" /> <span>Emrul Khan</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/1.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/3.jpg" alt="" /> <span>Suhag Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/4.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/6.jpg" alt="" /> <span>Fire Foxy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/1.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/5.jpg" alt="" /> <span>Fire Foxy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/1.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f">31m</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/2.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/3.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/4.jpg" alt="" /> <span>Fire Foxy</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/6.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/1.jpg" alt="" /> <span>Emrul Khan</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/3.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/4.jpg" alt="" /> <span>Fire Foxy</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/6.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/1.jpg" alt="" /> <span>Emrul Khan</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/3.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/4.jpg" alt="" /> <span>Hridoy Ali</span> <span class="contact-profile-online-f">4h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/6.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/notification/1.jpg" alt="" /> <span>Ismail Hossain</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- profile end -->
<!-- body end -->       