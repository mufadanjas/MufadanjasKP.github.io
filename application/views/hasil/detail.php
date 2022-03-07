<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pemeriksaan Pasien
                </div>
                <div class="card-body">
                    <h1 class="card-title text-dark"><?= $data['nama_pasien']; ?></h1>
                    <p class="card-text">Tanggal Pemeriksaan : <?= $data['tgl_periksa']; ?></p>
                    <p class="card-text">Keluhan : <?= $data['keluhan']; ?></p>
                    <p class="card-text">Diagnosa : <?= $data['diagnosa']; ?></p>
                    <p class="card-text">Saran : <?= $data['saran']; ?></p>
                    <a href="<?= base_url(); ?>hasil" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>