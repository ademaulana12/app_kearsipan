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
                                    <h2>Tambah data surat masuk</h2>
                                    <p>Klik tombol disamping untuk menambah data</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <button data-toggle="modal" data-target="#form-tambah-surat-masuk" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i> Tambah Data</button>
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
        <div class="sale-statistic-inner notika-shadow mg-tb-30">
            <h2>Data Surat Masuk</h2>
            <table id="data-table-basic" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Surat</th>
                        <th>Jenis Surat</th>
                        <th>Pengirim Surat</th>
                        <th>Deskripsi Surat</th>
                        <th>Unduh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($get_surat_masuk as $gsm) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $gsm['nomor_surat'] ?></td>
                            <td><?= $gsm['jenis_surat'] ?></td>
                            <td><?= $gsm['pengirim_surat'] ?></td>
                            <td><?= $gsm['deskripsi_surat'] ?></td>
                            <td>
                                <a class="btn btn-primary btn-block" href="<?= base_url('upload/surat_masuk/' . $gsm['file_surat']) ?>" target="_blank"><i class="notika-icon notika-file"></i> <?= $gsm['file_surat'] ?></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="form-tambah-surat-masuk" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h3>Tambah Data</h3>
            </div>
            <form action="<?= base_url('surat_masuk/tambah_data') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group row mt-4">
                        <div class="col-md-4">
                            <label for="">Nomor Surat</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="nomor_surat" id="" class="form-control" placeholder="Masukan nomor surat" require>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-md-4">
                            <label for="">Tanggal Surat</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" name="tanggal_surat" id="" class="form-control" require>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-md-4">
                            <label for="">Jenis Surat</label>
                        </div>
                        <div class="col-md-8">
                            <select name="jenis_surat" id="" class="form-control" require>
                                <option>Pilih jenis surat</option>
                                <?php
                                foreach ($get_kategori as $gk) { ?>
                                    <option value="<?= $gk['nama_kategori'] ?>"><?= $gk['nama_kategori'] ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-md-4">
                            <label for="">Pengirim Surat</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="pengirim_surat" id="" class="form-control" placeholder="Masukan pengirim surat" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Deskripsi surat</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="deskripsi_surat" id="" cols="30" rows="10" class="form-control" require></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">File Surat</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="upload_file" id="" class="form-control" require>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Sale Statistic area-->

<script>
    <?= $this->session->flashdata('messageAlert') ?>
</script>