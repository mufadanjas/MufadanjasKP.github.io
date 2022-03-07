<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <!-- <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pasien <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?> -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Pembayaran Anda</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Transaksi</th>
                            <th>Biaya</th>
                            <th>Status</th>
                            <th>Klik Detail</th>
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
                                <td><?= $psn['status'];  ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>datauser/detailbayar/<?= $psn['id_pasien']; ?>" title="Detail data" class="btn btn-dark btn-sm float-r"><i class="fas fa-info-circle"></i></a>
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