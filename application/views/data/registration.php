<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Formulir Pendaftaran Praktek
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_pasien">Nama</label>
                            <input type="text" name="nama_pasien" class="form-control" id="nama_pasien">
                            <small class="form-text text-danger"><?= form_error('nama_pasien'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="" name="no_hp" class="form-control" id="no_hp">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <select class="form-control" id="keterangan" name="keterangan">
                                <option value="Honorarium Konsultasi / Pemeriksaan gigi dan mulut">Honorarium Konsultasi / Pemeriksaan gigi dan mulut</option>
                                <option value="Pengobatan Penyakit gusi">Pengobatan Penyakit gusi</option>
                                <option value="Pencabutan gigi tetap/sulung">Pencabutan gigi tetap/sulung</option>
                                <option value="Pembedahan">Pembedahan</option>
                                <option value="Pengobatan/perawatan Urat Syaraf gigi+Tumpatan sementara">Pengobatan/perawatan Urat Syaraf gigi+Tumpatan sementara</option>
                                <option value="Penambalan gigi dengan - dispers alloy - Composite">Penambalan gigi dengan - dispers alloy - Composite</option>
                                <option value="Pembersihan Karang gigi">Pembersihan Karang gigi</option>
                                <option value="Lain-Lain">Lain-Lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_daftar">Tanggal Pendaftaran</label>
                            <input type="date" name="tgl_daftar" class="form-control" id="tgl_daftar">
                            <small class="form-text text-danger"><?= form_error('tgl_daftar'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Kirim Pengajuan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>