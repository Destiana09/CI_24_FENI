<div class="container-fluid">
<h3>Laporan Buku</h3>

<form method="get">
    <input type="month" name="bulan" value="<?= $bulan; ?>">
    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
    <a href="<?= site_url('laporan/cetak_buku'); ?>" class="btn btn-secondary btn-sm">Reset</a>
</form>

<br>

<a href="<?= site_url('buku/cetak_lpbuku?bulan='. $bulan); ?>"
target="_blank" class="btn btn-success btn-sm">Cetak PDF</a>

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

    <?php $no=1; foreach($buku as $k): ?>
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
</div>