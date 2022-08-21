<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="<?php if ($this->uri->segment(1) == 'dashboard') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>">
                        <a href="<?= base_url('dashboard') ?>"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li class="<?php if ($this->uri->segment(1) == 'surat_masuk') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="<?= base_url('surat_masuk') ?>"><i class="notika-icon notika-mail"></i> Surat Masuk</a>
                    </li>
                    <li class="<?php if ($this->uri->segment(1) == 'surat_keluar') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href=" <?= base_url('surat_keluar') ?>"><i class="notika-icon notika-mail"></i> Surat Keluar</a>
                    </li>
                    <li class="<?php if ($this->uri->segment(1) == 'pengaturan') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href=" <?= base_url('pengaturan') ?>"><i class="notika-icon notika-settings"></i> Pengaturan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->