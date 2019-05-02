<!-- start body -->

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
                                        <th data-field="phone" >Alamat</th>
                                        <th data-field="company" >Tanggal Pemesanan</th>
                                        <th data-field="task" >Tipe Barang</th>
                                        <th data-field="date" >Jumlah Barang</th>
                                        <th data-field="price" >Harga (Zak)</th>
                                        <th data-field="price" >Harga Total</th>
                                        <th data-field="price" >Nomor Telepon</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $no=0; 
                                    foreach ($data_pesanan as $value) { ?>
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

<!-- end body -->

