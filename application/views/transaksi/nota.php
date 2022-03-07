<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h2>Pengisian Transaksi</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <!-- <form onSubmit="if(!confirm('Pastikan sudah terjadi pembayaran!')){return false;}" action="<?= base_url('transaksi/index'); ?>" method="POST" name="frm_byr"> -->
                        <div class="form-group">
                            <strong><label for="nama_pasien">Nama</label></strong>
                            <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" value="<?= $pasien['nama_pasien']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_pasien'); ?></small>
                        </div>

                        <div class="form-group">
                            <strong><label for="tgl_transaksi">Tanggal Transaksi</label></strong>
                            <input type="date" name="tgl_transaksi" class="form-control" id="tgl_transaksi">
                            <small class="form-text text-danger"><?= form_error('tgl_transaksi'); ?></small>
                        </div>

                        <div class="form-group">
                            <strong><label for="biaya">Biaya</label></strong>
                            <input type="text" placeholder="Biaya (Rp)" name="biaya" class="form-control" id="biaya">
                            <small class="form-text text-danger"><?= form_error('biaya'); ?></small>
                        </div>

                        <div class="form-group">
                            <strong><label for="jumlah_bayar">Jumlah Yang Dibayar</label></strong>
                            <input type="text" placeholder="Uang yang dibayarkan (Rp)" name="jumlah_bayar" class="form-control" id="jumlah_bayar">
                            <small class="form-text text-danger"><?= form_error('jumlah_bayar'); ?></small>
                        </div>

                        <!-- <input readonly type="number" id="kembali" name="kembali" class="form-control" onfocus="startCalculate()" onblur="stopCalc()" required=""> -->
                        <div class="form-group mb-0">
                            <strong><label for="kembali">Kembali</label></strong>
                            <input type="text" id="kembali" name="kembali" class="form-control" placeholder="Kembalian (Rp)" readonly="">
                        </div>

                        <div class="form-group mt-3">
                            <strong><label for="keterangan">Catatan</label></strong>
                            <input type="text" name="keterangan" class="form-control" id="keterangan">
                            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                        </div>

                        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#biaya, #jumlah_bayar").keyup(function() {
                                    var biaya = $("#biaya").val();
                                    var jumlah_bayar = $("#jumlah_bayar").val();

                                    var kembali = parseInt(jumlah_bayar) - parseInt(biaya);
                                    $("#kembali").val(kembali);
                                });
                            });
                        </script>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>