    <!-- Modals Start-->
    <div class="login-form-area adminpro-pd mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- modal succes -->
                    <div id="modal-success" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                    <i class="fa fa-check modal-check-pro"></i>
                                    <h2>Berhasil!</h2>
                                    <?php if(isset($_SESSION['SuccessRegister'])) { ?>
                                        <p>Registrasi akun admin BERHASIL ditambahkan.</p>
                                    <?php } ?>
                                </div>
                                <div class="modal-footer footer-modal-admin">
                                    <a data-dismiss="modal" href="#">Done</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <!-- Modals End-->
  
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
    <!-- form validate JS
		============================================ -->
    <script src="<?= base_url(); ?>assets/dashboard/js/jquery.form.min.js"></script>
    <script src="<?= base_url(); ?>assets/dashboard/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>assets/dashboard/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url(); ?>assets/dashboard/js/main.js"></script>
    <!-- main JS
		============================================ -->
    <script>
        var session_success = "<?php echo $_SESSION['SuccessRegister'] ?>";
        if(session_success) {
            $('#modal-success').modal('show');
        }
    </script>
</body>

</html>