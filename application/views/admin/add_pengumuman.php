<h1 class="h3 mb-4 text-gray-800">Add Pengumuman</h1>

<?= form_open_multipart('admin/add_pengumuman/add'); ?>
<div class="card shadow mb-4">
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="row mb-4">
            <div class="col-md-9">
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pengumuman" required>
            </div>
            <div class="col-md-3 mt-1">
                <input type="file" id="gambar" name="gambar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea id="ckeditor" name="isi"></textarea>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary float-right">Publish</button>
            </div>
        </div>
    </div>
</div>
</form>