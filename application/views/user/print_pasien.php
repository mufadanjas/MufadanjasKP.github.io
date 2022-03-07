<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Nota</title>
</head>

<body>
    <table>
        <tr>
            <th>
            <th>#</th>
            </th>
            <th>Nama Pasien</th>
            <th>Tanggal Transaksi</th>
            <th>Biaya</th>
            <th>Jumlah Dibayar</th>
            <th>Kembali</th>
            <th>Keterangan</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;
        foreach ($tb_pembayaran as $bayar) : ?>

            <tr>
                <td>
                <td><?= $no++;  ?></td>
                </td>
                <td><?= $bayar['nama_pasien'];  ?></td>
                <td><?= $bayar['tgl_transaksi'];  ?></td>
                <td><?= $bayar['biaya'];  ?></td>
                <td><?= $bayar['jumlah_bayar'];  ?></td>
                <td><?= $bayar['kembali'];  ?></td>
                <td><?= $bayar['keterangan'];  ?></td>
                <td><?= $bayar['status'];  ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>