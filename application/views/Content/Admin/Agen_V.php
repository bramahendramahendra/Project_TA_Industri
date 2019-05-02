<!-- body start -->

<!-- Data table area Start-->
<div class="admin-dashone-data-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Projects Data Table</h1>
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
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">No</th>
                                        <th data-field="name" >Nama Agen</th>
                                        <th data-field="email" >NPWP</th>
                                        <th data-field="phone" >Email</th>
                                        <th data-field="company" >Pemilik</th>
                                        <th data-field="task" >Alamat</th>
                                        <th data-field="date" >No Telpon</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; 
                                foreach ($data_agen as $value) { ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value['first_name']." ".$value['last_name']; ?></td>
                                        <td><?= $value['npwp']; ?></td>
                                        <td><?= $value['email']; ?></td>
                                        <td><?= $value['pemilik']; ?></td>
                                        <td><?= $value['alamat']; ?></td>
                                        <td><?= $value['nomor_telepon']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Detail-Agen<?php echo  $value['id'] ?>">
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

<!-- body end -->     

<!-- start modal -->

<!-- Detail Agen Modal -->
<?php foreach ($data_agen as $value) {?>
<div id="Detail-Agen<?php echo  $value['id'] ?>" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
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
                                    <form action="#" method="post">

                                        <!-- Nama Agen -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Nama Agen </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" readonly class="form-control input-sm" value="<?= $value['first_name']." ".$value['last_name'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- NPWP -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">NPWP </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" readonly class="form-control input-sm" value="<?= $value['npwp'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Nama Panggilan -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Alamat </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <textarea rows="10" readonly type="text" class="form-control input-sm" value="<?= $value['alamat'] ?>"></Textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <!-- Email -->
                                         <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Pemilik </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" readonly class="form-control input-sm" value="<?= $value['pemilik'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Nomor Telepon </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" readonly class="form-control input-sm" value="<?= $value['nomor_telepon'] ?>">
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
                <a href="#" data-toggle="modal" data-target="#Edit-Agen<?= $value['id']; ?>">Edit</a>
                <a href="<?= site_url() ?>Admin/Agen/Delete_Agen/<?= $value['id_agen']; ?>">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- Edit Agen Modal -->
<?php foreach ($data_agen as $value) {?>
<div id="Edit-Agen<?php echo  $value['id'] ?>" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
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
                                    <form action="<?= site_url() ?>Admin/Agen/Update_Agen/<?= $value['id_agen']; ?>" method="post">

                                        <!-- Nama Depan -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Nama Depan </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" class="form-control input-sm" name="first_name" value="<?= $value['first_name'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Nama Belakang -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Nama Belakang </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" class="form-control input-sm" name="last_name" value="<?= $value['last_name'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- NPWP -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">NPWP </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" class="form-control input-sm" name="npwp" value="<?= $value['npwp'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Alamat -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Alamat </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <textarea rows="10" type="text" class="form-control input-sm" name="alamat" value="<?= $value['alamat'] ?>"></Textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <!-- Pemilik -->
                                         <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Pemilik </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" class="form-control input-sm" name="pemilik" value="<?= $value['pemilik'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Nomor Telepon -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Nomor Telepon </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <input type="text" class="form-control input-sm" name="nomor_telepon" value="<?= $value['nomor_telepon'] ?>">
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
                <button type="submit" class="btn btn-custon-four btn-danger btn-lg">Close</button>
                <button type="Submit" class="btn btn-custon-four btn-success btn-lg">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- Delete Agen Modal -->
<div id="Delete-Agen" class="modal modal-adminpro-general FullColor-popup-DangerModal PrimaryModal-bgcolor fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                <h2>Delete</h2>
                <p>Data User Agen Berhasil Di Hapus</p>
            </div>
            <div class="modal-footer footer-modal-admin">
                <a data-dismiss="modal" href="#">Done</a>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->