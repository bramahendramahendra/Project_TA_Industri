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
                                        <img src="<?= base_url(); ?>assets/dashboard-depart/img/notification/5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="user-profile-content">
                                        <h2><?= $data_user_keuangan->username; ?></h2>
                                        <p class="profile-founder">Status : <strong><?= $status; ?></strong>
                                        </p>
                                        <p class="profile-des">It is a long established fact that a reader will be distracted of by the readable content of a page when looking at its layout.The point of using Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                           
                        </div>
                        <div class="col-lg-3">
                            <div class="analytics-sparkle-line user-profile-sparkline">
                                <div class="analytics-content">
                                    <h5>Visits in last 24h</h5>
                                    <h2 ><?= $data_user_keuangan->last_login; ?></h2>
                                   
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
                    <h2>About <?= $title; ?></h2>
                    <p>It is a long established fact that a reader will be distracted of by the readable content of a page when looking at its layout.The point of using Lorem Ipsum.</p>
                    <p>If you are going to use a passage of Lorem Ipsum.</p>
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>