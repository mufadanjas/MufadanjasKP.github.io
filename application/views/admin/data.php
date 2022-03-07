<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pasien</h3>
            <ul class="list-group">
                <?php foreach ($pasien as $psn) : ?>
                    <li class="list-group-item">
                        <?= $psn['nama_pasien']; ?>
                        <a href="<?= base_url(); ?>tb_pasien/hapus/<?= $psn['id']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>tb_pasien/ubah/<?= $psn['id']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>tb_pasien/detail/<?= $psn['id']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>