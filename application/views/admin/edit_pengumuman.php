<h1 class="h3 mb-4 text-gray-800">Edit Pengumuman</h1>

<?= form_open_multipart('admin/pengumuman/simpan_edit'); ?>
<div class="card shadow mb-4">
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <input type="hidden" name="id" value="<?= $edit_pm['id'] ?>">
        <div class="row mb-4">
            <div class="col-md-9">
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pengumuman" value="<?= $edit_pm['judul'] ?>" required>
            </div>
            <div class="col-md-3 mt-1">
                <input type="file" id="gambar" name="gambar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea id="ckeditor" name="isi"><?= $edit_pm['isi'] ?></textarea>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary float-right">Publish</button>
            </div>
        </div>
    </div>
</div>