<!-- stockprice, feed area end-->
<div class="admin-dashone-data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Project List</h1>
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
                                        <th data-field="no">no</th>
                                        <th data-field="status">Status</th>
                                        <th data-field="name">Nama Agen</th>
                                        <th data-field="company" >Tanggal</th>
                                        <th data-field="complete">Tipe</th>
                                        <th data-field="task" >Jumlah</th>
                                        <th data-field="date">Harga</th>
                                        <th data-field="support">Total</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>      
                                    <?php $no=0; 
                                    foreach ($data_pesanan as $value) { ?>
                                        <td><?= ++$no; ?></td>
                                        <td>
                                            <?php if($value['status'] == NULL) { ?>
                                                <div class="btn-group project-list-ad-bl">
                                                    <button class="btn btn-white btn-xs">Pending</button>
                                                </div>
                                            <?php } else if ($value['status'] == "reject"){ ?>
                                                <div class="btn-group project-list-ad-rd">
                                                    <button class="btn btn-white btn-xs">Reject</button>
                                                </div>
                                            <?php } else { ?>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Approve</button>
                                                </div>
                                            <?php }  ?>
                                        </td>
                                        <td><?= $value['first_name']." ".$value['last_name'] ?></td>
                                        <td><?= $value['tanggal_pemesanan']; ?></td>
                                        <td><?= $value['tipe_barang']; ?></td>
                                        <td><?= $value['jumlah_barang']; ?></td>
                                        <td><?= $value['harga_zak']; ?></td>
                                        <td><?= $value['harga_total']; ?></td>
                                        <td>
                                            <div class="btn-group project-list-action">
                                                <form action="<?= site_url()?>Penjualan/Status_Pesanan/Update_Status_Pesanan/<?= $value['id']; ?>" method="post">
                                                    <button name="approve" type="submit" class="btn btn-white btn-action btn-xs"><i class="fa fa-check"></i> Approve</button>
                                                    <button name="reject" type="submit" class="btn btn-white btn-xs"><i class="fa fa-exclamation"></i> Reject</button>
                                                </form>
                                            </div>
                                    
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