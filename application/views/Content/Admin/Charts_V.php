<!-- Charts Start-->
<div class="charts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="charts-single-pro shadow-reset nt-mg-b-30">
                    <div class="alert-title">
                        <h2>Bar Chart</h2>
                        <?php if(($bulan != NULL) && ($tahun != NULL))  { ?>
                            <p>Bulan : <?= $bulan ?>. </p>
                            <p>Tahun : <?= $tahun ?>. </p>
                        <?php } else { ?>
                            <p>Tipe Barang : <?= $tipe ?>. </p>
                        <?php }  ?>
                    </div>
                    <div id="bar1-chart">
                        <canvas id="barchart1"></canvas>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
<!-- Charts End-->