    <!-- Start Status area -->
    <div class="info-grafi">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?= $jumlah_surat_masuk ?></span></h2>
                            <p>Total Surat Masuk</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?= $jumlah_surat_keluar ?></span></h2>
                            <p>Total Surat Keluar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>
                                <span class="counter">
                                    <?php
                                    $jumlah = $jumlah_surat_masuk + $jumlah_surat_keluar;
                                    echo $jumlah;
                                    ?>
                                </span>
                            </h2>
                            <p>Total Surat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div id="info">
        <div class="container">
            <div class="sale-statistic-inner notika-shadow mg-tb-30">
                <div class="curved-inner-pro">
                    <div class="curved-ctn">
                        <h2>Aplikasi Sistem Pengelolaan Surat Keluar dan Masuk</h2>
                        <p>Sistem yang dikelola oleh tata usaha dan ditujukan untuk mencatat dan mengelola surat masuk dan surat keluar dari dalam maupun luar sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->