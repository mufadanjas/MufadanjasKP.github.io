<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <!-- <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Anda sekarang <strong>berhasil</strong> Mendaftar Praktek, <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?> -->
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Formulir Pemeriksaan Pasien
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <strong><label for="nama_pasien">Nama</label></strong>
                            <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" value="<?= $pasien['nama_pasien']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_pasien'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tgl_periksa">Tanggal Pemeriksaan</label>
                            <input type="date" name="tgl_periksa" class="form-control" id="tgl_periksa">
                            <small class=" form-text text-danger"><?= form_error('tgl_periksa'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="keluhan">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control" id="keluhan">
                            <small class="form-text text-danger"><?= form_error('keluhan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="diagnosa">Diagnosa</label>
                            <input type="text" name="diagnosa" class="form-control" id="diagnosa">
                            <small class="form-text text-danger"><?= form_error('diagnosa'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="saran">Saran</label>
                            <input type="textarea" name="saran" class="form-control" id="saran">
                            <small class="form-text text-danger"><?= form_error('saran'); ?></small>
                        </div>
                        <button type="submit" name="Simpan" class="btn btn-primary float-right">Simpan Pemeriksaan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>