<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
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
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>datauser/tambah" class="btn btn-primary">Tambah Praktek</a>
        </div>
    </div>
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cek Status Pasien</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pasien</th>
                            <th>No Handphone</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>Tanggal Tindakan ACC</th>
                            <th>Hasil Pemeriksaan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $psn) { ?>
                            <tr>
                                <td><?= $no++;  ?></td>
                                <td><?= $psn['nama_pasien'];  ?></td>
                                <td><?= $psn['no_hp'];  ?></td>
                                <td><?= $psn['tgl_daftar'];  ?></td>
                                <td><?= $psn['tgl_tindakan'];  ?></td>
                                <td><?= $psn['hasil_pemeriksaan'];  ?></td>
                                <td>
                                    <?php if ($psn['status'] == 'Process') : ?>
                                        <a href="#" title="Tindakan" class="btn btn-warning btn-sm">
                                            <span class="text-white">Process</span>
                                        </a>
                                    <?php elseif ($psn['status'] == 'Success') : ?>
                                        <a href="#" title="Tindakan" class="btn btn-success btn-sm">
                                            <span class="text-white">Success</span>
                                        </a>
                                    <?php else : ?>
                                        <a href="#" title="Tindakan" class="btn btn-danger btn-sm">
                                            <span class="text-white">End</span>
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