<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pasien
                </div>
                <div class="card-body">
                    <h1 class="card-title text-dark"><?= $data['nama_pasien']; ?></h1>
                    <p class="card-text">Tanggal Daftar : <?= $data['tgl_daftar']; ?></p>
                    <p class="card-text">Nomor Handphone : <?= $data['no_hp']; ?></p>
                    <p class="card-text">Jenis Kelamin : <?= $data['jenis_kelamin']; ?></p>
                    <p class="card-text">Keterangan Praktek : <?= $data['keterangan']; ?></p>
                    <p class="card-text">Alamat : <?= $data['alamat']; ?></p>
                    <a href="<?= base_url(); ?>data" class="btn btn-primary">Kembali</a>
                    <a href="<?= base_url('data/acc/' . $data['id_pasien']); ?>" class="btn btn-warning float-right">ACC</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>