<div class="container-fluid">

<h2 class=" h3 mb-4 text-gray-800">Data Buku</h2>

<a href="<?= site_url('buku/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>

<div class="card shadow mb-4">
    <div class="card-body">
<table class="table table-bordered" id="dataTable">
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th>Lokasi Rak</th>
        <th>Aksi</th>

    </tr>
    </thead>
    <tbody>
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
                <td>
                    <a href="<?= site_url('buku/edit/' .$k->id_buku); ?>"> Edit || </a>
                    <a href="<?= site_url('buku/hapus/' .$k->id_buku); ?>"
                    onclick="return confirm('Yakin ingin dihapus?')">Hapus</a>
                </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</div>