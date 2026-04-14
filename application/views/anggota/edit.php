<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Edit Anggota</h2>

<div class="card shadow">
    <div class="card-body">

<form method="post" action="<?= site_url('anggota/update/'.$anggota->id); ?>">

    <div class="form-group">
        <label>Nomor Anggota</label>
        <input type="text" name="nomor_anggota" class="form-control" 
               value="<?= $anggota->nomor_anggota; ?>" required>
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" 
               value="<?= $anggota->nama; ?>" required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"><?= $anggota->alamat; ?></textarea>
    </div>

    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" 
               value="<?= $anggota->telepon; ?>">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" 
               value="<?= $anggota->email; ?>">
    </div>

    <div class="form-group">
        <label>Tanggal Daftar</label>
        <input type="date" name="tanggal_daftar" class="form-control" 
               value="<?= $anggota->tanggal_daftar; ?>">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="Aktif" <?= $anggota->status == 'Aktif' ? 'selected' : ''; ?>>Aktif</option>
            <option value="Tidak Aktif" <?= $anggota->status == 'Tidak Aktif' ? 'selected' : ''; ?>>Tidak Aktif</option>
        </select>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= site_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>

</form>

    </div>
</div>
</div>