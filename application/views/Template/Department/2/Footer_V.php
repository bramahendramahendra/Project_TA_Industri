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
        
        <!-- Ganti Password Keuangan -->
        <div id="Ganti-Password-<?= $status?>" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Ganti Password</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                    <div class="modal-body">
                        <!-- start form input pesanan -->
                        <form action="<?= site_url() ?><?= $status?>/Dashboard/Update_Password/<?= $name_page?>" method="post">
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Password Lama </label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-select-list">
                                            <input type="password" class="form-control input-sm" placeholder="Password Lama" name="password_lama">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Password Baru </label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-select-list">
                                            <input type="password" class="form-control input-sm" placeholder="Password Baru" name="password_baru">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Confirm Password Baru </label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-select-list">
                                            <input type="password" class="form-control input-sm" placeholder="Confirm Password Baru" name="confirm_password_baru">
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

        <!-- Modal password lama tidak sesuai -->
        <div id="Password-Lama" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                        <h2>Perhatian!</h2>
                        <p>Anda salah memasukkan Password Lama.</p>
                    </div>
                    <div class="modal-footer footer-modal-admin">
                        <a data-dismiss="modal" href="#">Close</a>
                    </div>
                </div>
            </div>
        </div>

         <!-- Modal password confirm tidak sesuai -->
         <div id="Password-Confirm" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                        <h2>Perhatian!</h2>
                        <p>Password Baru dan Confirm Password Baru tidak sesuai.</p>
                    </div>
                    <div class="modal-footer footer-modal-admin">
                        <a data-dismiss="modal" href="#">Close</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Success Password -->
        <div id="Password-Success" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <i class="fa fa-check modal-check-pro"></i>
                        <h2>Sukses!</h2>
                        <p>Anda Berhasil Mengganti Password</p>
                    </div>
                    <div class="modal-footer footer-modal-admin">
                        <a data-dismiss="modal" href="#">Done</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
        
        <!-- jquery
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/bootstrap.min.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/jquery.meanmenu.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/jquery.scrollUp.min.js"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/counterup/jquery.counterup.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/counterup/waypoints.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/counterup/counterup-active.js"></script>
        <!-- peity JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/peity/jquery.peity.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/peity/peity-active.js"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/sparkline/sparkline-active.js"></script>
        <!-- flot JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/flot/Chart.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/flot/flot-active.js"></script>
        <!-- map JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/map/raphael.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/map/jquery.mapael.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/map/france_departments.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/map/world_countries.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/map/usa_states.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/map/map-active.js"></script>
        <!-- data table JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/data-table/bootstrap-table.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/data-table/tableExport.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/data-table/data-table-active.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/data-table/bootstrap-table-editable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/data-table/bootstrap-editable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/data-table/bootstrap-table-resizable.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/data-table/colResizable-1.5.source.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/data-table/bootstrap-table-export.js"></script>
        <!-- modal JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/modal-active.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard-depart/js/main.js"></script>
        <!-- internal JS
            ============================================ -->
        <script>
        var modal_alert = "<?php echo $_SESSION['modal_alert'] ?>";
        if(modal_alert == 'FailedPasswordLama') {
            $('#Password-Lama').modal('show');
        } else if(modal_alert == 'FailedPasswordConfirm') {
            $('#Password-Confirm').modal('show');
        } else if(modal_alert == 'SuccessPassword') {
            $('#Password-Success').modal('show');
        }
    </script>
    </body>

</html>