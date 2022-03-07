<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pasien <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan kunjungan dan transaksi pasien</h6>
        </div>
        <div class="card-body">
            <!-- <a href="<?= base_url(); ?>transaksi/print/" title="Print" class="btn btn-dark float-right"><i class="fas fa-fw fa-print"></i>Print</a> -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Transaksi</th>
                            <th>Biaya</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $psn) { ?>
                            <tr>
                                <td><?= $no++;  ?></td>
                                <td><?= $psn['nama_pasien'];  ?></td>
                                <td><?= $psn['tgl_transaksi'];  ?></td>
                                <td><?= $psn['biaya'];  ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>transaksi/detail/<?= $psn['id_pasien']; ?>" title="Detail data" class="btn btn-dark btn-sm float-r"><i class="fas fa-info-circle"></i></a>
                                    <!-- <a href="<?= base_url(); ?>transaksi/hapus/<?= $psn['no_pembayaran']; ?>" title="Hapus" class="badge badge-danger btn-sm float-r tombol-hapus"><i class="fas fa-fw fa-trash"></i></a> -->
                                </td>
                                <!-- <td>
                                    <?php if ($psn['status'] == 'Process') : ?>
                                        <a href="<?= base_url(); ?>data/detail/<?= $psn['id_pasien']; ?>" title="Klik ACC" class="btn btn-warning btn-sm">
                                            <span class="text-white">Process</span>
                                        </a>
                                    <?php elseif ($psn['status'] == 'Success') : ?>
                                        <a href="#" title="Berhasil di ACC" class="btn btn-success btn-sm">
                                            <span class="text-white">Success</span>
                                        </a>
                                        <a href="<?= base_url(); ?>data/tambahPeriksa/<?= $psn['id_pasien']; ?>" title="Klik Untuk Isi Pemeriksaan" class="btn btn-primary btn-sm">
                                            <span class="text-white">Pemeriksaan</span>
                                        </a>
                                    <?php else : ?>
                                        <a href="#" title="Tindakan" class="btn btn-danger btn-sm">
                                            <span class="text-white">End</span> -->
                                </a>
                            <?php endif; ?>
                            </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->