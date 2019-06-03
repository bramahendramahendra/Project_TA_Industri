<!-- Charts Start-->
<div class="charts-area mg-b-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="charts-single-pro shadow-reset nt-mg-b-30">
                    <div class="alert-title">
                        <h2>Report Barang</h2>
                        
                    </div>
                    <div id="bar1-chart">
                        <canvas id="barchart1"></canvas>
                    </div>
                    <?php if($bulan == 'active') { ?>
                    <div class="alert-title">
                        <h2>Keterangan</h2>
                        <p>1 = Januari</p>
                        <p>2 = Februari</p>
                        <p>3 = Maret</p>
                        <p>4 = April</p>
                        <p>5 = Mei</p>
                        <p>6 = Juni</p>
                        <p>7 = Juli</p>
                        <p>8 = Agustus</p>
                        <p>9 = september</p>
                        <p>10 = Oktober</p>
                        <p>11 = November</p>
                        <p>12 = Desember</p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
<!-- Charts End-->