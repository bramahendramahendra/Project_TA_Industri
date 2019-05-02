        <!-- Footer Start-->
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
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
                        <h4 class="modal-title">Input Pemesanan</h4>
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
        <!-- modal JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/modal-active.js"></script>
        <!-- datapicker JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/datapicker/bootstrap-datepicker.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/datapicker/datepicker-active.js"></script>
        <!-- icheck JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/icheck/icheck.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/icheck/icheck-active.js"></script>
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
        
    </body>

</html>