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
                                <button type="button" data-toggle="modal" data-target="#Create-Pesanan17" class="btn btn-custon-rounded-three btn-success">Input Pemesanan 2017</button>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                       
                                        <th data-field="no">No</th>
                                        <th data-field="nama" >Nama Agen</th>
                                        <th data-field="januari" >Januari</th>
                                        <th data-field="februari" >Februari</th>
                                        <th data-field="maret" >Maret</th>
                                        <th data-field="april" >April</th>
                                        <th data-field="mei" >Mei</th>
                                        <th data-field="juni" >Juni</th>
                                        <th data-field="juli" >Juli</th>
                                        <th data-field="agustus" >Agustus</th>
                                        <th data-field="september" >September</th>
                                        <th data-field="oktober" >Oktober</th>
                                        <th data-field="november" >November</th>
                                        <th data-field="desember" >Desember</th>
                                        <th data-field="total" >Total</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $no=0; 
                                    foreach ($data_pesanan as $value) { ?>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value['nama_agen'] ?></td>
                                        <td><?= $value['januari'] ?></td>
                                        <td><?= $value['februari']; ?></td>
                                        <td><?= $value['maret']; ?></td>
                                        <td><?= $value['april']; ?></td>
                                        <td><?= $value['mei']; ?></td>
                                        <td><?= $value['juni']; ?></td>
                                        <td><?= $value['juli']; ?></td>
                                        <td><?= $value['agustus']; ?></td>
                                        <td><?= $value['september']; ?></td>
                                        <td><?= $value['oktober']; ?></td>
                                        <td><?= $value['november']; ?></td>
                                        <td><?= $value['desember']; ?></td>
                                        <td><?= $value['total']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Detail-Pesanan<?php echo  $value['id'] ?>">
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
<!-- Create Pesanan -->
<div id="Create-Pesanan17" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Create Pemesanan</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <!-- start form input pesanan -->
                <form action="<?= site_url() ?>Admin/P2017/Create_Pesanan" method="post">
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Nama Agen </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Nama Agen" name="nama_agen" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Januari </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Januari" name="januari" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Februari </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Februari" name="februari" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Maret </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Maret" name="maret" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">April </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="April" name="april" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Mei </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Mei" name="mei" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Juni </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Juni" name="juni" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Juli </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Juli" name="juli" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Agustus </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Agustus" name="agustus" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">September </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="September" name="september" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Oktober </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Oktober" name="oktober" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">November </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="November" name="november" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Desember </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Desember" name="desember" required>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-custon-four btn-danger btn-lg">Close</button>
                <button type="submit" name="simpan" class="btn btn-custon-four btn-success btn-lg">Simpan</button>
                </form>
                <!-- end form input pesanan -->
            </div>
        </div>
    </div>
</div>


<!-- Detail Pesanan -->
<?php foreach ($data_pesanan as $value) {?>
<div id="Detail-Pesanan<?= $value['id']; ?>" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Detail Pemesanan</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <!-- start form input pesanan -->
                
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Nama Agen </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['nama_agen'] ?>" name="nama_agen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Januari </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['januari'] ?>" name="januari">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Februari </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['februari'] ?>" name="februari">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Maret </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['maret'] ?>" name="maret">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">April </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['april'] ?>" name="april">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Mei </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['mei'] ?>" name="mei">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Juni </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['juni'] ?>" name="juni">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Juli </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['juli'] ?>" name="juli">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Agustus </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['agustus'] ?>" name="agustus">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">September </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['september'] ?>" name="september">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Oktober </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['oktober'] ?>" name="oktober">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">November </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['november'] ?>" name="november">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Desember </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['desember'] ?>" name="desember">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Total </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['total'] ?>" name="total">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <a href="#" data-toggle="modal" data-target="#Edit-Pesanan<?= $value['id']; ?>">Edit</a>
                <a href="<?= site_url() ?>Admin/P2017/Delete_Pesanan/<?= $value['id']; ?>"  >Delete</a>
                <!-- end form input pesanan -->
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- Modal End -->

<!-- Edit Pesanan -->
<?php foreach ($data_pesanan as $value) {?>
<div id="Edit-Pesanan<?= $value['id']; ?>" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Edit Pemesanan</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <!-- start form input pesanan -->
                <form action="<?= site_url() ?>Admin/P2017/Update_Pesanan/<?= $value['id']; ?>" method="post">
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Nama Agen </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['nama_agen'] ?>" name="nama_agen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Januari </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['januari'] ?>" name="januari">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Februari </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['februari'] ?>" name="februari">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Maret </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['maret'] ?>" name="maret">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">April </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['april'] ?>" name="april">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Mei </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['mei'] ?>" name="mei">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Juni </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['juni'] ?>" name="juni">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Juli </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['juli'] ?>" name="juli">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Agustus </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['agustus'] ?>" name="agustus">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">September </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['september'] ?>" name="september">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Oktober </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['oktober'] ?>" name="oktober">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">November </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['november'] ?>" name="november">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Desember </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['desember'] ?>" name="desember">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="close" class="btn btn-custon-four btn-danger btn-lg">Close</button>
                <button type="submit" name="simpan" class="btn btn-custon-four btn-success btn-lg">Simpan</button>
                </form>
                <!-- end form input pesanan -->
            </div>
        </div>
    </div>
</div>
<?php } ?>



<!-- Delete Pesanan -->
<div id="Delete-Pesanan" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                <h2>DELETE!</h2>
                <p>Anda Berhasil Menghapus Pesanan</p>
            </div>
            <div class="modal-footer footer-modal-admin">
                <a data-dismiss="modal" href="#">Done</a>
                
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

