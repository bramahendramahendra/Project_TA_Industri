        <!-- Footer Start-->
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &#169; 2018.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->

        <!-- Modal Start -->
        <!-- Input Lengkapi Profile -->
        <div id="Lengkapi-Profile" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Lengkapi Data Profile</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                    <div class="modal-body">
                        <!-- start form input pesanan -->
                        <form action="<?= site_url() ?>Agen/Dashboard/Update_Profile" method="post">
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
                                            <?php 
                                            if($data_user_agen->npwp == null) { ?>
                                                <input type="text" class="form-control input-sm" placeholder="NPWP" name="npwp">
                                            <?php } else { ?>
                                                <input type="text" class="form-control input-sm" value="<?= $data_user_agen->npwp ?>" name="npwp">
                                            <?php } ?>
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
                                            <?php if($data_user_agen->alamat == null) { ?>
                                                <textarea type="text" class="form-control input-sm" placeholder="Alamat" name="alamat"></textarea>
                                            <?php } else { ?>
                                                <textarea type="text" class="form-control input-sm" name="alamat"><?= $data_user_agen->alamat ?></textarea>
                                            <?php } ?>
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
                                            <?php if($data_user_agen->nomor_telepon == null) { ?>
                                                <input type="text" class="form-control input-sm" placeholder="Nomor Telepon" name="nomor_telepon">
                                            <?php } else { ?>
                                                <input type="text" class="form-control input-sm" value="<?= $data_user_agen->nomor_telepon ?>" name="nomor_telepon">
                                            <?php }  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Pemilik </label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-select-list">
                                            <?php if($data_user_agen->pemilik == null) { ?>
                                                <input type="text" class="form-control input-sm" placeholder="Pemilik" name="pemilik">
                                            <?php } else { ?>
                                                <input type="text" class="form-control input-sm" value="<?= $data_user_agen->pemilik ?>" name="pemilik">
                                            <?php }  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" data-dismiss="modal" class="btn btn-custon-four btn-danger btn-lg">Close</button>
                        <button type="Submit" class="btn btn-custon-four btn-success btn-lg">Simpan</button>
                        </form>
                        <!-- end form input pesanan -->
                    </div>
                </div>
            </div>
        </div>

        <!-- modal Search Charts Tipe -->
        <div id="Search-Charts-Tipe" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Cari Reports Tipe</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form action="<?= site_url() ?>Agen/Charts/Search_Tipe" method="post">
                                                <!-- Tahun -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label>Tahun (ex: 2018)</label>
                                                            <div class="form-select-list">
                                                                <input type="text" class="form-control input-sm" placeholder="Tahun" name="tahun">
                                                            
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

        <!-- modal Search Charts -->
        <div id="Search-Charts" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Cari Charts</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form action="<?= site_url() ?>Agen/Charts/Search_Bulanan" method="post">
                                                <!-- Tahun -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label>Tahun (ex: 2018)</label>
                                                            <div class="form-select-list">
                                                                <input type="text" class="form-control input-sm" placeholder="Tahun" name="tahun">
                                                            
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

        <!-- modal Search Charts Tahunan -->
        <div id="Search-Charts-Tahunan" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Cari Charts Tahunan</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form action="<?= site_url() ?>Agen/Charts" method="post">
                                                <!-- Label -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label>Tahun (ex: 2018)</label>
                                                            <br>
                                                            <label>Ex: Start = 2018 ; End = 2020</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tahun -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            
                                                            <label>Start</label>
                                                            <div class="form-select-list">
                                                                <input type="text" class="form-control input-sm" placeholder="Tahun" name="tahun">
                                                            
                                                            </div>
                                                            <label>End</label>
                                                            <div class="form-select-list">
                                                                <input type="text" class="form-control input-sm" placeholder="Tahun" name="tahun">
                                                            
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

        

        <!-- Modal End -->

        
        <!-- jquery
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/bootstrap.min.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/jquery.meanmenu.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/jquery.scrollUp.min.js"></script>
        <!-- modal JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/modal-active.js"></script>
        <!-- icheck JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/icheck/icheck.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/icheck/icheck-active.js"></script>
        <!-- Charts JS
		    ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/charts/Chart.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/charts/line-chart.js"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/counterup/jquery.counterup.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/counterup/waypoints.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/counterup/counterup-active.js"></script>
        <!-- peity JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/peity/jquery.peity.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/peity/peity-active.js"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/sparkline/sparkline-active.js"></script>
        <!-- flot JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/flot/jquery.flot.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/flot/jquery.flot.spline.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/flot/jquery.flot.resize.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/flot/jquery.flot.pie.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/flot/Chart.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/flot/flot-active.js"></script>
        <!-- map JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/map/raphael.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/map/jquery.mapael.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/map/france_departments.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/map/world_countries.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/map/usa_states.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/map/map-active.js"></script>
        <!-- data table JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/data-table/bootstrap-table.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/data-table/tableExport.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/data-table/data-table-active.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/data-table/bootstrap-table-editable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/data-table/bootstrap-editable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/data-table/bootstrap-table-resizable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/data-table/colResizable-1.5.source.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/data-table/bootstrap-table-export.js"></script>
        <!-- input-mask JS
		    ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/input-mask/jasny-bootstrap.min.js"></script>
        <!-- datapicker JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/datapicker/bootstrap-datepicker.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/datapicker/datepicker-active.js"></script>
        <!-- chosen JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/chosen/chosen.jquery.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/chosen/chosen-active.js"></script>
        <!-- select2 JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/select2/select2.full.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/select2/select2-active.js"></script>
        
        <!-- main JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/main.js"></script>
        <!-- modal JS
            ============================================ -->
        <script>
            var Delete = "<?php echo $_SESSION['Delete'] ?>";
            if(Delete) {
                $('#Delete-Pesanan').modal('show');
            }
        </script>

        <script>
            var ctx = document.getElementById("barchart1");
            var barchart1 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php foreach ($data_charts as $value) { echo '"' . $value['nama'] . '",';}?>],
                    datasets: [{
                        label: 'Jumlah Barang',
                        data: [<?php foreach ($data_charts as $value) { echo '"' . $value['jumlah'] . '",';}?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            ticks: {
                                autoSkip: false,
                                beginAtZero: true,
                                maxRotation: 0
                            },
                        }],
                        yAxes: [{
                            ticks: {
                                autoSkip: false,
                                beginAtZero: true,
                                maxRotation: 0
                            },
                        }]
                    }
                }
            });
        </script>
        
    </body>

</html>