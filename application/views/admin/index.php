<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-tachometer-alt"> <?= $title; ?></i></h1>
    <hr>
    <div class="row text-white">
        <div class="card bg-info ml-5 p-md-1" style="width: 19rem;">
            <div class="card-body">
                <div class="card-body-icon mr-2"><i class="fas fa-fw fa-users"></i></div>
                <h5 class="card-title">Jumlah Data Pasien</h5>
                <div class="display-4"><?= $data_pasien ?></div>
                <hr>
                <a href="<?= base_url(); ?>data/">
                    <p class="card-text text-white">Lihat Selengkapnya<i class="fas fa-fw fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>

        <div class="card bg-warning ml-5 p-md-1" style="width: 19rem;">
            <div class="card-body">
                <div class="card-body-icon mr-2 mt-1"><i class="fas fa-fw fa-procedures"></i></div>
                <h5 class="card-title">Jumlah Data Pemeriksaan</h5>
                <div class="display-4"><?= $data_periksa ?></div>
                <hr>
                <a href="<?= base_url(); ?>hasil/">
                    <p class="card-text text-white">Lihat Selengkapnya<i class="fas fa-fw fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>

        <div class="card bg-danger ml-5 p-md-1" style="width: 19rem;">
            <div class="card-body">
                <div class="card-body-icon mr-2 mt-1"><i class="fas fa-fw fa-money-check-alt"></i></div>
                <h5 class="card-title">Jumlah Data Pembayaran</h5>
                <div class="display-4"><?= $data_bayar ?></div>
                <hr>
                <a href="<?= base_url(); ?>transaksi/">
                    <p class="card-text text-white">Lihat Selengkapnya<i class="fas fa-fw fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="card bg-success">
            <div class="card-body text-white">
                <div class="card-body-icon1 mr-5"><i class="fas fa-fw fa-file-medical"></i></div>
                <h5 class="card-title1">Pendaftaran Pasien</h5>
                <p class="card-text1">Mendaftarkan pasien yang memilih untuk datang langsung ke tempat praktek Drg. Elvi Indah Royani</p>
                <a href="<?= base_url(); ?>data/tambah/" class="btn btn-primary float-right">Go Register</a>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->