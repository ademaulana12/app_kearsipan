<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Pengaturan</h2>
                                    <p>Silahkan tambah kategori</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="info">
    <div class="container">
        <div class="sale-statistic-inner notika-shadow">
            <form action="<?= base_url('pengaturan/tambah_kategori') ?>" method="post">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Nama kategori</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Masukan nama kategori">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="info">
    <div class="container">
        <div class="sale-statistic-inner notika-shadow mg-tb-30">
            <table id="data-table-basic" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($get_kategori as $gk) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $gk['nama_kategori'] ?></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    <?= $this->session->flashdata('messageAlert') ?>
</script>