<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Buku</title>

    <style>
        body{
            font-family: Arial;
        }

        h3{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid black;
        }

        th, td{
            padding: 8px;
            text-align: center;
        }

        @media print{
            button{
                display: none;
            }
        }
    </style>
</head>

<body>

    <h3>Laporan Buku</h3>

    <?php if($bulan): ?>
        <p>Bulan: <?= $bulan; ?></p>
    <?php endif; ?>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Lokasi Rak</th>
        </tr>

        <?php $no=1; foreach($data as $k): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $k->kode_buku; ?></td>
            <td><?= $k->judul_buku; ?></td>
            <td><?= $k->penulis; ?></td>
            <td><?= $k->penerbit; ?></td>
            <td><?= $k->tahun; ?></td>
            <td><?= $k->kategori; ?></td>
            <td><?= $k->stok; ?></td>
            <td><?= $k->lokasi_rak; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <br><br>

    <p style="text-align:right;">
        Tangerang, <?= date('d-m-Y'); ?><br><br><br>
        (Admin)
    </p>

    <script>
        window.print();
    </script>

</body>
</html>