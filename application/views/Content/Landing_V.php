<div class="bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-50 p-l-15 p-r-15" style="background-image: url('<?= base_url(); ?>assets/landing/images/landing/background.jpg');">
    <div class="wsize1">

        <h3 class="l1-txt1 txt-center p-b-22 ">
            PT Zetka Niagatama
        </h3>

        <p class="txt-center m2-txt1 p-b-67">
            Selamat datang di website kami.
        </p>

        <div class="flex-w flex-sa-m cd100 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
            
            <div class="flex-col-c-m wsize2 m-b-20">
                <span class="l1-txt2 p-b-4 hours" id="hours-timer"></span>
                <span class="m2-txt2">Hours</span>
            </div>

            <span class="l1-txt2 p-b-22 respon2">:</span>

            <div class="flex-col-c-m wsize2 m-b-20">
                <span class="l1-txt2 p-b-4 minutes" id="minutes-timer"></span>
                <span class="m2-txt2">Minutes</span>
            </div>

            <span class="l1-txt2 p-b-22">:</span>

            <div class="flex-col-c-m wsize2 m-b-20">
                <span class="l1-txt2 p-b-4 seconds" id="seconds-timer"></span>
                <span class="m2-txt2">Seconds</span>
            </div>
        </div>

        <form action="<?= site_url(); ?>Landing/menu" method="post" class="flex-w flex-c-m contact100-form validate-form p-t-50">
            
            <button type="submit" name="penjualan" class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
                Bagian Penjualan
            </button>
            <button type="submit" name="agen" class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
                Agen
            </button>
            <button type="submit" name="keuangan" class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
                Bagian Keuangan
            </button>
            <button type="submit" name="admin" class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
                Admin
            </button>
        </form>			
    </div>
</div>