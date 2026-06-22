<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Peminjaman</h1>

    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="<?= site_url('peminjaman/simpan'); ?>">
                <div class="form-group">
                    <label>Anggota</label>
                    <select name="anggota_id" class="form-control">
                        <?php foreach($anggota as $a): ?>
                            <option value="<?= $a->id; ?>"><?= $a->nama; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Buku</label>
                    <select name="buku_id" class="form-control">
                        <?php foreach($buku as $b): ?>
                            <option value="<?= $b->id_buku; ?>"><?= $b->judul_buku; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Jatuh tempo</label>
                    <input type="date" name="tgl_jatuh_tempo" class="form-control required">
                </div>
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>