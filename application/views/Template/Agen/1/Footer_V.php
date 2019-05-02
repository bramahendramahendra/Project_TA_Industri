        
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
        <!-- form validate JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/jquery.form.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/jquery.validate.min.js"></script>
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/form-active.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="<?= base_url(); ?>assets/dashboard_agen/js/main.js"></script>

        <script>
            var SignUp = "<?php echo $_SESSION['SignUp'] ?>";
            if(SignUp == 'FailedInput') {
                $('#SignUp').modal('show');
            } else if(SignUp == 'Success') {
                $('#SuccessSignUp').modal('show');
            } else if(SignUp == 'FailedDuplikat') {
                $('#FailedSignUp').modal('show');
            }
        </script>
    </body>

</html>