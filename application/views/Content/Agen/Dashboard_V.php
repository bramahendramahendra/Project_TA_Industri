<!-- start body -->

<div class="user-profile-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="user-profile-wrap shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="user-profile-img">
                                        <img src="<?= base_url(); ?>assets/dashboard_agen/img/notification/5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="user-profile-content">
                                        <h2><?= $data_user_agen->first_name." ".$data_user_agen->last_name; ?></h2>
                                        <p class="profile-founder">Status : <strong><?= $status;?></strong>
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
                                    <h5>Last Login</h5>
                                    <h2 ><?= $data_user_agen->last_login; ?></h2>
                                    
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-profile-about shadow-reset">
                    <h2>About <?= $title; ?></h2>
                    <p>PT. Zetka Niagatama Ltd adalah bisnis yang bergerak di bidang Distributor Semen, PT Semen Padang.</p> 
                    <p>Bisnis ini terletak di Jl. Rimbo Datar No.16-18.Padang-25231. </p>
                    <p>Anda juga dapat menghubungi bisnis ini melalui telepon di nomor </p>
                    <p>Telp.  0751 - 71323-71324 Fax : 0751 - 72578</p>
                    <p>Email : zetka.niagatama@yahoo.co.id</p>
                </div>
            </div>
            
        </div>
    </div>
</div>



    
<!-- end body -->