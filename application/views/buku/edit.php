<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Buku</h1>

    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="<?= site_url('buku/update/'.$buku->id_buku); ?>">
                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" value="<?= $buku->kode_buku; ?>"required>
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" value="<?= $buku->judul_buku; ?>"required>
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="<?= $buku->penulis; ?>"required>
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="<?= $buku->penerbit; ?>"required>
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" value="<?= $buku->tahun; ?>"required>
                    <label>Kategori</label><br>
                    <select id="kategori" name="kategori" class="form-control" required>
                        <option value=""> Pilih </option>
                        <option value="Sejarah" <?= ($buku->kategori == 'Sejarah') ? 'selected' : ''; ?>>Sejarah</option>
                        <option value="Novel" <?= ($buku->kategori == 'Novel') ? 'selected' : ''; ?>>Novel</option>
                        <option value="Komik" <?= ($buku->kategori == 'Komik') ? 'selected' : ''; ?>>Komik</option>
                        <option value="Pendidikan" <?= ($buku->kategori == 'Pendidikan') ? 'selected' : ''; ?>>Pendidikan</option>
                        <option value="SainTek" <?= ($buku->kategori == 'SainTek') ? 'selected' : ''; ?>>SainTek</option>
                    </select>
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?= $buku->stok; ?>"required>
                    <label>Stok Rak</label>
                    <input type="text" name="stok_rak" class="form-control" value="<?= $buku->stok_rak; ?>"required>
                </div>
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
                <a href="<?= site_url('buku');?>" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>