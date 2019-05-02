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
                                        <th data-field="no">No</th>
                                        <th data-field="nama_agen" >Nama Agen</th>
                                        <th data-field="npwp" >NPWP</th>
                                        <th data-field="alamat" >Alamat</th>
                                        <th data-field="tanggal_pemesanan" >Tanggal Pemesanan</th>
                                        <th data-field="tipe_barang">Tipe</th>
                                        <th data-field="jumlah_barang" >Jumlah Barang</th>
                                        <th data-field="harga_zak" >Harga (Zak)</th>
                                        <th data-field="harga_total" >Harga Total</th>
                                        <th data-field="nomor_telepon" >Nomor Telepon</th>
                                        <th data-field="status" >Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; 
                                    foreach ($data_pesanan as $value) { ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value['first_name']." ".$value['last_name'] ?></td>
                                        <td><?= $value['npwp'] ?></td>
                                        <td><?= $value['alamat']; ?></td>
                                        <td><?= $value['tanggal_pemesanan']; ?></td>
                                        <td><?= $value['tipe_barang']; ?></td>
                                        <td><?= $value['jumlah_barang']; ?></td>
                                        <td><?= $value['harga_zak']; ?></td>
                                        <td><?= $value['harga_total']; ?></td>
                                        <td><?= $value['nomor_telepon']; ?></td>
                                        <td>
                                            <?php if($value['status'] == NULL) { ?>
                                                <div class="btn-group project-list-ad-bl">
                                                    <button class="btn btn-white btn-xs">Pending</button>
                                                </div>
                                            <?php } else if ($value['status'] == "Reject"){ ?>
                                                <div class="btn-group project-list-ad-rd">
                                                    <button class="btn btn-white btn-xs">Reject</button>
                                                </div>
                                            <?php } else { ?>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Approve</button>
                                                </div>
                                            <?php }  ?>
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