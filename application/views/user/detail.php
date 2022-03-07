<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pemeriksaanmu
                </div>
                <div class="card-body">
                    <h1 class="card-title text-dark"><?= $detail['nama_pasien']; ?></h1>
                    <p class="card-text">Tanggal Pemeriksaan : <?= $detail['tgl_periksa']; ?></p>
                    <p class="card-text">Keluhan : <?= $detail['keluhan']; ?></p>
                    <p class="card-text">Diagnosa : <?= $detail['diagnosa']; ?></p>
                    <p class="card-text">Saran : <?= $detail['saran']; ?></p>
                    <a href="<?= base_url(); ?>datauser/periksa/" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>