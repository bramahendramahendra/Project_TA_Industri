            </div>
        </div>
        <!-- Footer Start-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
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

        <!-- start modal -->
        <!-- modal Lengkapi Profile -->
        <div id="Lengkapi-Profile" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Lengkapi Data Profile</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form action="<?= site_url() ?>Admin/Dashboard/Update_Profile" method="post">

                                                <!-- Nama Depan -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Nama Depan </label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="form-select-list">
                                                            <?php 
                                                            if($data_user_admin->first_name == null) { ?>
                                                                <input type="text" class="form-control input-sm" placeholder="Nama Depan" name="first_name">
                                                            <?php } else { ?>
                                                                <input type="text" class="form-control input-sm" value="<?= $data_user_admin->first_name ?>" name="first_name">
                                                            <?php } ?>
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
                                                            <?php 
                                                            if($data_user_admin->first_name == null) { ?>
                                                                <input type="text" class="form-control input-sm" placeholder="Nama Belakang" name="last_name">
                                                            <?php } else { ?>
                                                                <input type="text" class="form-control input-sm" value="<?= $data_user_admin->last_name ?>" name="last_name">
                                                            <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Jenis Kelamin
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Jenis Kelamin </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="bt-df-checkbox pull-left">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="i-checks pull-left">
                                                                            <label>
                                                                                <input type="radio" value="option1" name="a"> <i></i> Laki-Laki 
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="i-checks pull-left">
                                                                            <label>
                                                                                <input type="radio" value="option1" name="a"> <i></i> Perempuan 
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div> -->

                                                <!-- Nama Panggilan -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Alamat </label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="form-select-list">
                                                            <?php if($data_user_admin->alamat == null) { ?>
                                                            <textarea type="text" class="form-control input-sm" placeholder="Alamat" name="alamat"></textarea>
                                                        <?php } else { ?>
                                                            <textarea type="text" class="form-control input-sm" name="alamat"><?= $data_user_admin->alamat ?></textarea>
                                                        <?php } ?>
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
                        <<button type="button" data-dismiss="modal" class="btn btn-custon-four btn-danger btn-lg">Close</button>
                        <button type="Submit" class="btn btn-custon-four btn-success btn-lg">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal Search Charts -->
        <div id="Search-Charts" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
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
                                            <form action="<?= site_url() ?>Admin/Charts/Search_Bulanan" method="post">
                                                <!-- Bulan -->
                                                <div class="chosen-select-single mg-b-20">
                                                    <label>Bulan</label>
                                                    <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" name="bulan">
                                                        <option value="">Select</option>
                                                        <option value="01">Januari</option>
                                                        <option value="02">Februari</option>
                                                        <option value="03">Maret</option>
                                                        <option value="04">April</option>
                                                        <option value="05">Mei</option>
                                                        <option value="06">Juni</option>
                                                        <option value="07">Juli</option>
                                                        <option value="08">Agustus</option>
                                                        <option value="09">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>
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
        <div id="Search-Charts-Tahunan" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
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
                                            <form action="<?= site_url() ?>Admin/Charts" method="post">
            
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

        <!-- modal Search Charts 2017-->
        <div id="Search-Charts-2017" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Cari Charts 2017</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form action="<?= site_url() ?>Admin/P2017_Charts/Search_Bulanan" method="post">
                                                <!-- Bulan -->
                                                <div class="chosen-select-single mg-b-20">
                                                    <label>Bulan</label>
                                                    <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" name="bulan">
                                                        <option value="">Select</option>
                                                        <option value="januari">Januari</option>
                                                        <option value="februari">Februari</option>
                                                        <option value="maret">Maret</option>
                                                        <option value="april">April</option>
                                                        <option value="mei">Mei</option>
                                                        <option value="juni">Juni</option>
                                                        <option value="juli">Juli</option>
                                                        <option value="agustus">Agustus</option>
                                                        <option value="september">September</option>
                                                        <option value="oktober">Oktober</option>
                                                        <option value="november">November</option>
                                                        <option value="desember">Desember</option>
                                                    </select>
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
        <!-- end modal -->
    
        <!-- jquery
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/bootstrap.min.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/jquery.meanmenu.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/jquery.scrollUp.min.js"></script>
        <!-- modal JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/modal-active.js"></script>
        <!-- icheck JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/icheck/icheck.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/icheck/icheck-active.js"></script>
        <!-- Charts JS
		    ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/charts/Chart.js"></script>
        <!-- <script src="<?= base_url(); ?>assets/dashboard/js/charts/bar-chart.js"></script> -->
        <!-- counterup JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/counterup/jquery.counterup.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/counterup/waypoints.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/counterup/counterup-active.js"></script>
        <!-- rounded-counter JS
		============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/rounded-counter/jquery.countdown.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/rounded-counter/jquery.knob.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/rounded-counter/jquery.appear.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/rounded-counter/knob-active.js"></script>
        <!-- peity JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/peity/jquery.peity.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/peity/peity-active.js"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/sparkline/sparkline-active.js"></script>
        <!-- flot JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/flot/jquery.flot.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/flot/jquery.flot.spline.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/flot/jquery.flot.resize.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/flot/jquery.flot.pie.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/flot/Chart.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/flot/flot-active.js"></script>
        <!-- map JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/map/raphael.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/map/jquery.mapael.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/map/france_departments.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/map/world_countries.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/map/usa_states.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/map/map-active.js"></script>
        <!-- data table JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/data-table/bootstrap-table.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/data-table/tableExport.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/data-table/data-table-active.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/data-table/bootstrap-table-editable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/data-table/bootstrap-editable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/data-table/bootstrap-table-resizable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/data-table/colResizable-1.5.source.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/data-table/bootstrap-table-export.js"></script>
        <!-- input-mask JS
		    ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/input-mask/jasny-bootstrap.min.js"></script>
        <!-- datapicker JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/datapicker/bootstrap-datepicker.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/datapicker/datepicker-active.js"></script>
        <!-- chosen JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/chosen/chosen.jquery.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/chosen/chosen-active.js"></script>
        <!-- select2 JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/select2/select2.full.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard/js/select2/select2-active.js"></script>
        
        <!-- main JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard/js/main.js"></script>

        <!-- modal JS
            ============================================ -->
        <script>
            var Delete = "<?php echo $_SESSION['Delete-Agen'] ?>";
            if(Delete) {
                $('#Delete-Agen').modal('show');
            }
        </script>

        <script>
            var Delete = "<?php echo $_SESSION['Delete-Keuangan'] ?>";
            if(Delete) {
                $('#Delete-Keuangan').modal('show');
            }
        </script>

        <script>
            var Delete = "<?php echo $_SESSION['Delete-Penjualan'] ?>";
            if(Delete) {
                $('#Delete-Penjualan').modal('show');
            }
        </script>

        <script>
            var ctx = document.getElementById("barchart1");
            var barchart1 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php foreach ($data_charts as $value) { echo '"' . $value['nama_agen'] . '",';}?>],
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