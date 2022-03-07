<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Laporan kunjungan dan transaksi pasien
                </div>
                <div class="card-body">
                    <h1 class="card-title text-dark"><?= $data['nama_pasien']; ?></h1>
                    <p class="card-text">Tanggal Transaksi : <?= $data['tgl_transaksi']; ?></p>
                    <p class="card-text">Biaya : <?= $data['biaya']; ?></p>
                    <p class="card-text">Jumlah Dibayar : <?= $data['jumlah_bayar']; ?></p>
                    <p class="card-text">Kembali : <?= $data['kembali']; ?></p>
                    <p class="card-text">Keterangan : <?= $data['keterangan']; ?></p>
                    <p class="card-text">Status : <?= $data['status']; ?></p>
                    <a href="<?= base_url(); ?>transaksi/index/" class="btn btn-primary">Kembali</a>
                    <a href="<?= base_url(); ?>transaksi/print/" title="Print" class="btn btn-dark float-right"><i class="fas fa-fw fa-print"></i>Print</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>