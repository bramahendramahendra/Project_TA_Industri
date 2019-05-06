<!-- start body -->
<!-- Data table area Start-->
<div class="admin-dashone-data-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1><?= $nama_tabel?></h1>
                            <div class="sparkline8-outline-icon">
                                <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <button type="button" data-toggle="modal" data-target="#Create-Penjualan" class="btn btn-custon-rounded-three btn-success">Input User Bagian Penjualan</button>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">No</th>
                                        <th data-field="name" >Username</th>
                                        <th data-field="email" >Email</th>
                                        <th data-field="phone" >Create Date</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; 
                                foreach ($data_penjualan as $value) { ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value['username']; ?></td>
                                        <td><?= $value['email']; ?></td>
                                        <td><?= $value['create_date']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Detail-Penjualan<?php echo  $value['id'] ?>">
                                                <span class="adminpro-icon adminpro-home-admin"></span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>       
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data table area End-->
<!-- end body -->


<!-- start modal -->
<!-- Modal Input User Bagian Keuangan -->
<div id="Create-Penjualan" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Input User Bagian Penjualan</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="all-form-element-inner">
                                    <form action="<?= site_url() ?>Admin/Penjualan/Create_Penjualan" method="post">

                                        <!-- Username -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Username </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" class="form-control input-sm" name="username" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Email </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="email" class="form-control input-sm" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Password </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" readonly class="form-control input-sm" name="password" value="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-custon-four btn-danger btn-lg">Close</button>
                <button type="Submit" class="btn btn-custon-four btn-success btn-lg">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal detail User  Bagian Keuangan. -->
<?php foreach ($data_penjualan as $value) {?>
<div id="Detail-Penjualan<?php echo  $value['id'] ?>" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Detail Profile Agen</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="all-form-element-inner">

                                        <!-- Username -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Username </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" readonly class="form-control input-sm" value="<?= $value['username'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Email </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="email" readonly class="form-control input-sm" value="<?= $value['email'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Create Dtae -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Create Date </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" readonly class="form-control input-sm" value="<?= $value['create_date'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#Edit-Penjualan<?php echo  $value['id'] ?>">Edit</a>
                <a href="<?= site_url() ?>Admin/Penjualan/Delete_Penjualan/<?= $value['id']; ?>">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<!-- Modal Edit User Bagian Keuangan. -->
<?php foreach ($data_penjualan as $value) {?>
<div id="Edit-Penjualan<?php echo  $value['id'] ?>" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Input User Bagian Keuangan</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="all-form-element-inner">
                                    <form action="<?= site_url() ?>Admin/Penjualan/Update_Penjualan/<?php echo  $value['id'] ?>" method="post">

                                        <!-- Username -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Username </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" class="form-control input-sm" name="username" value="<?= $value['username'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Email </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="email" class="form-control input-sm" name="email" value="<?= $value['email'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-custon-four btn-danger btn-lg">Close</button>
                <button type="Submit" class="btn btn-custon-four btn-success btn-lg">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- Modal delete User  Bagian Keuangan. -->
<div id="Delete-Penjualan" class="modal modal-adminpro-general FullColor-popup-DangerModal PrimaryModal-bgcolor fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                <h2>Delete</h2>
                <p>Data User Bagian Keuangan Berhasil Di Hapus</p>
            </div>
            <div class="modal-footer footer-modal-admin">
                <a data-dismiss="modal" href="#">Done</a>
            </div>
        </div>
    </div>
</div>

<!-- end modal -->