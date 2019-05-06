<!-- start body -->

<!-- Data table area Start-->
<div class="admin-dashone-data-table-area mg-b-40">
    <div class="container">
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
                            
                                <button type="button" class="btn btn-custon-rounded-three btn-success" data-toggle="modal" data-target="#Create-Pesanan">Input Pesanan</button>
                               
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no">No</th>
                                        <th data-field="nama_agen" >Nama Agen</th>
                                        <th data-field="npwp" >NPWP</th>
                                        <th data-field="alamat" >Alamat</th>
                                        <th data-field="tanggal_pemesanan" >Tanggal Pemesanan</th>
                                        <th data-field="tipe_barang" >Tipe Barang</th>
                                        <th data-field="jumlah_barang" >Jumlah Barang</th>
                                        <th data-field="harga_zak" >Harga (Zak)</th>
                                        <th data-field="harga_total" >Harga Total</th>
                                        <th data-field="nomor_telepon" >Nomor Telepon</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; 
                                foreach ($data_pesanan as $value) { ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $data_user_agen->first_name." ".$data_user_agen->last_name ?></td>
                                        <td><?= $data_user_agen->npwp ?></td>
                                        <td><?= $value['alamat']; ?></td>
                                        <td><?= $value['tanggal_pemesanan']; ?></td>
                                        <td><?= $value['tipe_barang']; ?></td>
                                        <td><?= $value['jumlah_barang']; ?></td>
                                        <td><?= $value['harga_zak']; ?></td>
                                        <td><?= $value['harga_total']; ?></td>
                                        <td><?= $value['nomor_telepon']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Detail-Pesanan<?php echo  $value['id'] ?>">
                                                <span class="adminpro-icon adminpro-home-admin"></span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <div class="print">                
                                <a href="<?= site_url() ?>Laporanpdf/DataPesananUser" class="btn btn-custon-rounded-three btn-success">Print Data Pesanan (pdf)</a>
                            </div>
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
<div id="Create-Pesanan" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Input Pemesanan</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <!-- start form input pesanan -->
                <form action="<?= site_url() ?>Agen/Pesanan/Create_Pesanan" method="post">
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Nama Agen </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" disabled class="form-control input-sm" value="<?= $data_user_agen->first_name." ".$data_user_agen->last_name ?>" name="nama_agen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">NPWP </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" disabled class="form-control input-sm" value="<?= $data_user_agen->npwp ?>" name="npwp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Alamat </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <textarea type="text" class="form-control input-sm" placeholder="Alamat" name="alamat"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-inner" id="data_1">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Tanggal Pemesanan </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" name="tanggal_pemesanan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Tipe Barang </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Tipe Barang" name="tipe_barang">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Jumlah Barang </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Jumlah Barang" name="jumlah_barang">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Harga (Zak) </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Harga (Zak)" name="harga_zak">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Nomor Telepon </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" placeholder="Nomor Telepon" name="nomor_telepon">
                                </div>
                            </div>
                        </div>
                    </div>       
            </div>
            <div class="modal-footer">
                
                <button type="button" data-dismiss="modal" class="btn btn-custon-four btn-danger btn-lg">Close</button>
                <button type="submit" class="btn btn-custon-four btn-success btn-lg">Simpan</button>
                </form>
                <!-- end form input pesanan -->
            </div>
        </div>
    </div>
</div>

<!-- Detail Pesanan -->
<?php foreach ($data_pesanan as $value) {?>
<div id="Detail-Pesanan<?= $value['id']; ?>" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
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
                                    <input type="text" readonly class="form-control input-sm" value="<?= $data_user_agen->first_name." ".$data_user_agen->last_name ?>" name="nama_agen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">NPWP </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $data_user_agen->npwp ?>" name="npwp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Alamat </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <textarea rows="10" readonly type="text" readonly class="form-control input-sm" name="alamat"><?= $value['alamat'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-inner" id="data_1">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Tanggal Pemesanan </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" readonly class="form-control" name="tanggal_pemesanan" value="<?= $value['tanggal_pemesanan'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Tipe Barang </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['tipe_barang'] ?>" name="tipe_barang">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Jumlah Barang </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['jumlah_barang'] ?>" name="jumlah_barang">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Harga (Zak) </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['harga_zak'] ?>" name="harga_zak">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Harga Total </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['harga_total'] ?>" name="harga_total">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Nomor Telepon </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $value['nomor_telepon'] ?>" name="nomor_telepon">
                                </div>
                            </div>
                        </div>
                    </div>       
            </div>
            <div class="modal-footer">
                <a href="#" data-toggle="modal" data-target="#Edit-Pesanan<?= $value['id']; ?>">Edit</a>
                <a href="<?= site_url() ?>Agen/Pesanan/Delete_Pesanan/<?= $value['id']; ?>"  >Delete</a>
                <!-- end form input pesanan -->
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- Modal End -->

<!-- Edit Pesanan -->
<?php foreach ($data_pesanan as $value) {?>
<div id="Edit-Pesanan<?= $value['id']; ?>" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
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
                <form action="<?= site_url() ?>Agen/Pesanan/Update_Pesanan/<?= $value['id']; ?>" method="post">
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Nama Agen </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $data_user_agen->first_name." ".$data_user_agen->last_name ?>" name="nama_agen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">NPWP </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" readonly class="form-control input-sm" value="<?= $data_user_agen->npwp ?>" name="npwp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Alamat </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <textarea rows="10" type="text" class="form-control input-sm" name="alamat"><?= $value['alamat'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-inner" id="data_1">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Tanggal Pemesanan </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" name="tanggal_pemesanan" value="<?= $value['tanggal_pemesanan'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Tipe Barang </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['tipe_barang'] ?>" name="tipe_barang">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Jumlah Barang </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['jumlah_barang'] ?>" name="jumlah_barang">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Harga (Zak) </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['harga_zak'] ?>" name="harga_zak">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Harga Total </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="" name="harga_total">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Nomor Telepon </label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-select-list">
                                    <input type="text" class="form-control input-sm" value="<?= $value['nomor_telepon'] ?>" name="nomor_telepon">
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