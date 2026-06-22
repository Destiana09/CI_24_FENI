<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Buku</h1>

    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="<?= site_url('buku/simpan'); ?>">
                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" required>
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" required>
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control" required>
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" required>
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" required>
                    <label>Kategori</label><br>
                    <select id="kategori" name="kategori" class="form-control" required>
                        <option value=""> Pilih </option>
                        <option value="Sejarah"> Sejarah </option>
                        <option value="Novel"> Novel </option>
                        <option value="Komik"> Komik </option>
                        <option value="Pendidikan"> Pendidikan </option>
                        <option value="SainTek"> SainTek </option>
                    </select>
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" required>
                    <label>Lokasi Rak</label>
                    <input type="text" name="lokasi_rak" class="form-control" required>
                    
                </div>
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
                <a href="<?= site_url('buku');?>" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>