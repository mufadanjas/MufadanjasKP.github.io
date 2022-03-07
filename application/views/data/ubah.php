<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Anda sekarang <strong>berhasil</strong> Mendaftar Praktek, <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pasien
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_pasien" value="<?= $data['id_pasien']; ?>">
                        <div class="form-group">
                            <label for="nama_pasien">Nama</label>
                            <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" value="<?= $data['nama_pasien']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_pasien'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-Laki" checked>
                                <label class="form-check-label" for="jeniskelamin1">
                                    Laki - Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                                <label class="form-check-label" for="jenis_kelamin2">
                                    Perempuan
                                </label>
                            </div>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $data['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="" name="no_hp" class="form-control" id="no_hp" value=" <?= $data['no_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <select class="form-control" id="keterangan" name="keterangan">
                                <?php foreach ($keterangan as $k) : ?>
                                    <?php if ($k == $data['keterangan']) : ?>
                                        <option value="<?= $k; ?>" selected><?= $k; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $k; ?>"><?= $k; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tgl_daftar">Tanggal Pendaftaran</label>
                            <input type="date" name="tgl_daftar" class="form-control" id="tgl_daftar" value="<?= $data['tgl_daftar']; ?>">
                            <small class=" form-text text-danger"><?= form_error('tgl_daftar'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>